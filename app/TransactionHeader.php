<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Date;

/**
 * Class TransactionHeader
 *
 * @package App
 *
 * @mixin Builder
 *
 * @property int user_id
 * @property Date date
 */
class TransactionHeader extends Model
{
    protected $table = 'transaction_header';
    protected $primaryKey = 'id';

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany
     */
    public function transactionDetail()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    /**
     * Set Attribute Model From JSON
     *
     * @param $data
     */
    public function setAttributeModel($data)
    {
        if (isset($data['user_id'])) {
            $this->user_id = $data['user_id'];
        }

        $this->date = date("Y-m-d H:i:s");
    }
}
