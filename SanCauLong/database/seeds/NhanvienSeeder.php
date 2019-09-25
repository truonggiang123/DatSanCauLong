<?php

use Illuminate\Database\Seeder;

class NhanvienSeeder extends Seeder
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
        $tennhanvien=["Huỳnh Đăng Hùng","Mùa Đông Buồn","Hòa","Chu Thiếu Dân","Huỳnh Văn Khờ"];
        $gioitinh=["Nam","Nử","Khác"];
        for ($i = 1; $i <= 30; $i++) {
            array_push($list, [
                'id'      => $i,
                'NV_ten'     => $faker->randomElement($tennhanvien),
                'NV_diachi'     =>$faker->address(),
                'NV_hinhanh'     => $faker->imageUrl(200, 200),
                'NV_gioitinh'     => $faker->randomElement($gioitinh),
                'NV_sodienthoai'     => $faker->PhoneNumber(),
            ]);
        }
        DB::table('scl_nhan_vien')->insert($list);
    }
}
