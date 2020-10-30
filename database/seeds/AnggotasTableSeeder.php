<?php

use Illuminate\Database\Seeder;

class AnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota::insert([
            [
              'id'  			=> 1,
              'user_id'  		=> 1,
              'npm'				=> 17163001,
              'nama' 			=> 'Dian Wijaya',
              'tempat_lahir'	=> 'Bekasi',
              'tgl_lahir'		=> '1997-09-27',
              'jk'				=> 'L',
              'prodi'			=> 'SI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'user_id'  		=> 2,
              'npm'				=> 10000375,
              'nama' 			=> 'User',
              'tempat_lahir'	=> 'Bandung',
              'tgl_lahir'		=> '2019-01-01',
              'jk'				=> 'L',
              'prodi'			=> 'TI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}
