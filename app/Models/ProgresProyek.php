<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgresProyek extends Model
{
    protected $table = 'progres_proyek';
    protected $primaryKey = 'progres_id';
    public $incrementing = true;
    protected $fillable = [
        'proyek_id',
        'tahap_id',
        'persen_real',
        'tanggal',
        'catatan',
    ];

    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id', 'proyek_id');
    }

    public function tahap()
    {
        return $this->belongsTo(TahapanProyek::class, 'tahap_id', 'tahap_id');
    }
}
