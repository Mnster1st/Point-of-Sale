<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Sumber Elektronik',
            'alamat' => 'JL.KH. Abdurahman Wahid (Kuala Dua)',
            'telepon' => '085787544648',
            'tipe_nota' => 1, // kecil
            'path_logo' => '/img/logo.png',
            // 'path_kartu_member' => '/img/member.png',
        ]);
    }
}
