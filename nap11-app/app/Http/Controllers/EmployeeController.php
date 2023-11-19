<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function list(){
        $records = Employee::all();
        $viewData = [
            'list' => $records
        ];
        return view('employees.list', $viewData);
    }

    public function add(){
        return view('employees.add');
    }

    public function store(Request $request){
        $request->validate([
            'empName' => 'required',
            'empSSN' => 'required',
            'empEmail' => 'required'
        ]);
        $empRecord = new Employee();
        $empRecord->ename = $request->get('empName');
        $empRecord->essn = $request->get('empSSN');
        $empRecord->eemail = $request->get('empEmail');
        $empRecord->save();

    }
}
