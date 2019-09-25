<?php

use Illuminate\Database\Seeder;

class KhungGioSeeder extends Seeder
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
        // lay ra id ngay cua lop cha trong bang scl_ngay
        $listdate = DB::table('scl_ngay')->pluck('id');
        for ($i = 1; $i <= 30; $i++) {
            array_push($list, [
                'id'      => $i,
                'kg_gioBD'     => $faker->time($format = 'H:i:s', $max = 'now'),
                'kg_gioKT'     => $faker->time($format = 'H:i:s', $max = 'now'),
                'mangay_id'     => $faker->randomElement($listdate),
            ]);
        }
        DB::table('scl_khung_gio')->insert($list);
    }
}
