<?php

namespace Database\Seeders;

use App\Models\EmployeeType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmployeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Software Engineer',
            'Frontend Developer',
            'Backend Developer',
            'Full Stack Developer',
            'UI/UX Designer',
            'Project Manager',
            'QA Engineer',
            'DevOps Engineer',
            'System Administrator',
            'Data Scientist',
            'Product Owner',
            'Technical Lead',
            'Scrum Master',
            'Business Analyst',
            'Database Administrator'
        ];

        foreach ($roles as $role) {
            EmployeeType::firstOrCreate(
                ['slug' => Str::slug($role)],
                [
                    'title' => $role,
                    'status' => true,
                    'crm_access' => true,
                    'projec_mgmt_access' => true, // Assuming IT roles have access
                ]
            );
        }
    }
}
