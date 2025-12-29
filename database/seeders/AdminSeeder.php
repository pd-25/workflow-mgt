<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 1 specific admin
        Admin::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('12345'),
        ]);

        // Create 2 random admins
        Admin::factory(2)->create();
    }
}
