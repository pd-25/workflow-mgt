<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $designations = [
            'SDE 1',
            'SDE 2',
            'SDE 3',
            'Data Analyst',
            'Data Engineer',
            'Data Scientist',
            'Data Architect',
            'Product Manager',
            'Product Designer',
            'UX/UI Designer',
            'Marketing Manager',
            'Sales Manager',
            'HR Manager',
            'Finance Manager',
            'Customer Support Manager',
            'IT Support Manager',
            'Operations Manager',
        ];

        foreach ($designations as $designation) {
            Designation::firstOrCreate(
                ['slug' => Str::slug($designation)],
                [
                    'title' => $designation,
                    'status' => true,
                ]
            );
        }
    }
}
