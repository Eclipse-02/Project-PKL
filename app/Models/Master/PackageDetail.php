<?php

namespace App\Models\Master;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageDetail extends Model
{
    use HasFactory;

    protected $table = 'appl_trn_pkg_dtls';

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
        'pkg_code',
        'dtl_sq_no',
        'dtl_desc',
        'dtl_price',
        'pkg_status',
        'created_by',
        'updated_by',
    ];

    function coy() {
        return $this->belongsTo(Coy::class, 'coy_id', 'coy_id');
    }
}
