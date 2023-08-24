<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zip extends Model
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
        'zip_code',
        'sub_zip_code',
        'zip_desc',
        'prov_code',
        'kota_code',
        'kec_code',
        'kel_code',
        'is_active',
        'created_by',
        'updated_by',
    ];

    function provinsi() : HasOne {
        return $this->hasOne(Provinsi::class, 'prov_code', 'prov_code');
    }

    function kota() : HasOne {
        return $this->hasOne(kota::class, 'kota_code', 'kota_code');
    }

    function kecamatan() : HasOne {
        return $this->hasOne(Kecamatan::class, 'kec_code', 'kec_code');
    }

    function kelurahan() : HasOne {
        return $this->hasOne(Kelurahan::class, 'kel_code', 'kel_code');
    }
}
