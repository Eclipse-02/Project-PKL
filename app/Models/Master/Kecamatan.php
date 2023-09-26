<?php

namespace App\Models\Master;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
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
        'kec_code',
        'kecamatan',
        'kota_code',
        'is_active',
        'created_by',
        'updated_by',
    ];

    function kota() {
        return $this->belongsTo(Kota::class, 'kota_code', 'kota_code');
    }

    function kelurahans() {
        return $this->hasMany(Kelurahan::class, 'kec_code', 'kel_code');
    }
}
