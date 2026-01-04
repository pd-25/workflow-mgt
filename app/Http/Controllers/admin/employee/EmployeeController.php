<?php

namespace App\Http\Controllers\admin\employee;

use App\Core\employee\EmployeeInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $employeeInterface;
    public function __construct(EmployeeInterface $employeeInterface)
    {
        $this->employeeInterface = $employeeInterface;
    }
    public function index(Request $request){
        $employees = $this->employeeInterface->getAllEmployees($request->all());
        $stats = $this->employeeInterface->getEmployeeStats();
        $departments = \App\Models\Department::select('id', 'title')->get();
        return view("admin.employee.index", compact('employees', 'stats', 'departments'));
    }
}
