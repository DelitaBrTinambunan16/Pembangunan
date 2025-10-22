<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LokasiProyek extends Model
{
    protected $table = 'lokasi_proyek';
    protected $primaryKey = 'lokasi_id';
    public $incrementing = true;
    protected $fillable = [
        'proyek_id',
        'lat',
        'lng',
        'geojson',
    ];
}
