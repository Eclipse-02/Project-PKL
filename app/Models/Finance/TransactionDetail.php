<?php

namespace App\Models\Finance;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $table = 'fin_mst_trxdtl';

    /**
     * The "booting" function of model
     *
     * @return void
     */
    protected static function boot() {
        parent::boot();

        static::creating(function ($model) {
            if ( ! $model->getKey()) {
                $model->id = (string) Str::uuid();
            }
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
        'trxdtl_code',
        'trxdtl_desc',
        'trxdtl_flag',
        'trxdtl_param',
        'trxdtl_segment1',
        'trxdtl_segment2',
        'trxdtl_segment3',
        'trxdtl_segment4',
        'trxdtl_segment5',
        'trxdtl_segment6',
        'trxdtl_segment7',
        'trxdtl_segment8',
        'trxdtl_segment9',
        'trxdtl_segment10',
        'trxdtl_segment11',
        'trxdtl_segment12',
        'trxdtl_by_isshare',
        'created_by',
        'updated_by',
    ];
}
