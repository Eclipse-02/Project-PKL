<?php

namespace App\Models\Finance;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $table = 'gl_mst_period';

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
        'period_name',
        'period_status',
        'period_year',
        'period_num',
        'period_start_date',
        'period_end_date',
        'created_by',
        'updated_by',
    ];
}
