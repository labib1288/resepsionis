<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class suratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suratmasuk')->insert([
            [
                'nomor_surat' => '001/SM/2025',
                'judul_surat' => 'Undangan Rapat',
                'instansi_pengirim' => 'PT Telkom Indonesia',
                'penerima_surat' => 'Admin Resepsionis',
                'tanggal_mengirim' => '2025-11-01',
                'nama_pengirim' => 'Budi Santoso',
                'no_telepon' => '081234567890',
                'alasan' => 'Undangan untuk rapat koordinasi bulanan'
            ],
            [
                'nomor_surat' => '002/SM/2025',
                'judul_surat' => 'Pemberitahuan Libur',
                'instansi_pe ngirim' => 'PT. Garuda Indonesia',
                'penerima_surat' => 'Admin Resepsionis',
                'tanggal_mengirim' => '2025-11-02',
                'nama_pengirim' => 'Siti Aminah',
                'no_telepon' => '089876543210',
                'alasan' => 'Pemberitahuan libur nasional'
                
            ],
        ]);
    }
}
