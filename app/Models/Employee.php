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
        'department_id',
        'designation_id',
    ];

    protected $hidden = [
        'password',
    ];

    protected $dates = [
        'deleted_at',
    ];

    /**
     * Get the department for this employee.
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get the designation for this employee.
     */
    public function designation(): BelongsTo
    {
        return $this->belongsTo(Designation::class);
    }
}
