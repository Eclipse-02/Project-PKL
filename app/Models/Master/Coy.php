<?php

namespace App\Models\Master;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coy extends Model
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
        'coy_name',
        'coy_addr',
        'empl_tlp_area',
        'empl_tlp',
        'empl_hp01',
        'empl_hp02',
        'prov_code',
        'kota_code',
        'kec_code',
        'kel_code',
        'zip_code',
        'created_by',
        'updated_by',
    ];

    function provinsi() {
        return $this->hasOne(Provinsi::class, 'prov_code', 'prov_code');
    }

    function kota() {
        return $this->hasOne(Kota::class, 'kota_code', 'kota_code');
    }

    function kecamatan() {
        return $this->hasOne(Kecamatan::class, 'kec_code', 'kec_code');
    }

    function kelurahan() {
        return $this->hasOne(Kelurahan::class, 'kel_code', 'kel_code');
    }

    function zip() {
        return $this->hasOne(Zip::class, 'zip_code', 'zip_code');
    }
}
