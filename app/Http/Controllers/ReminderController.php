<?php

namespace App\Http\Controllers;

use App\Models\reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddReminder(Request $request)
    {   
     
        $rem_id_ex = reminder::orderBy('id', 'DESC')->first();
        if($rem_id_ex != null){
          $reminder_id = $rem_id_ex->reminder_id;
        }else{
            $reminder_id = 0;
        }
        $state =$request->state;
        if($state ){
             $all_emp = implode(" ",$state);
              foreach( $state as $state1 ){
        $user_id = session('USER_ID');
        $Reminder = new reminder;
        $Reminder->Employee_ID = $user_id;
        $Reminder->Reminder_name = $request->Reminder_name;
        $Reminder->Reminder_Date_Time = $request->Reminder_Date_Time;
        $Reminder->Assign_Employee_Id = $state1;
        $Reminder->to_other =  $all_emp;
        $Reminder->reminder_id = $reminder_id + 1;
        $Reminder->save();
      }
       
        }else{
             $Reminder = new reminder;
        $Reminder->Employee_ID = session('USER_ID');
        $Reminder->Reminder_name = $request->Reminder_name;
        $Reminder->Reminder_Date_Time = $request->Reminder_Date_Time;
        $Reminder->Assign_Employee_Id = session('USER_ID');
        $Reminder->to_other =  session('USER_ID');
        $Reminder->reminder_id = $reminder_id + 1;
        $Reminder->save();
            
        }
       

     
      return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function show(reminder $reminder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function edit(reminder $reminder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reminder $reminder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function destroy(reminder $reminder)
    {
        //
    }
}