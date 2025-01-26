<?php

namespace App\Models\Finance\Transaction\Parameter;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'fin_mst_trx';
    protected $primaryKey = 'trx_code';

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
        'trx_code',
        'trx_desc',
        'trx_type',
        'trx_status',
        'created_by',
        'updated_by',
    ];
}
