<?php

namespace App\Http\Controllers;

use App\Cart;
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

class CartController extends Controller
{

    /**
     * My CartController Page
     *
     * @return Application|Factory|View
     *
     * @throws Exception
     */
    public function myCartPage()
    {
        try {
            $userId = Auth::user()->id;

            $carts = DB::table('cart')
                ->select([
                    'cart.id as cart_id',
                    'cart.quantity',
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
                ->join('user', static function (JoinClause $clause) use ($userId) {
                    $clause->on('user.id', '=', 'cart.user_id');
                    $clause->where('user.id', '=', $userId);
                })
                ->join('phone_detail', static function (JoinClause $clause) {
                    $clause->on('phone_detail.id', '=', 'cart.phone_detail_id');
                })
                ->join('phone', static function (JoinClause $clause) {
                    $clause->on('phone.id', '=', 'phone_detail.phone_id');
                })
                ->whereNull('cart.deleted_at')
                ->get();

        } catch (Exception $exception) {
            throw $exception;
        }

        return view('pages/myCart', ['carts' => $carts]);
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
    public function createCart(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->only([
                'phone_id',
                'phone_detail_id',
                'quantity',
            ]);

            $data['user_id'] = Auth::user()->id;

            $previousCart = Cart::where('user_id', '=', $data['user_id'])
                ->where('phone_detail_id', '=', $data['phone_detail_id'])
                ->whereNull('deleted_at')
                ->first();

            if ($previousCart) {
                $cart = Cart::findOrFail($previousCart->id);
                $data['quantity'] += $previousCart->quantity;
                $cart->setAttributeModel($data);
                $cart->save();
            } else {
                $cart = new Cart();
                $cart->setAttributeModel($data);
                $cart->save();
            }

            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            throw $exception;
        }

        return redirect('/phoneDetail/' . $data['phone_id']);
    }

    /**
     * Update Cart
     *
     * @param Request $request
     *
     * @return Application|RedirectResponse|Redirector
     *
     * @throws Exception
     */
    public function updateCart(Request $request)
    {
        try {
            DB::beginTransaction();

            $cartId = Route::current()->parameter('cartId');

            $data = $request->only([
                'quantity',
            ]);

            if ($data['quantity'] > 0) {
                $cart = Cart::findOrFail($cartId);
                $cart->setAttributeModel($data);
                $cart->save();
            } else {
                $cart = Cart::findOrFail($cartId);
                $cart->delete();
                $cart->save();
            }

            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            throw $exception;
        }

        return redirect(route('my-cart'));
    }

}
