<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user1Seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'nama'=> 'ani',
            'email'=> 'ani@gmail.com',
            'alamat'=>'JL kondangss',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('user')->insert([
            'nama'=> 'badi',
            'email'=> 'badi@gmail.com',
            'alamat'=>'JL bantul',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('user')->insert([
            'nama'=> 'buda',
            'email'=> 'buda@gmail.com',
            'alamat'=>'JL jues',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
