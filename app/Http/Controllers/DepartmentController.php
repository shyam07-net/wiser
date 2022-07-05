<?php

namespace App\Http\Controllers;
use App\Models\Employeeleaves;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\department;

class DepartmentController extends Controller
{
    public function index(){

       $result['department'] = department::all();
        $employe_id = session('USER_ID');
        $result['empData'] = users::where('id',$employe_id)->first();
        $deptname =$result['empData']->department->department_name;
        return view('master/Employeemanagement/department', $result);
    }

    public function store(Request $request){

       
        $department = new department();
       
        $department->department_id = $request->post('code'); 
        $department->department_name = $request->post('name');
        $department->status = 1;
        $department->save();

        return redirect('/department');

    }
}
