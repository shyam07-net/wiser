<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Notifications\UserRegisterNotifications;
use Illuminate\Notifications\Notifiable;

class NotificationController extends Controller
{
   
    public function notify()
    {
          //  $user = array(
          // "sender" => session('USER_ID'),
          // "message" =>'You Got new message  ',
          // "title" =>'Chat message from ',
          // );
          // $users = users::whereid('8')->first();
          // $users->notify(new UserRegisterNotifications($user));
    }

    public function markasread(Request $request)
    {        $id = Request()->id;
            $user = users::whereid(session('USER_ID'))->first();
            $user->notifications->where('id',$id)->markAsRead();
            return 'notification read';
    }
    
    public function MarkAllAsRead()
    {
            $user = users::whereid(session('USER_ID'))->first();
            $user->notifications->markAsRead();
            return 'all notifications has been read';

    }
    public function fetchnoti(Request $request)
    {
            $user = users::findOrFail(session('USER_ID'));
            $Notifications = $user->unreadnotifications;   
            $totalNotifications  = count($Notifications);
            $ReadNotifications  = $user->readnotifications;
            return view('master.notifications.fix_notif',compact('Notifications','totalNotifications','ReadNotifications'));
    }

    public function CountNotifications()
    {
        return CountNotifications();
    }
}
