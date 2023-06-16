<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0;$i<10;$i++) {
        DB::table('mahasiswa')->insert([
            'nim' => $faker ->randomNumber(6,true),
            'nama'=>$faker ->name(),
            'gender'=>$faker ->lexify(),
            'prodi'=>$faker ->sentence(1),
            'minat'=>$faker ->sentence(3),
            //'email' => Str::random(10).'@gmail.com',
            //'password' => Hash::make('password'),
        ]);
    }
}
}
