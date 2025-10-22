<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyek;
use App\Models\TahapanProyek;
use App\Models\ProgresProyek;
use App\Models\Warga;

class SampleDataSeeder extends Seeder
{
    public function run()
    {
        // Create a project
        $p = Proyek::create([
            'kode_proyek' => 'PRJ001',
            'nama_proyek' => 'Pembangunan Jalan Desa A',
            'tahun' => '2025',
            'lokasi' => 'Desa A',
            'anggaran' => 1250000000,
            'sumber_dana' => 'APBD',
            'deskripsi' => 'Pembangunan jalan utama desa'
        ]);

        // create stages
        $t1 = TahapanProyek::create(['proyek_id'=>$p->proyek_id,'nama_tahap'=>'Perencanaan','target_persen'=>10,'tgl_mulai'=>'2025-01-01','tgl_selesai'=>'2025-02-01']);
        $t2 = TahapanProyek::create(['proyek_id'=>$p->proyek_id,'nama_tahap'=>'Pelaksanaan','target_persen'=>80,'tgl_mulai'=>'2025-02-02','tgl_selesai'=>'2025-09-01']);

        // create progress records
        ProgresProyek::create(['proyek_id'=>$p->proyek_id,'tahap_id'=>$t2->tahap_id,'persen_real'=>70,'tanggal'=>'2025-07-01','catatan'=>'Pekerjaan berjalan baik']);

        // create some warga
        Warga::create(['nama'=>'Budi','nik'=>'1234567890123456','alamat'=>'Desa A','telepon'=>'081234567890','umur'=>34]);
        Warga::create(['nama'=>'Siti','nik'=>'9876543210987654','alamat'=>'Desa B','telepon'=>'081298765432','umur'=>29]);
    }
}
