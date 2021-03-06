<?php

namespace Database\Seeders;

use App\Models\Teacher;
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
        $this->call([
            RoleSeeder::class,
            GroupSeeder::class,
            UserSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
        ]);
    }
}
