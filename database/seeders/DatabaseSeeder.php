<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AbsensiMatkul;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            SubjectSeeder::class,
            ScheduleSeeder::class,
            KhsSeeder::class,
            AbsensiMatkulSeeder::class,
        ]);

        User::create ([
            'name'=>'Andre Irawan',
            'email'=>'andreirawan@gmail.com',
            'email_verified_at'=> now(),
            'password' => Hash::make('123456'),
        ]);
    }
}
