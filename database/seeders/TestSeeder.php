<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1; $i<10; $i++){
            DB::table('test')->insert([
                'name'=> Str::random(10),
                'email'=>Str::random(10).'@outlook.com'
            ]);
        }
    }
}
