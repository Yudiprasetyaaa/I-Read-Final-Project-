<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer1= User::create([
            'name' => 'Yami',
            'role' => 'customer',
            'email' => 'Yami7100@gmail.com',
            'password' => bcrypt('yami1234')
        ]);
        $customer1->assignRole('customer');

        $seller1 = User::create([
            'name' => 'Toko Buku Cemerlang',
            'role' => 'seller',
            'email' => 'buku404@gmail.com',
            'password' => bcrypt('buku1234')
        ]);

        $seller1->assignRole('seller');

        $admin1 = User::create([
            'name' => 'Admin I-Read',
            'role' => 'admin',
            'email' => 'admin404@gmail.com',
            'password' => bcrypt('admin1234')
        ]);

        $admin1->assignRole('admin');
    }
}
