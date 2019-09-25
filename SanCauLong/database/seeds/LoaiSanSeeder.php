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
        $tenloaisan=["Sân đôi","Sân Đơn"];
        $chieurongloaisan=[6.1,5.18];
        $duongcheoloaisan=[14.7, 14.3];
        for ($i = 1; $i <= 30; $i++) {
            array_push($list, [
                'id'              => $i,
                'LS_ten'          => $faker->randomElement($tenloaisan),
                'LS_chieudai'     => 13.4,
                'LS_chieurong'    => $faker->randomElement($chieurongloaisan),
                'LS_duongcheo'    => $faker->randomElement($duongcheoloaisan),
                'LS_mota'         => $faker->text(30),
            ]);
        }
        DB::table('scl_loai_san')->insert($list);
    }
}
