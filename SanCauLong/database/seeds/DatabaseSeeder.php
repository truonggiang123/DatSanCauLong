<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(NgaySeeder::class);
        $this->call(KhungGioSeeder::class);
        $this->call(LoaiSanSeeder::class);
        $this->call(SanSeeder::class);
        $this->call(NhanvienSeeder::class);
        $this->call(DatsanSeeder::class);

    }
}
