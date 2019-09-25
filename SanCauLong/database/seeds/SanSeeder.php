<?php

use Illuminate\Database\Seeder;

class SanSeeder extends Seeder
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
        //lay ra khung gio tu bảng cha scl_khung_gio
        $listtime=DB::table('scl_khung_gio')->pluck('id');
        //lấy ra loại sân từ bảng scl_loai_san
        $listls=DB::table('scl_loai_san')->pluck('id');
        $name=[];
        for($j=1; $j<= 25; $j++)
        {
            $name[$j]="Sân Số".$j;
        }
         
        for ($i = 1; $i <= 30; $i++) {
            array_push($list, [
                'id'                 => $i,
                'S_ten'              => $faker->randomElement($name),
                'S_tinhtrangsan'     => $faker->numberBetween(1, 0),
                'hinhanhsan'         => $faker->imageUrl(200, 200),
                'mota'               => $faker->text(30),
                'ma_loai_san'        => $faker->randomElement($listls),
                'ma_KG'              => $faker->randomElement($listtime),
            ]);
        }
        DB::table('scl_san')->insert($list);
    }
}
