<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\task\TaskController;
use App\Http\Controllers\task\TaskImageController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;


Route::middleware(['UserLoginAuthentication'])->group(function () {

Route::controller(TaskController::class)->group(function (){
Route::get('Employee/Showtask','ShowTask')->name('Employee.Showtask');
Route::post('/employee.addnewtask','AddNewTask')->name('employee.addnewtask');
Route::post('/changestatus','ChangeTaskStatus')->name('changestatus');
Route::post('/EditTask','EditTask')->name('EditTask');
Route::get('/employee/task/trash/{tid}','MoveToTrash')->name('employee.tasks.trash');
Route::get('/show/trash','ViewTrash')->name('show.trashed');
Route::post('/restoreTask','restoreTask');
Route::post('/deleteTask','deleteTask');
// This is for external used
Route::get('/Export_data','ExportTasks')->name('Export_data');
// export data of any modal
Route::post('/file/import','importData')->name('file.import');
Route::get('/exportemployee','exportEmployess');
Route::post('apend_view_file_task','ApendView')->name('apend_view_file_task');
});


/***************************tihs is for chat routes *************************************/
Route::controller(ChatController::class)->group(function (){	
Route::get('/chat','index')->name('Show.chat');   //when user clicks on chat page then fetch all data
Route::get('/notification-tochat/{id}','NotificationToChatUrl')->name('notification.tochat');   //when user clicks on notification sectionthen fetch all data

//Route::get('/chat/{id}','index')->name('Show.chat.withuser');  // when user click on particular chat then 
Route::post('/fetch-user-messages','GetParticularUserChat');   // when user click on particular chatt
Route::post('/refresh-user-messages','RefreshMessages');  //when message recieved then refersh
Route::post('/fetch-users','AllChatsUserList');  // when new message arrives then it fetch again all chat users  //chatted users
Route::post('/Send-message','MessageStore');  // send message
Route::get('/all-users','FetchAllUser')->name('all.users');  //get all users chat and without chat
Route::post('/msg-delete','MessageDelete');
Route::post('/msg-edit','MessageEdit');
Route::post('/delete-chat-media','DeleteMessageMedia');
Route::get('/msg','chat_messages_history');
Route::post('/get-msg-hist','GetChatEditHistory');
Route::post('search-user','SearchUsers');
Route::post('search-chat-user','SearchChatUsers');
});

/****************************Notifications **********************************************/

/**********Notification task releted ********************************/
Route::controller(NotificationController::class)->group(function (){
Route::get('/notify','notify');
Route::post('/read-notification/','markasread');
Route::post('read-all-notification','MarkAllAsRead');
Route::post('/notifications','fetchnoti');
Route::post('/count-notifications','CountNotifications');

});


});   ///mware

Route::get('/chkmbl', function(){
$agent = new Agent();
if($agent->isMobile())
{
	echo 'Mobile devices';
}elseif($agent->isDesktop())
{


echo $agent->browser().$agent->platform();
}elseif($agent->isTablet())
{
	echo 'teblate device';
}else{
echo 'something went wrong';
}

});
