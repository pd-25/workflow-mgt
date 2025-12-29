<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'slug',
        'full_name',
        'phone',
        'email',
        'password',
        'address',
        'govt_id_type',
        'govt_id',
        'zipcode',
        'profile_image',
        'employee_type_id',
    ];

    protected $hidden = [
        'password',
    ];

    protected $dates = [
        'deleted_at',
    ];

    /**
     * Get the employee type for this employee.
     */
    public function employeeType(): BelongsTo
    {
        return $this->belongsTo(EmployeeType::class);
    }
}
