<?php

namespace App\Http\Controllers;
use App\Models\Chat;
use App\Models\ChatMedia;
use App\Models\chat_messages_history;
use App\Models\users;
use Illuminate\Http\Request;
use App\Events\SendMessageNotification;
use App\Notifications\UserMessageSend;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;
use Response;

class ChatController extends Controller
{

    public function index()
    {
      
        session()->put('chat-page','OPEN');
        $Return = 'YES';  // we do use AllChatsUserList() function in many places to fetch user list so we do send this value return value not to
        $AllChats = $this->AllChatsUserList($Return);
        session()->forget('ACTIVE__USER_ID');

        if(!is_null(getSelectedUser()))
        {
            $SelectedUserId = getSelectedUser();
            $AllChatMessages = $this->GetSingalUserMessages($SelectedUserId,'TRUE');
            $TotalMessages = $this->count_user_mssg($SelectedUserId);
        }else{
            $SelectedUserId =null;
            $AllChatMessages =null;
            $TotalMessages =null;
        }
        return view('master.chat.chat',compact('AllChats','SelectedUserId','AllChatMessages','TotalMessages'));
        
    }

    public function NotificationToChatUrl($id='')
    {
        if(!is_null($id))
        {
          session()->put('ACTIVE_CHAT_USER_ID',$id);     
        }else{

        }
        return redirect()->route('Show.chat');
    }
     
    public function AllChatsUserList($Return='')
    {
        $userid = session('USER_ID');
        $FinalConnectedUsers = array();
        $CheckIfChatExist = Chat::where('SenderId',$userid)
                                ->orWhere('ReciverId',$userid)->exists();
        if($CheckIfChatExist)
        {
            $conversationUsers = Chat::where('SenderId',$userid)
                                    ->orWhere('ReciverId',$userid)->orderBy('id','DESC')->get();
               $array1 = array();
               $array1Uniqe =array(); 
               $FinalConnectedUsers =array(); 
               foreach($conversationUsers as $chatUser)
               {
                  if($chatUser->ReciverId!=$userid)
                  {  
                    $array1[] = $chatUser->ReciverId;
                  }
                  if($chatUser->SenderId!=$userid)
                  {
                    $array1[] = $chatUser->SenderId;
                  }   
                }
                $array1Uniqe = array_values(array_unique($array1));
                // print_r($array1Uniqe);
                // echo '<br/>';
                   for($i=0;$i<count($array1Uniqe);$i++)
                   {
                    $users[] = users::where('id',$array1Uniqe[$i])->first();
                   } 
        }else{
            $users=null; 
        }
        if($Return=='YES')
        {
            return $users;
        }else{
            return view('master.chat.chat-users',compact('users'));
        }
    } 
    public function MessageStore(Request $request)
    {
        if(!is_null(getSelectedUser()))
        { $SelectedUserId =getSelectedUser();  }else{ $SelectedUserId =$request->creciever;  }
           if($request->has('chat-media')){ $media = 1; }else{ $media = 0;}
           $SenderId = session('USER_ID');
            if(!is_null($request->chat_input) || $request->has('chat-media') )
            {
                if(!is_null($request->chat_input)){ $mssg =$request->chat_input; }else{ $mssg = null;}
                $ChatData = Chat::Create([
                'SenderId'=>session('USER_ID'),
                'ReciverId'=>$SelectedUserId,
                'GroupId'=>null,
                'message'=>$request->chat_input,
                'files'=>$media,
                'forwarded'=>0,
                'pin'=>0,
                 ]);
                if($request->has('chat-media'))
                {
                //$this->validate($req, ['filenames' => 'required','filenames.*' => 'mimes:doc,pdf,docx,zip',]);
                $rand = rand(11111,99999);
                foreach($request->file('chat-media') as $file)
                {
                    $name=$file->getClientOriginalName();
                    if($file->move(public_path().'/file-manager/media-files/Chat_media', $rand.$name))
                    {
                        ChatMedia::create([
                           'chat_id' =>$ChatData->id,
                           'chat_file_name'=>$rand.$name,
                           'filetype'=>$file->getClientOriginalExtension(),
                        ]);
                    
                        $rand = $rand+1;
                    }else{
                        
                    }
                }
                //echo 'file uploaded successfuly';
               }
                event(new SendMessageNotification($SenderId,$SelectedUserId));
                $this->SendNotification($SenderId,$SelectedUserId);
            }else{
            }
                $AllChatMessages = $this->GetSingalUserMessages($SelectedUserId,'FALSE');
                //$mssg_count = $this->count_user_mssg($SelectedUserId,session('USER_ID'));
                return view('master.chat.OnlyMessagesUpdate',compact('AllChatMessages','SelectedUserId'));
            }
    public function SendNotification($SenderId,$ReceiverId)
    {
        $data = array(
          "sender" => $SenderId,
          "message" =>"You got a new message from ",
          "title" =>"New Message",
          "url" =>"chat",
        );
        $user = users::find($ReceiverId);
        $user->notify(new UserMessageSend($data));

  }
    public function GetParticularUserChat()
    {
        $SelectedUserId = Request()->UserId;
        $TypeOfList  = Request()->TypeofUser;
        if($TypeOfList=='cu')
        {
            session()->put('ACTIVE_CHAT_USER_ID',$SelectedUserId);   
        }else{
            session()->put('ACTIVE__USER_ID',$SelectedUserId);
        }
        $TotalMessages = $this->count_user_mssg($SelectedUserId);
        $AllChatMessages = $this->GetSingalUserMessages($SelectedUserId,'TRUE');
        return view('master.chat.single-user-message',compact('SelectedUserId','AllChatMessages','TotalMessages'));   
    }

    public function RefreshMessages()
    {

        if(!is_null(getSelectedUser()))
        { 
            $SelectedUserId =getSelectedUser();
        }else{
            $SelectedUserId = Request()->UserId; 
        }
        $AllChatMessages = $this->GetSingalUserMessages($SelectedUserId,'TRUE');
        return view('master.chat.OnlyMessagesUpdate',compact('SelectedUserId','AllChatMessages'));

    }

    public function GetSingalUserMessages($ChatUserId,$ReadOrNot)   ///user chat between two people login user and other clicked user
    {
        $EmployeeId = session('USER_ID');
        $ChatUserId = $ChatUserId;
        $AllMessages = Chat::Where(function($query1) use ($ChatUserId,$EmployeeId)
                                  {
                                      $query1->where("SenderId",$ChatUserId)->where("ReciverId",$EmployeeId);
                                  })
                                  ->orWhere(function($query1) use ($ChatUserId,$EmployeeId)
                                  { $query1->Where("SenderId",$EmployeeId)->where("ReciverId",$ChatUserId); })
                                  ->get();
        if(count($AllMessages)>0)
        {
            // $AllMessages = Chat::Where(function($query1) use ($ChatUserId,$EmployeeId)
            //                       { $query1->where("SenderId",$ChatUserId)->where("ReciverId",$EmployeeId);})
            //                       ->orWhere(function($query1) use ($ChatUserId,$EmployeeId)
            //                       { $query1->Where("SenderId",$EmployeeId)->where("ReciverId",$ChatUserId); })->orderBy('created_at','ASC')->get();

            if($ReadOrNot=='TRUE') // mark as read all messages
            {
                if(Chat::where("SenderId",$ChatUserId)->where("ReciverId",$EmployeeId)->latest()->exists())
                {
                    $UpdateMessageReadStatus = Chat::where("SenderId",$ChatUserId)->where("ReciverId",$EmployeeId)->where('read_at',NULL)->update(['read_at'=>Carbon::now()]);
                    // $UpdateMessageReadStatus->read_at = Carbon::now();
                    // $UpdateMessageReadStatus->update();
                }
            }else{

            }
        }else{
            $AllMessages  = null; 
        }
        
        return $AllMessages;
    }
    public function count_user_mssg($reciverid)
    {
        $userid = session('USER_ID');
        return  Chat::Where(function($query) use ($reciverid, $userid)
                              {
                                  $query->where("SenderId",$userid)->where("ReciverId",$reciverid); })->orWhere(function($query) use ($reciverid, $userid){ $query->Where("SenderId",$reciverid)->Where("ReciverId",$userid);})->count('id');
    }
    public function FetchAllUser()
    {
        $AllUsers = users::whereNotIn('id',[session('USER_ID')])->orderBy('name','ASC')->get();
        session()->forget('ACTIVE_CHAT_USER_ID');
        if(!is_null(getSelectedUser()))
        {
            $SelectedUserId = getSelectedUser();
            $AllChatMessages = $this->GetSingalUserMessages($SelectedUserId,'TRUE');
            $TotalMessages = $this->count_user_mssg($SelectedUserId);
        }else{
            $SelectedUserId =null;
            $AllChatMessages =null;
            $TotalMessages =null;
        }
        return view('master.chat.All-Users',compact('AllUsers','SelectedUserId','AllChatMessages','TotalMessages'));
    }

    public function MessageDelete(Request $req)
    {
      $MssgId = $req->msgid;
      $Delete = Chat::findOrFail($MssgId)->update(['message'=>NULL,'deleted_at'=>Carbon::now()]);
      if($Delete)
      {
        return 'mssg deleted';
      }else{
        return 'something went wrong';
      }

    }

    public function DeleteMessageMedia(Request $request)
      {
        $ChatMediaId =  $request->cmid;
        $fileInfo = ChatMedia::findOrFail($ChatMediaId);
        $fileName = $fileInfo->chat_file_name;
        if(file_exists('file-manager/media-files/Chat_media/'.$fileName))
        {
            unlink('file-manager/media-files/Chat_media/'.$fileName);
        }else{
            
        }
        $fileInfo->chat_file_name=null;
        $fileInfo->update();
        echo 'file deleted';


    }
    public function MessageEdit(Request $req)
    {
       $OldMessage = Chat::whereid($req->msgid)->value('message');
       $NewMessage = $req->content;
       $MssgId = $req->msgid;
       $Update = Chat::findOrFail($MssgId);
       $Update->message = $NewMessage ;
       $Update->edited_at = Carbon::now();
       $query = $Update->update();
       if($query)
       {
        $InsertChatHistory = new chat_messages_history();
        $InsertChatHistory->chat_id =$MssgId;
        $InsertChatHistory->message = $OldMessage;
        $InsertChatHistory->save();
        return 'message update successfuly';
       }else{
        return 'something went wrong';
       }

    }

    // public function chat_messages_history()
    // {
    //      $data = Chat::find(3); 
    //      foreach($data->MessageHistory as $list)
    //      {
    //         echo $list->message."<br/>";
    //      }
    // }

    public function GetChatEditHistory(Request $request)
    {
        $MssgId = $request->msgid;
        $data = Chat::findOrFail($MssgId);
        return view('master.chat.chat-message-history',compact('data'));
    }

    public function DownloadChatFile(Request $req)
    {
      $FileDetails = ChatMedia::findOrFail($req->mid);
      if($FileDetails)
      {
        $filename = $FileDetails->chat_file_name;
        $file = public_path()."file-manager/media-files/Chat_media".$filename;
        $headers = array(
         'Content-Type:image/jpg',
        );
        return Response::download($file,$filename,$headers);
        //echo $filename;
      }
    }

    public function SearchUsers(Request $request)
    {
        $input = $request->input;
        $users = users::where('name','LIKE', '%'.$input.'%')->get();
        return view('master.chat.chat-users',compact('users'));
    }
    public function SearchChatUsers(Request $request)
    {
        $input = $request->input;;
        $ChatUsersList = $this->AllChatsUserList('YES');
        $users =null;
        foreach($ChatUsersList as $list)
        {
            $da = users::whereid($list->id)->where('name','LIKE','%'.$input.'%')->first();
            if(!is_null($da))
            {
                $users[] = $da;
            }else{ }
        }
        return view('master.chat.chat-users',compact('users'));
    }
public function CreateChatGroup(Request $request)
    {
       $GroupName = $request->group_name;
       $GroupMembers = $request->group_members;
       // print_r($GroupMembers);
       $rand = rand(11111,99999);
      if($request->has('group_profile_pic'))
       {
          $GroupFile =  $request->file('group_profile_pic');
          $originalname = $rand.$GroupFile->getClientOriginalName();
          $GroupFile->move(public_path().'/file-manager/media-files/Profile_Pictures/', $rand.$originalname); 
          //echo $originalname;
       }else{
        $originalname = null;
       }
        $ChatGroup = ChatGroup::Create([
            'chat_group_name'=>$GroupName,
            'chat_group_profile_pic'=>$originalname,
            'status'=>1,
        ]);
        array_push($GroupMembers, session('USER_ID'));
        foreach($GroupMembers as $listMember)
        {
            if($listMember==session('USER_ID'))
            {
                $Admin = 1;
            }else{
                $Admin = 0;
            }
            ChatGroupMember::create([
                'chatgroup_id'=>$ChatGroup->id,
                'chat_member_id'=>$listMember,
                'admin_status'=>$Admin,
            ]);
        }
        echo 'group created';
    }


    public function getgroupmember()
    {

        $userid = session('USER_ID');
        $data = users::where('id',$userid)->first();
        if(count($data->GroupsMember)>0)
        {
            foreach($data->GroupsMember as $list)
            {
                echo $list->ChatGroups."<br/>";
            }  
        }else{
            echo 'You Have Not Any Group';
        }
        
 
              
              // $ExistsInGroupOrNot  = ChatGroupMember::where('chat_member_id',$userid)->exists();
              // if($ExistsInGroupOrNot)
              // {
              //   $UserChatIds = ChatGroupMember::where('chat_member_id',$userid)->get();
              //   foreach($UserChatIds as $list)
              //   {
              //      $groupIds[] =  $list->ChatGroups->id;
              //   }
              // }else{
              //   $groupIds = null;
              //   echo 'user has not been active in any group';
              // }

               //print_r($groupIds);
              // $messages = Chat::where('SenderId',$userid) ->orWhere('ReciverId',$userid)->orWhereIn('GroupId',$groupIds)->orderBy('id','DESC')->get();

                // $CheckMessages = Chat::Where(function($query1) use ($userid,$groupIds)
                //                   {
                //                       $query1->where("SenderId",$userid)->where("ReciverId",$userid);
                //                   })
                //                   ->orWhere(function($query1) use ($userid,$groupIds)
                //                   { $query1->whereIn("GroupId",$groupIds); })
                //                   ->exists();

              // if($CheckMessages)
              // {
              //   $data = Chat::Where(function($query1) use ($userid,$groupIds)
              //                     {
              //                         $query1->where("SenderId",$userid)->where("ReciverId",$userid);
              //                     })
              //                     ->orWhere(function($query1) use ($userid,$groupIds)
              //                     { $query1->whereIn("GroupId",$groupIds); })
              //                     ->get();
              // }

              // foreach($data as $list)
              // {
              //   echo $data."<br/>";
              // }

              //  $array1 = array();
              //  $array1Uniqe =array(); 
              //  $FinalConnectedUsers =array(); 
              //  foreach($messages as $list)
              //  {
              //   if($list->ReciverId!=$userid || is_null($list->GroupId))
              //     {  
              //       $array1[] =$list->ReciverId;
              //     }
              //     if($list->SenderId!=$userid || is_null($list->GroupId))
              //     {
              //       $array1[] = $list->SenderId;
              //     }  
              //     if($list->ReciverId==null && !is_null($list->GroupId))
              //     {
              //       $array1[] = 'G'.$list->GroupId;
              //     } 
              //  }
                // for($i=0;$i<=count($array1);$i++)
                // {

                // }
    
               //echo count($array1)."<br/>";
               //$users =$array1;
               //print_r($users);

              //return view('master.chat.GroupChat');
      


    }
public function getMember(Request $req)
{
 
  echo  users::get();
}
   
   
}