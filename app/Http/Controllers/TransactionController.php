<?php

namespace App\Http\Controllers;

use App\Cart;
use App\PhoneDetail;
use App\TransactionDetail;
use App\TransactionHeader;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class TransactionController extends Controller
{
    /**
     * Transaction History Page
     *
     * @return Application|Factory|View
     *
     * @throws Exception
     */
    public function transactionHistoryPage()
    {
        try {
            $userId = Auth::user()->id;

            $transactions = TransactionHeader::where('user_id', '=', $userId)->get();

            foreach ($transactions as $transaction) {
                $transaction->date = date('Y-m-d H:i:s', strtotime($transaction->date));
            }
        } catch (Exception $exception) {
            throw $exception;
        }

        return view('pages/transactionHistory', ['transactions' => $transactions]);
    }

    /**
     * Transaction Detail Page
     *
     * @return Application|Factory|View
     *
     * @throws Exception
     */
    public function transactionDetailPage()
    {
        try {
            $transactionHeaderId = Route::current()->parameter('transactionHeaderId');

            $transaction = TransactionHeader::findOrFail($transactionHeaderId);
            $transaction->date = date('Y-m-d H:i:s', strtotime($transaction->date));

            $phones = DB::table('transaction_detail')
                ->select([
                    'transaction_detail.id as transaction_detail_id',
                    'transaction_detail.quantity',
                    'phone.id as phone_id',
                    'phone.type_name',
                    'phone.photo',
                    'phone_detail.id as phone_detail_id',
                    'phone_detail.color',
                    'phone_detail.memory',
                    'phone_detail.storage',
                    'phone_detail.stock',
                    'phone_detail.price',
                ])
                ->join('phone_detail', static function (JoinClause $clause) {
                    $clause->on('phone_detail.id', '=', 'transaction_detail.phone_detail_id');
                })
                ->join('phone', static function (JoinClause $clause) {
                    $clause->on('phone.id', '=', 'phone_detail.phone_id');
                })
                ->where('transaction_detail.transaction_header_id', '=', $transactionHeaderId)
                ->get();

            $totalPrice = 0;

            foreach ($phones as &$phone) {
                $phone->subtotal = $phone->price * $phone->quantity;
                $totalPrice += $phone->subtotal;
            }

        } catch (Exception $exception) {
            throw $exception;
        }

        return view('pages/transactionDetail', ['transaction' => $transaction, 'phones' => $phones, 'totalPrice' => $totalPrice]);
    }

    /**
     * Create Cart
     *
     * @param Request $request
     *
     * @return Application|RedirectResponse|Redirector
     *
     * @throws Exception
     */
    public function createTransaction(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->only([
                'phones',
            ]);

            $data['phones'] = json_decode($data['phones'], true);
            $data['user_id'] = Auth::user()->id;

            $transactionHeader = new TransactionHeader();
            $transactionHeader->setAttributeModel($data);
            $transactionHeader->save();

            foreach ($data['phones'] as $phone) {
                $phone['transaction_header_id'] = $transactionHeader->id;
                $transactionDetail = new TransactionDetail();
                $transactionDetail->setAttributeModel($phone);
                $transactionDetail->save();

                $cart = Cart::findOrFail($phone['cart_id']);
                $cart->delete();
                $cart->save();

                // Reduce Stock
                $phoneDetail = PhoneDetail::findOrFail($phone['phone_detail_id']);
                $phoneDetail->stock = $phoneDetail->stock - $phone['quantity'];
                $phoneDetail->save();
            }

            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            throw $exception;
        }

        return redirect(route('my-cart'));
    }

}
