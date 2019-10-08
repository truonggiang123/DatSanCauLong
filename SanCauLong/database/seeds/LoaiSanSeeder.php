<?php

use Illuminate\Database\Seeder;

class LoaiSanSeeder extends Seeder
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
            array_push($list, [
                'id'              => 1,
                'LS_ten'          => 'Sân Đơn',
                'LS_chieudai'     => 13.4,
                'LS_chieurong'    => 5.18,
                'LS_duongcheo'    => 14.7,
                'LS_mota'         => $faker->text(30),
            ]);
            array_push($list, [
                'id'              => 2,
                'LS_ten'          => 'Sân Đôi',
                'LS_chieudai'     => 13.4,
                'LS_chieurong'    => 6.1,
                'LS_duongcheo'    => 14.3,
                'LS_mota'         => $faker->text(30),
            ]);
           
        DB::table('scl_loai_san')->insert($list);
    }
}
