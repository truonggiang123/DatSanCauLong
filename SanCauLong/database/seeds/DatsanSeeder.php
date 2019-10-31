<?php

use Illuminate\Database\Seeder;

class DatsanSeeder extends Seeder
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
        $hinhthuctt=["Thanh toán khi tới sân","Thanh toán bằng tài khoảng ngân hàng","Thanh toán bằng ví điện tử"];
        $tenKH=["Huỳnh Đăng Hùng","Mùa Đông Buồn","Hòa","Chu Thiếu Dân","Huỳnh Văn Khờ"];
        $lisNV=DB::table('scl_nhan_vien')->pluck('id');
        $lisSan=DB::table('scl_san')->pluck('id');
        for ($i = 1; $i <= 30; $i++) {
            array_push($list, [
                'id'      => $i,
                'DS_hinhthucthanhtoan'   => $faker->randomElement($hinhthuctt),
                'DS_ten_khach_hang'      => $faker->randomElement($tenKH),
                'DS_SDT'                 => $faker->PhoneNumber(),
                'masan'                  => $faker->randomElement($lisSan),
                'nhan_vien_quan_li'      => $faker->randomElement($lisNV),
            ]);
        }
        DB::table('scl_dat_san')->insert($list);
    }
}
