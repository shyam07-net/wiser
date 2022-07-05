<?php

namespace App\Http\Controllers;

use App\Models\Employeeleaves;
use App\Models\users;
use App\Models\department;
use Illuminate\Http\Request;
use App\Http\Requests\ModalValidate;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmpLeavesExport;
use App\Models\leave_manage;
use DateTime;

class EmployeeleavesController extends Controller
{
    
    public function index()
    {  
        $result['department'] = department::all();
        $employe_id = session('USER_ID');
        $result['empleave'] = Employeeleaves::where('Employee',$employe_id)->orderBy('id', 'DESC')->get();
        $result['empData'] = leave_manage::where('Emp_id',$employe_id)->first();
        

        return view('/master/Employeeleave',$result);
    }

    public function store(Request $request)
    {
       $result['data'] = Employeeleaves::all();
        $previous = Employeeleaves::where('Employee', '=', session('USER_ID'))->orderby('id', 'desc')->exists();

        if($previous ){
            $previous = Employeeleaves::where('Employee', '=', session('USER_ID'))->orderby('id', 'desc')->first();
            $total = $previous->Pending_leaves;
        }else{
            $total = 18; 
        }
        $from_date = new DateTime($request->fdate);
        $to_date = new DateTime($request->tdate);
        if($halfdays = $request->daytype){ 
            $days    = 0.5;
        }else{   
            $day     = $from_date->diff($to_date);
            $days    = $day->d + 1;
        }
        $employe_id = session('USER_ID');
        $dept= users::where('id',$employe_id)->first()->Dept_ID;
        $Employeeleaves = new Employeeleaves();
        $Employeeleaves->Employee =  $employe_id;
        $Employeeleaves->department_id = $dept;
        $Employeeleaves->Leave_type = $request->post('leavetype');
        $Employeeleaves->leavefrom = $from_date;
        $Employeeleaves->leaveto = $to_date;
        $Employeeleaves->No_of_days = $days;
        $Employeeleaves->Reason = $request->post('reason');
        $Employeeleaves->Status = "Pending";
        $Employeeleaves->save();

     
      return redirect('/Employeeleave');
    }



      
    public function show(Request $request){

       $result['data'] = Employeeleaves::all();
        $employe_id = session('USER_ID');
        $dept = users::where('id',$employe_id)->first()->Dept_ID;
        $UserRole = users::where('id',$employe_id)->first()->Role;
       
        if($UserRole==2 || $UserRole==3)
        {
            $result['empleave'] = Employeeleaves::get();    
        }elseif($UserRole==1 )
        {
            $result['empleave'] = Employeeleaves::where('department_id', $dept)->get();   
        }else{
            $result['empleave'] = Employeeleaves::where('Employee', $employe_id)->get();   
        }
       
        $result['empData'] = users::where('id',$employe_id)->first();
        $deptname =$result['empData']->department->department_name;
        return view('master/Employeemanagement/Employeelist', $result);

    }

    public function leaveStatus(Request $request){

        $Status = Employeeleaves::where('id', $request->input('id'))->first();
        $data = leave_manage::where('Emp_id', $Status->Employee)->first();
        if($request->status == "Approved"){

            if( $Status->Leave_type == "Casual Leave"){

               
                    $data->CL = $data->CL - $Status->No_of_days;
                    $Status->Status = $request->input('status');
                    $Status->update();
                    $data->update();
           
                 
            }elseif($Status->Leave_type == "Sick Leave"){
                $data->SL = $data->SL - $Status->No_of_days;
                $Status->Status = $request->input('status');
                $Status->update();
                $data->update();

            }elseif($Status->Leave_type == "Emergency Leave"){
                $data->EL = $data->EL - $Status->No_of_days;
                $Status->Status = $request->input('status');
                $Status->update();
                $data->update();
            }else{
                $Status->Status = $request->input('status');
                $Status->update();
            }
      }else{
        $Status->Status = $request->input('status');
        $Status->update();
      }
   

         return Redirect('/Employeelist');
    }
    
    public function delete(Request $request,$id){
        $model=Employeeleaves::find($id); 
        $Status = Employeeleaves::where('id', $id)->first();
        if($Status->Status == "Pending") {
            $model->delete();
            return back()->with('success','Your leave application is deleted');;
        }else{

           return back()->with('fail','This approved mail is cannot be deleted');  
        }
          
        // return redirect('/Employeeleave');


    }

    public function export()
    {
        return (new EmpLeavesExport)->download('Employeeleaves.xlsx');
    }
    
     public function LeaveManage(){
      $Users = users::get();
  
      return view('master/Employeemanagement/LeaveManage',[ 'Users'=> $Users]);

     }
     public function update_leave(Request $request){
            $lev_up = leave_manage::find($request->Empid);
            $lev_up->CL = $request->cl;
            $lev_up->EL = $request->el;
            $lev_up->SL = $request->sl;
            $lev_up->update();
            return redirect()->back()->with('status',' Updated Successfully');;
 

     }
    
}
