<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CartController
 *
 * @package App
 *
 * @mixin Builder
 *
 * @property int user_id
 * @property int phone_detail_id
 * @property int quantity
 *
 */
class Cart extends Model
{
    use SoftDeletes;

    protected $table = 'cart';
    protected $primaryKey = 'id';

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function phoneDetail()
    {
        return $this->belongsTo(PhoneDetail::class);
    }

    /**
     * Set Attribute Model
     * @param $data
     */
    public function setAttributeModel($data)
    {
        if (isset($data['user_id'])) {
            $this->user_id = $data['user_id'];
        }

        if (isset($data['phone_detail_id'])) {
            $this->phone_detail_id = $data['phone_detail_id'];
        }

        if (isset($data['quantity'])) {
            $this->quantity = $data['quantity'];
        }
    }
}
