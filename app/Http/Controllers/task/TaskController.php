<?php

namespace App\Http\Controllers\task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\task\task;
use App\Models\task\task_image;
use App\Models\task\task_Status;
use App\Models\users;
use App\Models\department;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Http\Requests\AssignTaskvalidation;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportTask;
use App\Exports\exportEmployees;
use Mail;
use Illuminate\Notifications\Notifiable;
use App\Events\SendTaskNotifications;
use App\Notifications\TaskStatusNotification;
class TaskController extends Controller
{
    public function ShowTask()
    {
       $EmployeeId = session('USER_ID');
       $deptId = users::where('id',$EmployeeId)->first()->Dept_ID;
       $User_Role =  users::where('id',$EmployeeId)->first()->Role;    /// Role // 1 = TL, 0= User  , 2=Admin
       $DeptName = (users::where('id',$EmployeeId)->first())->department->department_name;
       $data['AllEmployees']  =users::get();
       $data['USER_ROLE'] = $User_Role;
    /************************************* for Admin ****************************************************/
    if($User_Role==2)
    {
         /******all Admin data *****************************************************************/
            $ProcessingTask = task::where("Status",1)->orderBy('updated_at','DESC')->get();
            $data['ProgressTask'] = $ProcessingTask;
            
            $InitialziedTask = task::where("Status",0)->orWhere("Status",4)->orderBy('updated_at','DESC')->get();
            $data['NewTasks'] = $InitialziedTask;
            
            $ReviewTask = task::where("Status",2)->orWhere("Status",3)->get();
            $data['CompletedTask'] = $ReviewTask;  
            
    }elseif($User_Role==1){    /******************fileter data for Team leader *******************************************/
            $data['ProgressTask'] = task::Where(function($query1) use ($deptId)
                              {
                                  $query1->where("Sndr_DeptId",$deptId);
                                  $query1->where("Status",1);
                              })
                              ->orWhere(function($query1) use ($deptId)
                              {
                                  $query1->Where("Rcvr_DeptId",$deptId);
                                  $query1->where("Status",1);
                              })
                               ->orderBy('updated_at','DESC')->get();
  
    

            $data['NewTasks'] = task::Where(function($query2) use ($deptId)
                                  {
                                      $query2->where("Sndr_DeptId",$deptId);
                                      $query2->where("Status",0);
                                  })
                                  ->orWhere(function($query2) use ($deptId)
                                  {
                                      $query2->Where("Rcvr_DeptId",$deptId);
                                      $query2->where("Status",0);
                                  })
                                  ->orWhere(function($query2) use ($deptId)
                                  {
                                      $query2->Where("Sndr_DeptId",$deptId);
                                      $query2->where("Status",4);
                                  })
                                  ->orWhere(function($query2) use ($deptId)
                                  {
                                      $query2->Where("Rcvr_DeptId",$deptId);
                                      $query2->where("Status",4);
                                  })
                                   ->orderBy('updated_at','DESC')->get();





                $data['CompletedTask'] = task::Where(function($query3) use ($deptId)
                                      {
                                          $query3->where("Sndr_DeptId",$deptId);
                                          $query3->where("Status",2);
                                      })
                                      ->orWhere(function($query3) use ($deptId)
                                      {
                                          $query3->Where("Rcvr_DeptId",$deptId);
                                          $query3->where("Status",2);
                                      })
                                      ->orWhere(function($query3) use ($deptId)
                                      {
                                          $query3->Where("Sndr_DeptId",$deptId);
                                          $query3->where("Status",3);
                                      })
                                      ->orWhere(function($query3) use ($deptId)
                                      {
                                          $query3->Where("Rcvr_DeptId",$deptId);
                                          $query3->where("Status",3);
                                      })
                                      ->orderBy('updated_at','DESC')->get();
        
    }else{
          /******************fileter data for users *******************************************/
            $data['ProgressTask'] = task::Where(function($query1) use ($EmployeeId)
                              {
                                  $query1->where("SenderId",$EmployeeId);
                                  $query1->where("Status",1);
                              })
                              ->orWhere(function($query1) use ($EmployeeId)
                              {
                                  $query1->Where("ReciverId",$EmployeeId);
                                  $query1->where("Status",1);
                              })
                              ->orderBy('updated_at','DESC')->get(); 


            $data['NewTasks'] = task::Where(function($query2) use ($EmployeeId)
                                  {
                                      $query2->where("SenderId",$EmployeeId);
                                      $query2->where("Status",0);
                                  })
                                  ->orWhere(function($query2) use ($EmployeeId)
                                  {
                                      $query2->Where("ReciverId",$EmployeeId);
                                      $query2->where("Status",0);
                                  })
                                  ->orWhere(function($query2) use ($EmployeeId)
                                  {
                                      $query2->Where("SenderId",$EmployeeId);
                                      $query2->where("Status",4);
                                  })
                                  ->orWhere(function($query2) use ($EmployeeId)
                                  {
                                      $query2->Where("ReciverId",$EmployeeId);
                                      $query2->where("Status",4);
                                  })
                                  ->orderBy('updated_at','DESC')->get();


                $data['CompletedTask']  = task::Where(function($query3) use ($EmployeeId)
                                      {
                                          $query3->where("SenderId",$EmployeeId);
                                          $query3->where("Status",2);
                                      })
                                      ->orWhere(function($query3) use ($EmployeeId)
                                      {
                                          $query3->Where("ReciverId",$EmployeeId);
                                          $query3->where("Status",2);
                                      })
                                      ->orWhere(function($query3) use ($EmployeeId)
                                      {
                                          $query3->Where("SenderId",$EmployeeId);
                                          $query3->where("Status",3);
                                      })
                                      ->orWhere(function($query3) use ($EmployeeId)
                                      {
                                          $query3->Where("ReciverId",$EmployeeId);
                                          $query3->where("Status",3);
                                      })
                                      ->orderBy('updated_at','DESC')->get();
        

    }
    /*********************************************************************************/
     return view('master.task.task',$data);
    }

    public function AddNewTask(AssignTaskvalidation $request)
    {

       $allVariable = request()->all();
       //print_r($allVariable);
       $taskId = $allVariable['taskId'];
       if(!is_null($taskId))
       {
        $taskStatus = task::where('id',$taskId)->first()->Status;   
       }else{
        $taskStatus = 0;   
       }
       $Title = $allVariable['title']; 
       $Description = $allVariable['description'];
       $ExtraCommnt = $allVariable['addcomment'];
       $SelectedEmployeeId = $allVariable['selectEmployee'];
       $StartDate = $allVariable['startDate'];
       $EndDate = $allVariable['endd'];
       $SenderId = session('USER_ID');
       $ReceiverId = $SelectedEmployeeId;
       $Sender_DeptId = users::where('id',$SenderId)->first()->Dept_ID;
       $Reciever_DeptId = users::where('id',$ReceiverId)->first()->Dept_ID;
       $recieverEmail = users::where('id',$ReceiverId)->first()->email;
        $storeTask = task::updateOrCreate(['id'=>$taskId],[
        'SenderId'=>$SenderId,
        'ReciverId'=>$ReceiverId,  
        'Sndr_DeptId'=>$Sender_DeptId,
        'Rcvr_DeptId'=>$Reciever_DeptId,
        'Title'=>$Title,
        'Description'=>$Description,
        'AdditionalCmnt'=>$ExtraCommnt,
        'StartDate'=>$StartDate,
        'CompletionDate'=>$EndDate,
        'file'=>0,
        'Status'=>$taskStatus,    // Status like 0 = initial task, 1= process task, 2= review task, 3=completed task, 4 = for updation 
        ]);
      if(!is_null($taskId))
      {
       $checkOldFile = task_image::where('TaskId',$taskId)->exists();
       if($checkOldFile)
       {
        task::Where('id',$taskId)->first()->update(['file'=>1]);
       }
      }
        if($request->hasFile('TaskMedia'))
        { 
                if(!is_null($taskId))
                {
                   $checkOldFile = task_image::where('TaskId',$taskId)->exists();
                   if($checkOldFile)
                   {
                    $oldFileName = task_image::Where('TaskId',$taskId)->first()->FileName;
                    unlink('file-manager/media-files/Task_Media/'.$oldFileName);
                   }
                }
                  $file = $request->file('TaskMedia');
                  $originalname = $file->getClientOriginalName();
                  $extnsn = $file->getClientOriginalExtension();
                  if($extnsn=='mp4' || $extnsn=='mkv' || $extnsn=='webm' )
                  {
                     $fileType = 'VDO';
                  }else{
                     $fileType = 'IMG';
                  }
                  $filename =$originalname;
                  $file->move('file-manager/media-files/Task_Media', $storeTask->id.$filename);   // the task id is used to remove duplicate name of a image
                  task_image::updateOrCreate(['TaskId'=>$taskId],[
                  'TaskId'=>$storeTask->id,
                  'FileName'=>$storeTask->id.$filename,
                  'mediaType'=>$fileType,
                  ]);
                  task::Where('id',$storeTask->id)->first()->update(['file'=>1,]);
        }
         //echo 'you have successfully inserted your data';

         if(!is_null($taskId))
         {
          $TypeNotice = 'UPD';
         }else{
          $TypeNotice = 'NEW';
         }
        event(new SendTaskNotifications($SenderId,$ReceiverId));
        $this->NotificationForUser($ReceiverId,$SenderId,$TypeNotice);

        return redirect('Employee/Showtask');
   
    }

    public function NotificationForUser($ReceiverId,$SenderId,$TypeNotice)
    {
       if($TypeNotice=='NEW')
       {
        $title = 'New Task';
        $message = 'You got a new Task from ';
       }else{
        $title = 'Task Updation';
        $message = 'Something went change in task by ';
       }
       $data = array(
          "sender" => $SenderId,
          "message" =>$message,
          "title" =>$title,
          "url" =>"Employee.Showtask",
        );
     $user = users::find($ReceiverId);
     $user->notify(new TaskStatusNotification($data));
    }
   




   public function ChangeTaskStatus(Request $request, task $task)
    {
    $TaskId = request()->tId;
    $taskStatus =request()->sId;
    if($taskStatus===null)
    {
    $TaskInfo = task::where('id',$TaskId)->first();
    $oldStatus = $TaskInfo->Status;
        if($oldStatus==0)
        {
          $newStatus = 1;
          $mssg = 'Work has been started';  
        }elseif($oldStatus==1)
        {
          $newStatus = 2;
          $mssg = 'Work has been completed and sending for review';
        }elseif($oldStatus==4)
        {
          $newStatus = 1;
          $mssg = 'Changes has been started';  
        }else{

        }
    }else{
    $RecievedStatus = $taskStatus;
        if($RecievedStatus==3)
        {
          $newStatus = 3;
          $mssg = 'Work is done.Review has been successfully completed for this task';
        }if($RecievedStatus==4)
        {
          $newStatus = 4;
          $mssg = 'Work is not completed so sending for the updation process';
        }
    }
    $update = task::where('id',$TaskId)->first();
    $update->Status =$newStatus;
    $update->update();
    echo $mssg;
    }
public function EditTask(Request $request)
{
$TaskId = request()->tId;
$TaskData = task::where('id',$TaskId)->first();
$SelectedEmployeeId = $TaskData->ReciverId;
$AllEmployees = users::get();
$allEmp = '';
foreach($AllEmployees as $employee)
{
if($employee->id==$SelectedEmployeeId)
{
 $allEmp   .= '<option selected value="'.$employee->id.'">'.$employee->name.'</option>';
}
$allEmp .= '<option value="'.$employee->id.'">'.$employee->name.'</option>';
}
$SelectedEmployeeId =$TaskData->userInfo->id; 
return response()->json(['TaskId'=>$TaskId,'TaskData'=>$TaskData,'AllEmployees'=>$allEmp]);
}

public function MoveToTrash(Request $request)
{

     $tid = request()->tid;
     if(task::Where('id',$tid)->exists() && session('USER_LOGIN')===true)
     {
     $SoftDelete = task::Where('id',$tid)->delete();
      return back()->with('trashed', 'Task moved to trashed');
     }else{
        return back()->with('trashed', 'You have tried to access locked data');
     }
}

public function ViewTrash()
{
    $EmployeeId = session('USER_ID');
    $deptId = users::where('id',$EmployeeId)->first()->Dept_ID;
    $DeptName = (users::where('id',$EmployeeId)->first())->department->department_name;
    if($deptId=='D01')
    {
      $ChkTrashedTasks = task::onlyTrashed()->exists();
        if($ChkTrashedTasks)
        {
          $data['TrashedTask'] =task::onlyTrashed()->get();
        }else{
          $data['TrashedTask'] = false;
        }
    }else{
      $ChkTrashedTasks = task::onlyTrashed()->Where(function($query1) use ($deptId)
                                {
                                    $query1->where("Sndr_DeptId",$deptId);
                                })
                                ->orWhere(function($query1) use ($deptId)
                                {
                                    $query1->Where("Rcvr_DeptId",$deptId);
                                })
                                ->orderBy('updated_at','DESC')->onlyTrashed()->exists(); 
      if($ChkTrashedTasks)
      {
        $data['TrashedTask'] =task::onlyTrashed()->Where(function($query1) use ($deptId)
                                {
                                    $query1->where("Sndr_DeptId",$deptId);
                                })
                                ->orWhere(function($query1) use ($deptId)
                                {
                                    $query1->Where("Rcvr_DeptId",$deptId);
                                })
                                ->orderBy('updated_at','DESC')->onlyTrashed()->get(); 
      }else{
      $data['TrashedTask'] = false;
      }
  }
   return view('master.task.ViewTrashedTask',$data);

}

public function restoreTask(Request $request)
{
  $TaskId = request()->tId;
  $task = task::withTrashed()->find($TaskId);
  if(!is_null($task))
 {
    $task ->restore();
    echo 'Task Restored successfully';
 }else{
  echo 'something went Wrong';
 }

}
public function deleteTask(Request $request)
{
  $TaskId = request()->tId;
  $CheckTaskRelatedMedia = task_image::where('TaskId',$TaskId)->exists();
  if($CheckTaskRelatedMedia)
  {
    $AllImages = task_image::where('TaskId',$TaskId)->get(); 
    foreach($AllImages as $listOfRecords)
    {
    $image_path = 'file-manager/media-files/Task_Media/'.$listOfRecords->FileName;
    unlink($image_path);
    task_image::FindOrFail($listOfRecords->id)->delete();
    }
  }else{  

  }
  $task = task::withTrashed()->find($TaskId);
  if(!is_null($task))
 {
    $task ->forceDelete();
    echo 'Task deleted successfully';
 }else{
  echo 'something went Wrong';
 }

}
// for additional use
public function ExportTasks(Request $request)
{
   return Excel::download(new ExportTask, 'export.xlsx');
}
public function exportEmployess(Request $request)
{
   return Excel::download(new exportEmployees, 'employeeData.xlsx');
}


public function ApendView(Request $request)
{
  $data = task::get();
  return view('IT_DEPARTMENT.Pages.task.Append',compact('data'));
}

public function importData(Request $request)
{
    Excel::import(new ImportUser, $request->file('file')->store('files'));
        return redirect()->back();
}

}


// $data =['Subject' => 'New task Assingn','email' =>$email,'typeofemail'=>$check];
//         $email_blade = 'IT_DEPARTMENT/Pages/task/email/TasknotificationMail';
//         Mail::send($email_blade, $data, function ($message) use ($data) {
//         $message->from('wiseowl24.net@gmail.com', 'Order Conf Order');
//         $message->to($data['email'], $data['Subject'])->subject($data['Subject']);
//         });