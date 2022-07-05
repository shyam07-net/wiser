<?php
use App\Http\Controllers\task\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EmployeeleavesController;
use App\Http\Controllers\EmployeesProfileController;
use App\Models\Employeeleaves;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\TestController;



 Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    Artisan::call('config:clear');
    Artisan::call('config:cache');

  
   Artisan::call('optimize:clear');
           
     return redirect('/');
 });
 Route::get('/view-clear', function() {
     $exitCode = Artisan::call('route:clear');
    return redirect('/');
 });
  Route::get('/cl', function() {
     Artisan::call('cache:clear');
       Artisan::call('route:clear');
         Artisan::call('route:cache');
           Artisan::call('config:clear');
           Artisan::call('config:cache');
     return redirect('/');
 });

  Route::get('/',[UsersController::class,'login']);
  Route::post('/auth',[UsersController::class,'auth'])->name('login');
  Route::group(['middleware'=>'emp_auth'],function(){
  Route::controller(UsersController::class)->group(function () {
    Route::get('/logout','logout')->name('out');
    Route::get('/update_logout_status','update_logout_status');
    Route::get('/total_login','total_login');
    Route::get('/away_start','away_start');
    Route::get('/away_stop','away_stop');
    Route::get('/break_status','break_status');
    Route::get('/Attendance','Attendance');
    Route::POST('/metting','metting');
    Route::POST('/metting_out','metting_out');
    Route::POST('/StartMetting','StartMetting');
        Route::GET('engaged','engaged');

});
Route::controller(ReminderController::class)->group(function () {
  Route::post('AddReminder','AddReminder')->name('AddReminder');
});

 Route::get('/Employeeleave',[EmployeeleavesController::class,'index']);
 Route::post('/saves',[EmployeeleavesController::class,'store']);
 Route::get('/Employeelist',[EmployeeleavesController::class,'show'])->name('/Employeelist');
 Route::post('/changeleavestatus',[EmployeeleavesController::class,'leaveStatus'])->name('changeleavestatus');
 Route::get('/empleaves/export',[EmployeeleavesController::class,'export']);
 Route::get('/delete/{id}',[EmployeeleavesController::class,'delete']);
 Route::get('/AllEmployees',[UsersController::class,'index']);

 Route::get('/LeaveManage',[EmployeeleavesController::class,'LeaveManage']);
 
 Route::post('/update_leave',[EmployeeleavesController::class,'update_leave']);

 Route::post('/AllEmployees/store',[UsersController::class, 'save']);
 Route::get('/department',[DepartmentController::class, 'index']);
 Route::post('/departmentsave',[DepartmentController::class, 'store']);
 
 // for notes
  Route::get('/personalnotes', [NotesController::class, 'index']);
  Route::post('/notessaves', [NotesController::class, 'store']);
  Route::get('/deletenotes/{id}', [NotesController::class, 'delete']);

});

// /////////////////////#Employees Profile ///////////////////////////////////////
Route::controller(EmployeesProfileController::class)->group(function (){
Route:: prefix ('Employees')->group (function (){
Route::get('/profile','index')->name('Employee.view.profile');     //it works but
Route::get('EditProfile','edit')->name('edit.employee.profile');   // it does notT
Route::post('update','create')->name('employee.update.profile');
Route::post('/change/profile','ChangeProfilePicture')->name('change.profile.pic');
});
Route::get('re_dele/{id}',[TestController::class,'create']);
});










