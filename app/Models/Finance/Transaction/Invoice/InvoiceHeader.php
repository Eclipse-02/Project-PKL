<?php

namespace App\Models\Finance\Transaction\Invoice;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class InvoiceHeader extends Model
{
    protected $table = 'fin_mst_invhdr';
    protected $primaryKey = 'invmst_code';

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
        'invmst_code',
        'invmst_display_code',
        'invmst_desc',
        'invmst_gl_category',
        'invmst_auto',
        'invmst_jurnal_on_paid',
        'invmst_status',
        'created_by',
        'updated_by',
    ];
}
