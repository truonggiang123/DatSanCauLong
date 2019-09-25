<?php

use Illuminate\Database\Seeder;

class NgaySeeder extends Seeder
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
        // $today = new DateTime('2019-01-01 08:00:00');
        for ($i = 1; $i <= 30; $i++) {
            array_push($list, [
                'id'      => $i,
                'N_Ngay'     => $faker->dateTimeThisYear()
            ]);
        }
        DB::table('scl_ngay')->insert($list);


    }
}
