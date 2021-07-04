<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Device;
use Illuminate\Support\Facades\Input;

class EmployeeProfileController extends Controller {

    public function show() {

        $users = Employee::paginate(5);
        return view('backend.Admin.Employees.list', compact('users'));
    }

    public function add() {
        return view('backend.Admin.Employees.add');
    }

    public function store(Request $request) {
        $errors = [];
        if ($request->e_name == '' || empty($request->e_name)) {
            $errors['e_name'] = "Employee name required";
        }
        if ($request->e_email == '' || empty($request->e_email)) {
            $errors['e_email'] = "Employee name required";
        } elseif (Employee::where('email', $request->e_email)->count() > 0) {
            $errors['e_email'] = "Employee email already exists";
        }
        //if()
        if (count($errors) > 0) {
            back()->with($errors)->withInput();
        } else {
            //return $request;
            $employee = new Employee();
            $employee->employee_name = $request->e_name;
            $employee->email = $request->e_email;
            $employee->save();

            return redirect()->route('admin.employee.show')->with('successMsg', 'Employee added successfully');
        }
    }

    public function edit($id) {
        
    }

    public function update($id, Request $request) {
        
    }

    public function delete($id) {//return 1;
        Employee::destroy($id);
        return redirect()->route('admin.employee.show')->with('successMsg', 'Employee deleted successfully');
        
    }

}
