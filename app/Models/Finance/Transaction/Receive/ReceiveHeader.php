<?php

namespace App\Models\Finance\Transaction\Receive;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class ReceiveHeader extends Model
{
    protected $table = 'fin_mst_rvhdr';
    protected $primaryKey = 'rvmst_code';

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
        'rvmst_disply_code',
        'rvmst_desc',
        'rvmst_type',
        'rvmst_gl_category',
        'rvmst_auto',
        'rvmst_status',
        'created_by',
        'updated_by',
        'rvmst_exec_func',
    ];
}
