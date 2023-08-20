<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SupplierAcc extends Model
{
    use HasFactory;

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
        'supl_code',
        'bank_code',
        'acc_no',
        'acc_name',
        'acc_desc',
        'acc_curr',
        'acc_status',
        'created_by',
        'updated_by',
    ];

    function supplier() {
        return $this->hasOne(Supplier::class, 'supl_code', 'supl_code');
    }

    function bank() {
        return $this->hasOne(Bank::class, 'bank_code', 'bank_code');
    }

    function coy() {
        return $this->belongsTo(Coy::class, 'coy_id', 'coy_id');
    }
}
