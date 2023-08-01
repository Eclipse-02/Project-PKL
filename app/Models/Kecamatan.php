<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kecamatan',
        'kota_code',
        'is_active',
        'created_by',
        'updated_by',
    ];

    function kota() {
        return $this->belongsTo(Kota::class);
    }

    function kelurahans() {
        return $this->hasMany(Kelurahan::class);
    }
}
