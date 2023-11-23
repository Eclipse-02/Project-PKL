<?php

namespace App\Models\Finance;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'gl_mst_account';

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
        'glacct_code',
        'glacct_description',
        'glacct_acct_type',
        'glacct_acct_summ',
        'glacct_acct_enable',
        'glacct_acct_flag',
        'glacct_acct_default',
        'glacct_acct_parent',
        'glacct_rpt_flag',
        'glacct_segment1_allow',
        'created_by',
        'updated_by',
    ];

    public function childs() {
        return $this->hasMany(Account::class, 'glacct_acct_parent', 'glacct_code');
    }
}
