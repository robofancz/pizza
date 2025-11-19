<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // This will render resources/views/employees.blade.php
        return view('employees.index');
    }
}
