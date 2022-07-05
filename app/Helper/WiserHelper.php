<?php
use App\Models\users;
use App\Models\Employees_Profile;
use App\Models\reminder;
use App\Models\Chat;
use App\Models\ChatMedia;
use Illuminate\Notifications\Notifiable;


function reminders_as(){
    $user_id = session('USER_ID');
   return $reminders = reminder::where('Employee_ID', $user_id)->get()->unique('reminder_id');
}
function reminders(){
    $user_id = session('USER_ID');
     return  $reminders1 = reminder::where('Assign_Employee_Id', $user_id)->get();
}

function emp(){
    $user_id = session('USER_ID');
    return $Emp = users::inRandomOrder()->get();
}

// function ProfileImage()
// {
// $user_id = session('USER_ID');
// $checkImage = Employees_Profile::where('Employee_ID',$user_id)->exists();
// if($checkImage)
// {
//  $profile = Employees_Profile::where('Employee_ID',$user_id)->first()->Profile_Image;   
//  return $profile;
// }else{
//  $profile=NULL;
//  return $profile;   
// }
// }


/******************************************RAjeev *********************************************************/
function AllUserList()
{
  return users::whereNotIn('id',[session('USER_ID')])->get();
}
function GetUserProfileName($id='')   // focus only profile name
{
  $EmpData = Employees_Profile::where('Employee_ID',$id)->first();
  if($EmpData)
  {   
      if($EmpData->First_Name!=null)
      {
        return $EmpData->First_Name.' '.$EmpData->Last_Name;
      }else{
        return users::whereid($id)->value('name');
      }
  }else
  {
      return users::whereid($id)->value('name');
  }
}

function GetUserName($userId)    //name from users table
{
   $UserData =users::whereid($userId)->first();
   if($UserData)
   {
        return $UserData->name;
   }else{
        return null;
   }
}

function GetMobileNumber($userId)
{
    $empMob = Employees_Profile::where('Employee_ID',$userId)->first();
    if($empMob)
    {
        return $empMob->Mob;
    }else{
        return null;
    }
}
function GetDOB($userId)
{
    $empDob = Employees_Profile::where('Employee_ID',$userId)->first();
    if($empDob)
    {
        return $empDob->DOB;
    }else{
        return null;
    }
}

function GetGender($userId)
{
    $empGender = Employees_Profile::where('Employee_ID',$userId)->first();
    if($empGender)
    {
        return $empGender->Gender;
    }else{
        return null;
    }
}
function ProfileImage($userId='')
{
 $user_id = $userId;
 $empImage = Employees_Profile::where('Employee_ID',$user_id)->first();
 if($empImage)
 {
    $profile = $empImage->Profile_Image;
    if(!is_null($profile)){
    return $profile; 
    }else{  return $profile=null; } 

 }else{
 return $profile=null;
}
}

function GetRecentChatTime($userId)
{
    $My_Id = session('USER_ID');
    $ChatUser_id = $userId;
    $LastChat = Chat::Where(function($query1) use ($ChatUser_id,$My_Id)
                              {
                                  $query1->where("SenderId",$ChatUser_id);
                                  $query1->where("ReciverId",$My_Id);
                              })
                              ->orWhere(function($query1) use ($ChatUser_id,$My_Id)
                              {
                                  $query1->Where("SenderId",$My_Id);
                                  $query1->where("ReciverId",$ChatUser_id);
                              })
                              ->orderBy('created_at','DESC')->first();
    if($LastChat){
       
        return $LastChat->created_at->diffForHumans();
    }else{
        return null;
    }
}
function GetUserLastMessage($userId,$ReadStatus='')
{
    $My_Id = session('USER_ID');
    $ChatUser_id = $userId;
    $UserLastChat = Chat::Where(function($query1) use ($ChatUser_id,$My_Id)
                              {
                                  $query1->where("SenderId",$ChatUser_id);
                                  $query1->where("ReciverId",$My_Id);
                              })
                              ->orWhere(function($query1) use ($ChatUser_id,$My_Id)
                              {
                                  $query1->Where("SenderId",$My_Id);
                                  $query1->where("ReciverId",$ChatUser_id);
                              })
                              ->orderBy('updated_at','DESC')->first();
    if($UserLastChat){
            if(!is_null($UserLastChat->read_at))
            {
             $RStatus = true;   
            }else{
                $RStatus = false;
            }
            if($ReadStatus=='check')
            {
                return  $RStatus;
            }else{
              return $UserLastChat->message;  
            }
     }else{
        return null;
    }

}

function CountNotifications()
{
  $userId = session('USER_ID');
  $UserData = users::findOrFail($userId);
  $Notifications = $UserData->unreadNotifications()->count();
  
  return $Notifications;
}

function getSelectedUser(){
     if(session('ACTIVE_CHAT_USER_ID')){
          $SelectedUserId = session('ACTIVE_CHAT_USER_ID');  
      }else if(session('ACTIVE__USER_ID'))
      {
       $SelectedUserId = session('ACTIVE__USER_ID');
      }else{
       $SelectedUserId = null; 
      }
    return $SelectedUserId;
}

function getMedia($id='')
{
      if(!is_null($id))
      {
        $FileData = ChatMedia::whereid($id)->first();
        if($FileData)
        {
          $imgext = array('jpg','jpeg','png','gif','svg','webp','psd');
          $videoext = array('mp4','webm','mpg','avi','wmv','mov','flv','avchd','m4v','mpg','mpeg','mpv','qt','ogg','m4p');
          if(in_array($FileData->filetype ,$imgext))
          {
            $result = "<img src='http://127.0.0.1:8000/file-manager/media-files/Chat_media/".$FileData->chat_file_name."' alt='image' style='height:100px;width:auto'>";

          }elseif($FileData->filetype =='zip')
          {
             $result = "<img src='http://127.0.0.1:8000/file-manager/media-files/chat_icons/zip.ico' alt='zip file' style='height:100px;width:auto'>";
          }elseif($FileData->filetype=='mp3')
          {
            $result = "<img src='http://127.0.0.1:8000/file-manager/media-files/chat_icons/mp3.png' alt='zip file' style='height:100px;width:auto'>";
          }elseif(in_array($FileData->filetype,$videoext))
          {
            $result = "<img src='http://127.0.0.1:8000/file-manager/media-files/chat_icons/video.png' alt='video file' style='height:100px;width:auto'>";
          }elseif($FileData->filetype=='pdf')
          {
            $result = "<img src='http://127.0.0.1:8000/file-manager/media-files/chat_icons/pdf-icon.png' alt='pdf file' style='height:100px;width:auto'>";
          }elseif($FileData->filetype=='XLSX' || $FileData->filetype=='xlsx' || $FileData->filetype=='xls')
          {
            $result = "<img src='http://127.0.0.1:8000/file-manager/media-files/chat_icons/excel-icon.png' alt='excel file' style='height:100px;width:auto'>";
          }elseif($FileData->filetype=='PPTX' || $FileData->filetype=='pptx' ||$FileData->filetype=='ppt' )
          {
            $result = "<img src='http://127.0.0.1:8000/file-manager/media-files/chat_icons/ppt-icon.webp' alt='ppt file' style='height:100px;width:auto'>";
          }elseif($FileData->filetype=='doc' || $FileData->filetype=='docx' )
          {
            $result = "<img src='http://127.0.0.1:8000/file-manager/media-files/chat_icons/word-icon.png' alt='ppt file' style='height:100px;width:auto'>";
          }
          else{
            $result = "<img src='http://127.0.0.1:8000/file-manager/media-files/chat_icons/file.png' alt='file' style='height:100px;width:auto'>";
        }
      }else{
        $result = "No media files";
      }
    }else{
        $result = "Something went wrong";
    }
  echo $result;
}


// function CheckLastMessage($SenderId,$recieverId)
// {
//     $CheckIfChatExist = Chat::Where(function($query1) use ($SenderId,$recieverId)
//                               {
//                                   $query1->where("SenderId",$SenderId);
//                                   $query1->where("ReciverId",$recieverId);
//                               })
//                               ->orWhere(function($query1) use ($SenderId,$recieverId)
//                               {
//                                   $query1->Where("SenderId",$recieverId);
//                                   $query1->where("ReciverId",$SenderId);
//                               })
//                               ->exists();
//     if($CheckIfChatExist){
//     $LastChat = Chat::Where(function($query1) use ($SenderId,$recieverId)
//                               {
//                                   $query1->where("SenderId",$SenderId);
//                                   $query1->where("ReciverId",$recieverId);
//                               })
//                               ->orWhere(function($query1) use ($SenderId,$recieverId)
//                               {
//                                 $query1->Where("SenderId",$recieverId);
//                                   $query1->where("ReciverId",$SenderId);
//                               })
//                               ->orderBy('created_at','DESC')->first();

// $startingTime = $LastChat->created_at;
// $currentTime = now();
// $difference  = 50;///$currentTime->diffInSeconds($startingTime);

// if($difference>60)
// {
//     return true;
// }else{
//     return false;
// }
// }else{
//     return true;
// }
// }
/******************************************RAjeev  eND*********************************************************/

?>