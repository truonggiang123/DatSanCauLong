<?php

use Illuminate\Database\Seeder;

class ChitietDatSanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN'); //location ISO
        $list = [];
        $lisS=DB::table('scl_san')->pluck('id');
        $lisDS=DB::table('scl_dat_san')->pluck('id');
        for ($i = 1; $i <= 30; $i++) {
            array_push($list, [
                'san_id'      => $faker->randomElement($lisS),
                'dat_san_id'     => $faker->randomElement($lisDS)

            ]);
        }
        DB::table('scl_chitiet_datsan')->insert($list);
        
    }
}
