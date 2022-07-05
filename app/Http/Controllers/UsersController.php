<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\users;
use Carbon\Carbon;
use App\Models\department;
use App\Models\Employeeleaves;
use App\Models\Employees_Profile;
use App\Models\break_management;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use App\Models\metting;
use App\Events\SendMeetingNotification;
use Illuminate\Support\Facades\Storage;
use App\Models\designation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    public function login(Request $request)
    {
        if($request->session()->has('USER_LOGIN')){
            return view('includes.welcome');
        }else{
            return view('login_auth.auth-login');
        }
    }

    public function auth(Request $request)
    {   
        $email =  $request->email;
        $password =  $request->password;
        $user = users::where(['email' => $email , 'password' => $password])->first();
        if($user){
            $request->session()->put('USER_LOGIN',true);
            $request->session()->put('USER_ID',$user->id);
            $request->session()->put('USER_NAME',$user->name);
            $request->session()->put('DEPT',$user->Dept_ID);
            $request->session()->put('ROLE',$user->Role);
            if(session('USER_LOGIN')){
                $d_time = date('d-m-Y');
                
            // $process = new Process(['python', '/home/thavenuemedia/public_html/public/assets/python/index.py']);
            // $process->run();
            // if (!$process->isSuccessful()) {
             
            //     throw new ProcessFailedException($process);
            // }
            // $output_data = $process->getOutput();
              
                $emp = new Attendance;
                $emp->user_id = $user->id;
                $emp->date = $d_time;
                $emp->first_login_time = time();
                $emp->last_logout_time = 000;
                $emp->total_login_sec = 0;
                $emp->total_break = 0;
                $emp->status = 1;
                 $emp->ip = $request->ip();
                $emp->save();
                return redirect('/');
            }else{
                return back()->with('unsuccess',' Something Went Wrong');
            }
        }else{
            return back()->with('unsuccess',' Your Email And Password Does Not Match!');
        }
    }

    public function logout(Request $request)
    {   
        
      Session::flush();
      return redirect('/');
      
    }

    public function Attendance(Request $request)
    {   $user_id = session('USER_ID');
        $empData = users::where('id',$user_id)->first();
        $Dept_IDname =$empData->department->department_name;
        if( $Dept_IDname == "ADMIN" || $Dept_IDname == "HR_DEPARTMENT" ){
             $user_atns = Attendance::get();
             return view('master.Attandence.Attandance',['user_atns' => $user_atns]);
         }
         else{
            $user_id = session('USER_ID');
            $user_atns = Attendance::where('user_id', $user_id)->get();
             return view('master.Attandence.Attandance',['user_atns' => $user_atns ]);
         }
    }

 
   
    public function update_logout_status(Request $request)
    {
        $user_id = session('USER_ID');
        $emp = Attendance::where('user_id', $user_id)->orderBy('id', 'desc')->first();
            $seconds = $emp->created_at->diffInSeconds(Carbon::now());
            // $output = sprintf('%02d:%02d:%02d', ($seconds/ 3600),($seconds/ 60 % 60), $seconds% 60);
            // $process = new Process(['python', 'D:\LaravelProject\wiser\public\assets\python\index.py']);
            // $process->run();
            // if (!$process->isSuccessful()) {
             
            //     throw new ProcessFailedException($process);
            // }
            // $output_data = $process->getOutput();

            $output_data = 0;

 
    if($emp){
        $emp->total_break = $output_data; 
          $emp->total_login_sec = $seconds;
          $emp->first_login_time = time();
        $emp->update();
   
 }
    
    }

    public function total_login(users $users)
    {
        $user_id = session('USER_ID');
        $dates =  date('d-m-Y');
        $seconds = Attendance::where('user_id', $user_id)->where('date' ,$dates )->sum('total_login_sec');
       
        // $seconds = $emp->created_at->diffInSeconds(Carbon::now());
         $output = sprintf('%02d:%02d:%02d', ($seconds/ 3600),($seconds/ 60 % 60), $seconds% 60);
        echo  $output ;
     
         
    }

    public function index(){

        $result['department'] = department::all();
        $result['data'] = users::all();
        $employe_id = session('USER_ID');
        $result['empleave'] = Employeeleaves::where('Employee',$employe_id)->get();
        $result['empData'] = users::where('id',$employe_id)->first();
        $Dept_IDname =$result['empData']->department->department_name;
        return view('master/Employeemanagement/Employees',$result);

    }

    public function save(Request $request)
    {
        
        $users = new users();
        $users->name = $request->post('name');
        $users->email = $request->post('email');
        $users->password = $request->post('password');
        $users->Dept_ID = $request->post('department');
        $users->Role = $request->post('role');
        $users->save();
         
        $empprofile = new Employees_Profile();
        $empprofile->Employee_ID = $users->id;
        $empprofile->DateOfJoining = $request->post('dateofjoin');
        $empprofile->Designation = $request->post('designation');
        $empprofile->save();
        

        return redirect('/AllEmployees');

    }
        public function away_start(){
        $user_id = session('USER_ID');
        $d_time = date('d-m-Y');
        $emp = new break_management;
        $emp->date = $d_time;
        $emp->user_id = $user_id;
        $emp->status = 1;
        $emp->save();
    }

    public function away_stop(){
        $user_id = session('USER_ID');
        $emp = break_management::where('user_id', $user_id)->orderBy('id', 'desc')->first();
        $seconds = $emp->created_at->diffInSeconds(Carbon::now());
        // $output = sprintf('%02d:%02d:%02d', ($seconds/ 3600),($seconds/ 60 % 60), $seconds% 60);
        if($emp){
            $emp->total_break = $seconds;
            $emp->status = 0;
          $emp->update();
      }
    }

    public function break_status( Request $request){
     
        $user_id = session('USER_ID');
        $dates =  date('d-m-Y');
    
      $emp = break_management::where('user_id', $user_id)->where('date' ,$dates)->orderBy('id', 'desc')->first();

      // meeting status start
      $meet_exist = metting::where('Emp_id', session('USER_ID'))->orWhere('To_emp', session('USER_ID'))->exists();
      if($meet_exist){
          $meet = metting::where('Emp_id', session('USER_ID'))->orWhere('To_emp', session('USER_ID'))->orderBy('id','desc')->first();
           if($meet->status == 1){
              $meeting = 1;
              }else{
                  $meeting = 0;
              }
       
             }else{
                $meeting = 0;
             }

     // meeting status end
        if($emp ){
              
        $emp1 = break_management::where('user_id', $user_id)->where('date' ,$dates)->sum('total_break');
        $output1 = sprintf('%02d:%02d:%02d', ($emp1/ 3600),($emp1/ 60 % 60), $emp1% 60);
       
        $seconds = $emp->created_at->diffInSeconds(Carbon::now());
        $output = sprintf('%02d:%02d:%02d', ($seconds/ 3600),($seconds/ 60 % 60), $seconds% 60);
        
        $seconds4321 = Attendance::where('user_id', $user_id)->where('date' ,$dates )->sum('total_login_sec');
        $total_eff143 =  $seconds4321 -  $emp1 ;
        $total_eff = sprintf('%02d:%02d:%02d', ($total_eff143/ 3600),($total_eff143/ 60 % 60), $total_eff143% 60);
        
          $status = $emp->status; 
          $data = $output;
          return response()->json(['status'=>$status,'data'=>$data,'total_break'=>$output1 ,'output_eff'=>$total_eff , 'meeting'=> $meeting]);
        
        }else{
             $emp1 = break_management::where('user_id', $user_id)->where('date' ,$dates)->sum('total_break');
              $seconds4321 = Attendance::where('user_id', $user_id)->where('date' ,$dates )->sum('total_login_sec');
        $total_eff143 =  $seconds4321 -  $emp1 ;
        $total_eff = sprintf('%02d:%02d:%02d', ($total_eff143/ 3600),($total_eff143/ 60 % 60), $total_eff143% 60);
        
            $status = 0; 
            $data = 0;
            $output1 = 0;
  
            return response()->json(['status'=>$status,'data'=>$data,'total_break'=>$output1 , 'output_eff'=>$total_eff ,'meeting'=> $meeting]);

        }
    }


 public function metting(Request $request)
    {
        $meeting_id = Str::random(11);
        foreach ($request->toemp as $all_emp) {
            $meet = new metting;
            $meet->Emp_id = session('USER_ID');
            $meet->meeting_id = $meeting_id;
            $meet->To_emp = $all_emp;
            $meet->Topic = $request->topic;
            $meet->org_name = '--';
            $meet->location = '--';
            $meet->Schedule_Time = $request->meeting_time;
            $meet->type = 1;
            $meet->save();

            $get_main_id = metting::where('Emp_id', session('USER_ID'))->where('To_emp', $meet->id)->orderBy('id', 'desc')->first();
            echo $get_main_id;
            $data = users::where('id', session('USER_ID'))->first();
            $sender = session('USER_ID');
            $ReciverId = $all_emp;
            $Sender_id = $data->name;
            $main_id = $meet->id;
            event(new SendMeetingNotification($sender, $ReciverId, $Sender_id, $main_id));
        }
        return redirect('/');
    }
    

    public function metting_out(Request $request){
      $meet_out = new metting;
      $meet_out->Emp_id = session('USER_ID');
      $meet_out->To_emp = 0;
      $meet_out->org_name =$request->organization;
      $meet_out->location = $request->Location; 
      $meet_out->Schedule_Time = $request->ScheduleTime;
      $meet_out->type = 2;
      $meet_out->save();
      return redirect('/');

    }
    public function StartMetting(Request $request){
     
      $get= metting::find($request->main_id);
      $get->status = 1;
      $get->update();
      return redirect('/');
    }
    
 public function engaged()
    {

        $eng = break_management::where('user_id', session('USER_ID'))->orderBy('id', 'desc')->first();
        if ($eng->status == 1) {
            $emp = break_management::where('user_id', session('USER_ID'))->orderBy('id', 'desc')->first();
            $seconds = $emp->created_at->diffInSeconds(Carbon::now());
            if ($emp) {
                $emp->total_break = $seconds;
                $emp->status = 0;
                $emp->update();
            }
        }

        $meet_exist = metting::where('Emp_id', session('USER_ID'))->orWhere('To_emp', session('USER_ID'))->exists();

        if ($meet_exist) {
            $meet = metting::where('To_emp', session('USER_ID'))->where('status', 1)->orderBy('id', 'desc')->first();
            if ($meet) {
                $meet->status = 0;
                $meet->update();
            }

            $meetStartMe = metting::where('Emp_id', session('USER_ID'))->where('status', 1)->orderBy('id', 'desc')->first();
            if ($meetStartMe) {
                $OverAllMeeting = metting::where('meeting_id', $meetStartMe->meeting_id)->update(['status' => 0]);
            }
        }

        $status = 1;
        return response()->json(['status' => $status]);
    }
    
}
































