<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'status',
        'crm_access',
        'projec_mgmt_access',
    ];

    protected $casts = [
        'status' => 'boolean',
        'crm_access' => 'boolean',
        'projec_mgmt_access' => 'boolean',
    ];

    /**
     * Get all employees of this department.
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
