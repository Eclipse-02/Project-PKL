<?php

namespace App\Models\Master;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegisterEventPackage extends Model
{
    use HasFactory;

    protected $table = "reg_evn";

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
        'evn_code',
        'evn_status',
        'evn_name',
        'evn_addr',
        'evn_npwp_no',
        'evn_contact',
        'evn_tlp_no',
        'created_by',
        'updated_by',
    ];

    function package() {
        return $this->belongsTo(Package::class, 'pkg_code', 'pkg_code');
    }
}
