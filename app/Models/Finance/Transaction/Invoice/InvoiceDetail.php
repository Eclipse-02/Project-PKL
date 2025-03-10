<?php

namespace App\Models\Finance\Transaction\Invoice;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    protected $table = 'fin_mst_invdtl';

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
        'invmst_code',
        'trxdtl_code',
        'status',
        'created_by',
        'updated_by',
    ];
}