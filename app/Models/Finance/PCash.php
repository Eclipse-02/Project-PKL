<?php

namespace App\Models\Finance;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class PCash extends Model
{
    protected $table = 'fin_mst_pcash';
    protected $primaryKey = 'trxdtl_code';

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
        'trxdtl_code',
        'status',
        'created_by',
        'updated_by',
    ];

    public function trxdtl()
    {
        return $this->hasOne(TransactionDetail::class, 'trxdtl_code');
    }
}
