<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
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
        'branch_code',
        'is_active',
        'supl_status',
        'supl_name',
        'supl_type',
        'supl_sub_type',
        'supl_pic_name',
        'poss_code',
        'supl_id_no',
        'supl_addr',
        'supl_tlp_area',
        'supl_tlp',
        'supl_hp01',
        'supl_hp02',
        'prov_code',
        'kota_code',
        'kec_code',
        'kel_code',
        'zip_code',
        'supl_npwp_no',
        'supl_npwp_name',
        'supl_npwp_addr',
        'supl_desc',
        'file_name_mou',
        'file_name_ktp',
        'file_name_npwp',
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

    function branch() {
        return $this->hasOne(Branch::class, 'branch_code', 'branch_code');
    }

    function position() {
        return $this->belongsTo(Position::class, 'poss_code', 'poss_code');
    }

    function coy() {
        return $this->belongsTo(Coy::class, 'coy_id', 'coy_id');
    }
}
