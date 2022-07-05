@include('GRAPHIC_DEPARTMENT.sidebar');
@include('COMMEN/navbar')
<style type="text/css">
    
   #TaskAssignForm .error{
        color: red;
    }

</style>

<div class="content-page">
    <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between border-bottom-0">
                     <div class="header-title">
                        @if (Session::has('trashed'))
                        <div class="alert alert-success">
                            <ul>
                             <li>{{ Session::get('trashed') }}</li>
                             </ul>
                        </div>
                        @endif
                        <h4 class="card-title">Tasks</h4>
                     </div>
                     @if( $USER_ROLE==2 || $USER_ROLE==1)
                         <div class="header-action">
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                 <button type="button" class="btn btn-outline-primary active addnewtask" >Add New Task</button>&nbsp;
                                <button type="button" class="btn btn-outline-danger active" data-toggle-extra="tab" data-target-extra="#board-content"><a href="{{ route('show.trashed')}}"><span style="color:red"><i class="fa fa-trash" ></i>&nbsp;View Trashed</span></a></button>
                               <!--     <button type="button" class="btn btn-outline-primary" data-toggle-extra="tab" data-target-extra="#list-content">List</button> -->
                            </div>
                         </div>
                    @endif
                  </div>
               </div>
            </div>

            <div class="col-md-12">
               <div id="board-content" class="animate__animated animate__fadeIn active" data-toggle-extra="tab-content">
                  <div class="board-content">
<!------------------------------------------ This is todo work list------------------------------ -->
                     <div class="board-item">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="item-title">Todo</h5>
                           </div>
                        </div>
                        

<div class="board-scrollbar board-scrollbar-0">
@if($NewTasks===false)
        <div id="draggable-item-7">
     <div class="draggable-item todo-board-card border-color-left-red">
        <div class="item-body">
            <div>
                <small>Project > List</small>
                <h5>There is no new task </h5>
               <div id="div1" class="fa"></div> 
            </div>
        </div>
    </div>
   </div>
@else
    @foreach($NewTasks as $initiateTask)
    <div id="draggable-item-1">
    <div class="draggable-item todo-board-card border-color-left-blue">
        <div class="item-body">
            <div>
                <small>Project >{{$initiateTask->taskStatus->TaskStatus}}</small><br/>created at <span class="badge rounded-pill bg-primary text-dark ">{{$initiateTask->created_at->diffForHumans()}}</span>
               last updated <span class="badge rounded-pill bg-warning text-dark ">{{$initiateTask->updated_at->diffForHumans()}}</span>
                <h5>{{$initiateTask->Title}} &nbsp;<i class="fa fa-clock-o" aria-hidden="true" style="color:red"></i></h5>
                <p class="text-ellipsis short-1 mb-0 mt-1">{{$initiateTask->Description}}</p>
                <p class="text-ellipsis short-1 mb-0 mt-1"><b>@if($initiateTask->AdditionalCmnt==NULL)  @else Note: @endif </b><i>{{$initiateTask->AdditionalCmnt}}</i></p>
@if($initiateTask->file==1)
    @if($initiateTask->taskImages->mediaType=='IMG')
        <img src="{{URL::asset('file-manager/media-files/Task_Media/'.$initiateTask->taskImages->FileName)}}" style="width: 70%;max-height: 60%;max-width: 90%;">
        &nbsp;&nbsp;&nbsp;<a href="{{URL::asset('file-manager/media-files/Task_Media/'.$initiateTask->taskImages->FileName)}}" download="{{URL::asset('file-manager/media-files/Task_Media/'.$initiateTask->taskImages->FileName)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
       <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> 

       <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg></a>
    @else
      <video src="{{URL::asset('file-manager/media-files/Task_Media/'.$initiateTask->taskImages->FileName)}}" style="max-height: 80%;max-width: 90%;" controls></video>
      &nbsp;<a href="{{URL::asset('file-manager/media-files/Task_Media/'.$initiateTask->taskImages->FileName)}}" download="{{URL::asset('file-manager/media-files/Task_Media/'.$initiateTask->taskImages->FileName)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
       <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> 

       <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg></a>
    @endif
@endif
<p><br/><b></b> {{$initiateTask->userInfo->name}}</p>
            </div>
            <div>
                <div class="rounded">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Assign To <br/>{{$initiateTask->userInfo->name}}" data-html="true">
                      @if(session('USER_ID')==$initiateTask->ReciverId) <i class='fa fa-user-circle' style='color:green'></i>@else <i class='fa fa-user-circle' style='color:gray'></i>@endif
                    </a>
                </div>
            </div>
        </div>
        <div class="item-footer">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <div class="pr-3">
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Start Date <br/> {{$initiateTask->StartDate}}" data-html="true">
                        <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        </a>
                    </div>
                        <div class="pr-3">
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Estimated Date <br/>{{$initiateTask->CompletionDate}}" data-html="true">
                        <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        </a>
                    </div>
                    <!--<div class="pr-3">-->
                    <!--    <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Set Priority">-->
                    <!--    <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                    <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />-->
                    <!--    </svg>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <div class="pr-3">
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Assigned by <br/>{{$initiateTask->senderInfo->name}}" data-html="true">
                        <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        </a>
                    </div>
                    @if(session('USER_ID')==$initiateTask->ReciverId)
                        <div class="pr-3 startTask">
                        <input type="hidden" name="" value="{{$initiateTask->id}}" class="tid">
                        <a href="#" class="text-primary chngestts" data-toggle="tooltip" data-placement="top" title="Click Here <br/> To Start Task" id="startTask" data-html="true">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-square-fill" viewBox="0 0 16 16">
                      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
                      </svg>
                        </a>
                    </div>
                @endif
                </div>
                @if($USER_ROLE==2 || $USER_ROLE==1)
                    <div class="dropdown">
                        <a href="#" class="text-primary pl-3" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </a>
                        <div class="dropdown-menu edit-task-div" aria-labelledby="dropdownMenuButton-1" >
                            <input type="hidden" class="taskId" value="{{$initiateTask->id}}">
                            <a class="dropdown-item editTask">
                                <svg class="svg-icon text-primary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                Edit
                            </a>
                            <!--<a class="dropdown-item" href="#">-->
                            <!--    <svg class="svg-icon text-primary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                            <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />-->
                            <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />-->
                            <!--    </svg>-->
                            <!--    View-->
                            <!--</a>-->
                            <a class="dropdown-item" href="{{route('employee.tasks.trash',['tid' =>$initiateTask->id])}}">
                                <svg class="svg-icon text-primary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Move To Trash
                            </a>
                        </div>
                    </div>
            @endif
            </div>
        </div>
     </div>
  </div>
  @endforeach 
  @endif    
 </div>   
</div>    
 <!------------------------------------------ This is todo work list------------------------------ -->
  <!------------------------------------------ This is todo work list------------------------------ -->
                      
                    
    <div class="board-item">
        <div class="card">
            <div class="card-body">
                <h5 class="item-title">In Progress</h5>
                    </div>
                </div>
<div class="board-scrollbar board-scrollbar-1">
@if($ProgressTask===false)
<div id="draggable-item-7">
    <div class="draggable-item todo-board-card border-color-left-red">
        <div class="item-body">
            <div>
                <small>Project > Processing</small>
                <h5>There is no progressing tasks</h5>
            </div>
        </div>
    </div>
</div>
@else
@foreach($ProgressTask as $ptasks)
<div id="draggable-item-7">
    <div class="draggable-item todo-board-card ">
        <div class="item-body">
            <div>
                <small>Project >{{$ptasks->taskStatus->TaskStatus}}</small>
                <br/>created at <span class="badge rounded-pill bg-primary text-dark ">{{$ptasks->created_at->diffForHumans()}}</span>
                last updated <span class="badge rounded-pill bg-warning text-dark ">{{$ptasks->updated_at->diffForHumans()}}</span>
                <h5>{{$ptasks->Title}} &nbsp;     <i class="fa fa-solid fa-cog fa-spin"></i></h5>
                <p class="text-ellipsis short-1 mb-0 mt-1">{{$ptasks->Description}}</p>
@if($ptasks->file==1)
    @if($ptasks->taskImages->mediaType=='IMG')
        <img src="{{URL::asset('file-manager/media-files/Task_Media/'.$ptasks->taskImages->FileName)}}" style="width: 80%;max-height: 80%;max-width: 90%;">
        &nbsp;<a href="{{URL::asset('file-manager/media-files/Task_Media/'.$ptasks->taskImages->FileName)}}" download="{{URL::asset('file-manager/media-files/Task_Media/'.$ptasks->taskImages->FileName)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
       <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> 

       <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg></a>
    @else
      <video src="{{URL::asset('file-manager/media-files/Task_Media/'.$ptasks->taskImages->FileName)}}" style="max-height: 80%;max-width: 90%;" controls></video>
      &nbsp;<a href="{{URL::asset('file-manager/media-files/Task_Media/'.$ptasks->taskImages->FileName)}}" download="{{URL::asset('file-manager/media-files/Task_Media/'.$ptasks->taskImages->FileName)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
       <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> 

       <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg></a>
    @endif
@endif
<p><br/><b></b> {{$ptasks->userInfo->name}}</p>
            </div>
            <div>
                <div class="rounded">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Working By <br/>{{$ptasks->userInfo->name}}" data-html="true">
                       @if(session('USER_ID')==$ptasks->ReciverId) <i class='fa fa-user-circle' style='color:green'></i>@else <i class='fa fa-user-circle' style='color:gray'></i>@endif
                    </a>
                </div>
            </div>
        </div>
        <div class="item-footer">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <div class="pr-3">
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Start Date <br/>{{$ptasks->StartDate}}" data-html="true">
                        <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        </a>
                    </div>
                         <div class="pr-3">
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Estimated Date <br/>{{$ptasks->CompletionDate}} " data-html="true">
                        <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        </a>
                    </div>
                    <!--<div class="pr-3">-->
                    <!--    <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Set Priority">-->
                    <!--    <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                    <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />-->
                    <!--    </svg>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <div class="pr-3">
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Assigned by <br/>{{$ptasks->senderInfo->name}}" data-html="true">
                        <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        </a>
                    </div>
                      @if(session('USER_ID')==$ptasks->ReciverId)
                        <div class="pr-3 startTask">
                        <input type="hidden" name="" value="{{$ptasks->id}}" class="tid">
                        <a href="#"  class="text-primary chngestts"  data-toggle="tooltip" data-placement="top" title="click here <br/> if task is completed" data-html="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                    </svg>
                        </a>
                    </div>
                    @endif
                </div>
                    @if(($USER_ROLE==2) || ($USER_ROLE==1))
                        <div class="dropdown">
                            <a href="#" class="text-primary pl-3" id="dropdownMenuButton-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </a>
                            
                           <div class="dropdown-menu edit-task-div" aria-labelledby="dropdownMenuButton-7">
                                <input type="hidden" class="taskId" value="{{$ptasks->id}}">
                                <a class="dropdown-item editTask" >
                                   
                                    <svg class="svg-icon text-primary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Edit
                                </a>
                            <!--    <a class="dropdown-item" href="#">-->
                            <!--        <svg class="svg-icon text-primary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                            <!--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />-->
                            <!--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />-->
                            <!--        </svg>-->
                            <!--        View-->
                            <!--    </a>-->
                                  <a class="dropdown-item" href="{{route('employee.tasks.trash',['tid' =>$ptasks->id])}}">
                                    <svg class="svg-icon text-primary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Move To Trash
                                </a>
                            </div>
                        </div>
                    @endif
            </div>
        </div>
    </div>
</div>    
@endforeach   
@endif


                                                                                                                  
                        </div>
                     </div>
<!-- --------------------------------------------end of progress div-------------------------------------- -->
<!-- --------------------------------start of review section --------------------------------------------- -->
                     <div class="board-item">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="item-title">Review</h5>
                           </div>
                        </div>
    <div class="board-scrollbar board-scrollbar-2">
@if($CompletedTask===false)
<div id="draggable-item-13">
    <div class="draggable-item todo-board-card border-color-left-red">
        <div class="item-body">
            <div>
                <small>Project > List</small>
                <h5>There is no completed task</h5>
            </div>
        </div>
    </div>
</div> 
@else
@foreach($CompletedTask as $ctask)
    <div id="draggable-item-13">
    <div class="draggable-item todo-board-card border-color-left-red">
        <div class="item-body">
            <div>
                <small>Project >{{$ctask->taskStatus->TaskStatus}}</small>
                <br/>created at <span class="badge rounded-pill bg-primary text-dark ">{{$ctask->created_at->diffForHumans()}}</span>
                last updated <span class="badge rounded-pill bg-warning text-dark ">{{$ctask->updated_at->diffForHumans()}}</span>
                <h5>{{$ctask->Title}}&nbsp;@if($ctask->Status==3)<i class="fa fa-check-circle" style="color: green;"></i>@else <i class="fa fa-balance-scale" style="color: red;"></i>@endif</h5>
                <p class="text-ellipsis short-1 mb-0 mt-1">{{$ctask->Description}}</p>
@if($ctask->file==1)
    @if($ctask->taskImages->mediaType=='IMG')
        <img src="{{URL::asset('file-manager/media-files/Task_Media/'.$ctask->taskImages->FileName)}}" style="width: 80%;max-height: 80%;max-width: 90%;">
        &nbsp;<a href="{{URL::asset('file-manager/media-files/Task_Media/'.$ctask->taskImages->FileName)}}" download="{{URL::asset('file-manager/media-files/Task_Media/'.$ctask->taskImages->FileName)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
       <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> 

       <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg></a>
    @else
      <video src="{{URL::asset('file-manager/media-files/Task_Media/'.$ctask->taskImages->FileName)}}" style="max-height: 80%;max-width: 90%;" controls></video>
      &nbsp;<a href="{{URL::asset('file-manager/media-files/Task_Media/'.$ctask->taskImages->FileName)}}" download="{{URL::asset('file-manager/media-files/Task_Media/'.$ctask->taskImages->FileName)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
       <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> 

       <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg></a>
    @endif
@endif
<p><br/><b></b> {{$ctask->userInfo->name}}</p>
            </div>
            <div>
                <div class="rounded">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Completed By <br/> {{$ctask->userInfo->name}}" data-html="true">
                      @if(session('USER_ID')==$ctask->ReciverId) <i class='fa fa-user-circle' style='color:green'></i>@else <i class='fa fa-user-circle' style='color:gray'></i>@endif
                    </a>
                </div>
            </div>
        </div>
        <div class="item-footer">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <div class="pr-3">

                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Start Date <br/> {{$ctask->StartDate}}" data-html="true">
                        <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        </a>
                    </div>
                    <div class="pr-3">
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Estimated Date <br/>{{$ctask->CompletionDate}}" data-html="true">
                        <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        </a>
                    </div>
                    <!--<div class="pr-3">-->
                    <!--    <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Set Priority">-->
                    <!--    <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                    <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />-->
                    <!--    </svg>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <div class="pr-3">
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Assigned by <br/>{{$ctask->senderInfo->name}}" data-html="true">
                        <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        </a>
                    </div>
             @if(session('USER_ID')==$ctask->SenderId)
                   @if($ctask->Status==2)
                     
                      <div class="pr-3 changeStatus">
                        <input type="hidden" value="{{$ctask->id}}" class="ctid">
                      <select class="cbtn"><option selected disabled>Confirm Task Status</option><option value="3">Completed</option><option value="4">Updation Need</option></select>
                      </div>
                      @endif
            @endif
                </div>
                @if($USER_ROLE==2 || $USER_ROLE==1)
                    <div class="dropdown">
                        <a href="#" class="text-primary pl-3" id="dropdownMenuButton-13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="svg-icon" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-13">
                            <!--<a class="dropdown-item" data-toggle="modal" data-target="#ModalForTask">-->
                            <!--    <svg class="svg-icon text-primary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                            <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />-->
                            <!--    </svg>-->
                            <!--    Edit-->
                            <!--</a>-->
                            <!--<a class="dropdown-item" href="#">-->
                            <!--    <svg class="svg-icon text-primary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                            <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />-->
                            <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />-->
                            <!--    </svg>-->
                            <!--    View-->
                            <!--</a>-->
                          <a class="dropdown-item" href="{{route('employee.tasks.trash',['tid' =>$ctask->id])}}">
                                <svg class="svg-icon text-primary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Move To Trash
                            </a>
                        </div>
                    </div>
            @endif
            </div>
        </div>
    </div>
</div>      
@endforeach                     
@endif
     
                             
                           </div>
                     </div>
<!---------------------------------------------- end of  review ---------------------------------------- -->
                    </div>
               </div>
            </div>
         </div>
     </div>
     </div>
<!-- --------------------------end all tasks-------------------------------------------------------- -->
<!--------------------------- Modal ---------------------->
<div class="modal fade" id="ModalForTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Assign new task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form id="TaskAssignForm" action="{{ route('employee.addnewtask') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="taskId" value="" id="taskId">
        <div>
        <label class="font-weight-bold">Title</label>
        <input type="text" placeholder="Title" class="form-control mb-2" name="title" id="title">
        @error('title')
        <span class="error">{{$message}}</span>
        @enderror
        </div>
        <div>
            <label class="font-weight-bold">Description</label>
            <textarea  placeholder="Enter desciption" class="form-control mb-2" name="description" id="description"></textarea>
            @error('description')
            <span class="error">{{$message}}</span>
            @enderror
         </div>
         <div>
             <label class="font-weight-bold">Additional Comment</label>
             <input type="text" placeholder="Add additional comment(optional)" class="form-control mb-2" name="addcomment" id="addcomment">
       </div>
       <div>
            <label class="font-weight-bold">Select Employee</label>
            <select class="form-control " name="selectEmployee" id="selectEmployee">
            <option value="" selected disabled>Select employee</option>
            @foreach($AllEmployees as $list)
            <option value="{{$list->id}}">{{$list->name}}</option>
            @endforeach
            </select>
            @error('selectEmployee')
            <span class="error">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label class="font-weight-bold">Start date</label>
            <input type="text"  class="form-control " name="startDate" id="startDate">
            @error('startDate')
            <span class="error">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label class="font-weight-bold">Completion date</label>
            <input type="text" name="endd" id="endd"  class="form-control "><br/>
            @error('endd')
            <span class="error">{{$message}}</span><br/>
            @enderror
         </div>
        <div><br/>
            <label class="font-weight-bold">Select image/video</label>
            <input type="file"  class="mb-2" name="TaskMedia" id="files">
            @error('TaskMedia')
            <span class="error">{{$message}}</span>
            @enderror<br/>
        </div>
        <input type="submit" name="submit" class="btn btn-primary float-right">
        </form>
      </div>
    <!--   <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    
      </div> -->
    </div>
  </div>
</div>
<!-- END Modal -->
<!-- Modal for response-->
<div class="modal fade" id="responseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
       <div id="responsed" style="min-height: 100px;text-align: center;padding: 20%;"></div>
      </div>
    </div>
  </div>
</div>
<!-- end Modal for response-->
<script>

   

</script>
@include('COMMEN/footer');