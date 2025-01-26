<?php

namespace App\Models\Finance\Transaction\Receive;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Thiagoprz\CompositeKey\HasCompositeKey;

class ReceiveDetail extends Model
{
    use HasCompositeKey;
    protected $table = 'fin_mst_rvdtl';
    protected $primaryKey = ['rvmst_code', 'trxdtl_code'];

    /**
     * The "booting" function of model
     *
     * @return void
     */
    protected static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * Get the auto-incrementing key type.
     *
     * @return string
     */
    public function getKeyType()
    {
        return 'string';
    }

    protected $fillable = [
        'coy_id',
        'rvmst_code',
        'trxdtl_code',
        'status',
        'created_by',
        'updated_by',
    ];
}
