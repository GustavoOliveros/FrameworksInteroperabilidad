<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Database\Seeders\TitleTableSeeder;
use Database\Seeders\ServiceTableSeeder;
use Database\Seeders\RolesAndPermissionsSeeder;
use Database\Seeders\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TitleTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
    }
}