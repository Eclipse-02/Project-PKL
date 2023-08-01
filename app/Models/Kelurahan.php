<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelurahan',
        'kec_code',
        'is_active',
        'created_by',
        'updated_by',
    ];

    function kecamatan() {
        return $this->belongsTo(Kecamatan::class);
    }
}
