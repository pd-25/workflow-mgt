<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Engineering',
            'Product Management',
            'Design',
            'Marketing',
            'Sales',
            'Human Resources',
            'Finance',
            'Customer Support',
            'IT Support',
            'Operations',
        ];

        foreach ($departments as $dept) {
            Department::firstOrCreate(
                ['slug' => Str::slug($dept)],
                [
                    'title' => $dept,
                    'status' => true,
                    'crm_access' => true,
                    'projec_mgmt_access' => true,
                ]
            );
        }
    }
}
