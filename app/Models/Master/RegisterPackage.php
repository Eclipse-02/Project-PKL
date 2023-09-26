<?php

namespace App\Models\Master;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegisterPackage extends Model
{
    use HasFactory;

    protected $table = 'appl_trn_reg';

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
        'appl_no',
        'pkg_code',
        'appl_st',
        'appl_date',
        'appl_name',
        'appl_gender',
        'appl_title',
        'appl_id_type',
        'appl_id_no',
        'appl_birth_place',
        'prov_code',
        'kota_code',
        'kec_code',
        'kel_code',
        'zip_code',
        'appl_status',
        'con_code',
        'edu_code',
        'job_code',
        'branch_code',
        'appl_fth_name',
        'rel_code',
        'appl_mahram',
        'appl_pass_no',
        'appl_pass_name',
        'appl_pass_iss_date',
        'appl_pass_exp_date',
        'appl_pass_iss_palace',
        'appl_vac_name_id', 
        'vc_code_01',
        'appl_vac_id_date_01',
        'vc_code_02',
        'appl_vac_id_date_02',
        'vc_code_03',
        'appl_vac_id_date_03',
        'vc_code_04',
        'appl_vac_id_date_04',
        'appl_tlp',
        'appl_email',
        'appl_is_img_full',
        'appl_is_img_half',
        'appl_is_pass',
        'appl_is_yb',
        'supl_code',
        'appl_is_copy_id',
        'appl_is_copy_kk',
        'appl_is_copy_pass',
        'appl_is_copy_akta_n',
        'appl_is_copy_akta_l',
        'appl_is_img_full_name',
        'appl_is_img_half_name',
        'appl_is_pass_name',
        'appl_is_yb_name',
        'appl_is_id_name',
        'appl_is_kk_name',
        'appl_is_akta_n_name',
        'appl_is_akta_l_name',
        'appl_addr',
        'appl_posting_date',
        'created_by',
        'updated_by',
    ];

    function coy() {
        return $this->belongsTo(Coy::class, 'coy_id', 'coy_id');
    }

    function provinsi() {
        return $this->belongsTo(Provinsi::class, 'prov_code', 'prov_code');
    }

    function kota() {
        return $this->belongsTo(Kota::class, 'kota_code', 'kota_code');
    }

    function kecamatan() {
        return $this->belongsTo(Kecamatan::class, 'kec_code', 'kec_code');
    }

    function kelurahan() {
        return $this->belongsTo(kelurahan::class, 'kel_code', 'kel_code');
    }

    function zip() {
        return $this->belongsTo(Zip::class, 'zip_code', 'zip_code');
    }

    function country() {
        return $this->belongsTo(Country::class, 'con_code', 'con_code');
    }

    function job() {
        return $this->belongsTo(Job::class, 'job_code', 'job_code');
    }

    function edu() {
        return $this->belongsTo(Edu::class, 'edu_code', 'edu_code');
    }

    function relation() {
        return $this->belongsTo(Relation::class, 'rel_code', 'rel_code');
    }

    function supplier() {
        return $this->belongsTo(Supplier::class, 'supl_code', 'supl_code');
    }

    function branch() {
        return $this->belongsTo(Branch::class, 'branch_code', 'branch_code');
    }
}
