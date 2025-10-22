<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyek';
    protected $primaryKey = 'proyek_id';
    public $incrementing = true;
    protected $fillable = [
        'kode_proyek',
        'nama_proyek',
        'tahun',
        'lokasi',
        'anggaran',
        'sumber_dana',
        'deskripsi',
    ];

    public function tahapan()
    {
        return $this->hasMany(TahapanProyek::class, 'proyek_id', 'proyek_id');
    }

    public function progres()
    {
        return $this->hasMany(ProgresProyek::class, 'proyek_id', 'proyek_id');
    }

    public function lokasi()
    {
        return $this->hasMany(LokasiProyek::class, 'proyek_id', 'proyek_id');
    }

    public function kontraktor()
    {
        return $this->hasMany(Kontraktor::class, 'proyek_id', 'proyek_id');
    }
}
