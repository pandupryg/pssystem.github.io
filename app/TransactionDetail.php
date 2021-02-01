<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TransactionDetail
 *
 * @package App
 *
 * @mixin Builder
 *
 * @property int transaction_header_id
 * @property int phone_detail_id
 * @property int quantity
 */
class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $table = 'transaction_detail';
    protected $primaryKey = 'id';

    /**
     * @return BelongsTo
     */
    public function transactionHeader()
    {
        return $this->belongsTo(TransactionHeader::class);
    }

    /**
     * @return BelongsTo
     */
    public function phoneDetail()
    {
        return $this->belongsTo(PhoneDetail::class);
    }

    /**
     * Set Attribute Model From JSON
     *
     * @param $data
     */
    public function setAttributeModel($data)
    {
        if (isset($data['transaction_header_id'])) {
            $this->transaction_header_id = $data['transaction_header_id'];
        }

        if (isset($data['phone_detail_id'])) {
            $this->phone_detail_id = $data['phone_detail_id'];
        }

        if (isset($data['quantity'])) {
            $this->quantity = $data['quantity'];
        }
    }
}
