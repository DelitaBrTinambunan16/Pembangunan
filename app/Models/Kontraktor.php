<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontraktor extends Model
{
    protected $table = 'kontraktor';
    protected $primaryKey = 'kontraktor_id';
    public $incrementing = true;
    protected $fillable = [
        'proyek_id',
        'nama',
        'penanggung_jawab',
        'kontak',
        'alamat',
    ];

    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id', 'proyek_id');
    }
}
