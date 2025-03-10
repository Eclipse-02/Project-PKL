<?php

namespace App\Models\Master;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    protected $table = 'appl_trn_pkg';

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
        'pkg_type',
        'pkg_name',
        'pkg_desc',
        'pkg_price',
        'pkg_price_limit',
        'pkg_price_agent',
        'pkg_start',
        'pkg_closed',
        'pkg_image',
        'pkg_status',
        'pkg_is_display',
        'created_by',
        'updated_by',
    ];

    function details() {
        return $this->hasMany(PackageDetail::class, 'pkg_code', 'pkg_code');
    }
}
