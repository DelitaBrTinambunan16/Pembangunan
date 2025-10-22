<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';
    protected $primaryKey = 'warga_id';
    public $incrementing = true;
    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'telepon',
        'umur',
    ];
}
