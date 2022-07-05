@include('includes.sidebar');
@include('includes.navbar');
<style>
    .creatr{
        font-size:15px;
    }
    
    .paragraph{
        color:black;
        font-size:15px;
       
        border-radius:10px solid red;
    }
    

    
    
  
</style>

<div class="content-page">
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-4 chat-left-wrapper">
                    <div class="chat-list">
                        <div class="card">
                            <div class="card-header">
                               <div class="d-flex justify-content-between align-items-center mb-2">
                                  <h4 class="card-title">Conversations</h4>
                                  <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none" data-toggel-extra="side-nav-close" data-expand-extra=".chat-left-wrapper">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                  </button>
                                  <a href="javascript:void(0);" onclick="creategroupchatmodal()"><h4 class="creatr">Create channel</h4> </a>
                                  <a href="{{route('all.users')}}"><h4 class="creatr">View all</h4></a>
                               </div>
                               <div class="form-group mb-0">
                                  <div class="input-group input-group-sm">
                                     <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                           <svg class="svg-icon text-primary" id="search" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                           </svg>
                                        </span>
                                     </div>
                                     <input type="text" class="form-control form-control-sm search-chat" id="search-chat-users" placeholder="Enter name" aria-label="Username" aria-describedby="basic-addon1">
                                     <div class="input-group-append d-none">
                                        <span class="input-group-text">
                                           <div class="spinner-border spinner-border-sm" role="status">
                                              <span class="sr-only">Loading...</span>
                                           </div>
                                        </span>
                                     </div>
                                  </div>
                               </div>
                            </div>
            <!--------------------------------------------------------- Recent chat ----------------------------------------------------------------->    
                            <div class="card-body item-list">     
                                <ul id="chat-list" role="custom-tab" class="recent-chats">
                                    @if(!is_null($AllChats))
                                        @foreach($AllChats as $list)
                                            <a  href="javascript:void(0);" onclick="FetchUserMessages('fetch-user-messages','{{csrf_token()}}','{{$list->id}}','user-content-1','cu')">
                                            <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-1">
                                                <div class="img-container">
                                                    <div class="avatar avatar-60">
                                                        @if(!is_null(ProfileImage($list->id)))
                                                            <img src="{{asset('file-manager/media-files/Profile_Pictures/'.ProfileImage($list->id))}}" alt="users" class="img-fluid avatar-borderd avatar-rounded">
                                                        @else
                                                             <img src="{{asset('file-manager/media-files/Profile_Pictures/profile.jpg')}}" alt="users" class="img-fluid avatar-borderd avatar-rounded">
                                                        @endif
                                                            <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                    </div>
                                                </div>
                                                <div class="simple-item-body">
                                                    <div class="simple-item-title">
                                                           @if(session('ACTIVE_CHAT_USER_ID')==$list->id)
                                                            <h5 class="title-text text-primary">{{GetUserProfileName($list->id) ?? ''}}</h5>
                                                           @else
                                                            <h5 class="title-text">{{GetUserProfileName($list->id) ?? ''}}</h5>
                                                           @endif
                                                            <div class="simple-item-time"> <span>{{GetRecentChatTime($list->id)}}</span> </div>
                                                        
                                                    </div>
                                                    <div class="simple-item-content">
                                                        @if(GetUserLastMessage($list->id,'check')=='true')
                                                            <span class="simple-item-text short">{{ GetUserLastMessage($list->id,'')}}</span>
                                                        @else
                                                            <span class="simple-item-text short " style="color:red">{{ GetUserLastMessage($list->id,'')}}</span>
                                                        @endif
                                                        <div class="dropdown">
                                                            <button class="btn btn-link " type="button" id="chat-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-caret-down"></i></button>
                                                            <div class="dropdown-menu" aria-labelledby="chat-dropdown-1">
                                                                <a class="dropdown-item" href="#">Move Archive</a>
                                                                <a class="dropdown-item" href="#">Favourite</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> </a> 
                                        @endforeach 
                                    @else
                                       <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-1">
                                        &nbsp;&nbsp; &nbsp;&nbsp;You do not have any conversation
                                       </li>         
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
<!-- -------------------------------------------------------------------------------------message part ----------------------------- -->
            <div class="col-lg-8 chat-right-wrapper" >
                <div class="chat-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content" id="user-content-1">
                    @if(session('ACTIVE_CHAT_USER_ID') && $SelectedUserId!=null)

                        <div class="card">
                <!-------------------------------------------------- sidebar------------------------------------------------------------------- -->
                                    <div class="right-sidenav" id="first-sidenav">
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav"><i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="chat-profile mx-auto">
                                            <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                                                @if(!is_null(ProfileImage($SelectedUserId)))
                                                    <img src="{{asset('file-manager/media-files/Profile_Pictures/'.ProfileImage($SelectedUserId))}}" alt="User Image" class="img-fluid ">
                                                @else
                                                     <img src="{{asset('file-manager/media-files/Profile_Pictures/profile.jpg')}}" alt="User Image" class="img-fluid">
                                                @endif
                                            </div>
                                            <h4 class="mb-2">{{GetUserProfileName($SelectedUserId) ?? ''}}</h4>
                                            <h6 class="mb-2">Developer</h6>
                                        </div>
                                        <div class="chat-detail">
                                            <div class="row"><div class="col-6 col-md-6 title">User Name:</div><div class="col-6 col-md-6 text-right">{{GetUserName($SelectedUserId) ?? ''}}</div></div> <hr>
                                            <div class="row"><div class="col-6 col-md-6 title">Tel:</div><div class="col-6 col-md-6 text-right">{{GetMobileNumber($SelectedUserId) ?? ''}}</div></div><hr>
                                            <div class="row"> <div class="col-6 col-md-6 title">Date Of Birth:</div><div class="col-6 col-md-6 text-right">{{GetDOB($SelectedUserId) ?? ''}}</div> </div><hr>
                                            <div class="row"><div class="col-6 col-md-6 title">Gender:</div><div class="col-6 col-md-6 text-right">{{GetGender($SelectedUserId) ?? ''}}</div></div> <hr>
                                          <!--   <div class="row">
                                                <div class="col-6 col-md-6 title">Language:</div>
                                                <div class="col-6 col-md-6 text-right">English</div>
                                            </div> -->
                                        </div>
                                    </div>
                <!--------------------------------------------------- profile----------------------------------------------------------------- -->
                            <div class="card-header chat-content-header">
                                <div class="d-flex align-items-center">
                                    <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none mr-2" data-toggel-extra="side-nav" data-expand-extra=".chat-left-wrapper">
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                    <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                                         @if(!is_null(ProfileImage($SelectedUserId)))
                                            <img src="{{asset('file-manager/media-files/Profile_Pictures/'.ProfileImage($SelectedUserId))}}" alt="User Image" class="img-fluid ">
                                        @else
                                             <img src="{{asset('file-manager/media-files/Profile_Pictures/profile.jpg')}}" alt="User Image" class="img-fluid">
                                        @endif
                                    </div>
                                    <div class="chat-title">
                                        <h5>{{GetUserName($SelectedUserId) ?? ''}}</h5>
                                        <small>Online</small>&nbsp;&nbsp;&nbsp;<small>Total Messages {{$TotalMessages}}</small>
                                    </div>
                                </div>
                                <div class="chat-action">
                                    <div class="nav" id="user-1-action" role="tablist">
                                        <button class="btn text-primary bg-primary-light btn-sm" id="user-1-video-call-tab">
                                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                            </svg>b
                                        </button>
                                        <button class="btn text-primary bg-primary-light btn-sm ml-2" id="user-1-call-tab">
                                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>c
                                        </button>
                                    </div>
                                </div>
                            </div>

                        <!---------------------------------------------------Chats----------------------------------------------------------------- -->
                            <div class="card-body msg-content" id="user-1-chat-content">
                                <div class="msg-list" id="msg-list">  <!--               ap -->
                                    @if(!is_null($AllChatMessages))
                                        @foreach($AllChatMessages as $list)
                                            @if($list->SenderId== session('USER_ID'))
                                                @if(!is_null($list->message))
                                                    <div class="single-msg user">
                                                        <div class="triangle-topright single-msg-shap"></div>
                                                        <div class="single-msg-content user">
                                                        
                                                                <div class="msg-detail">
                                                                    <span> @nl2br($list->message) @if(!is_null($list->edited_at)) <a style="color: white;" data-toggle="tooltip" data-placement="top" title="{{$list->edited_at}}" data-html="true" onclick="GetMssgsHstry('{{csrf_token()}}','{{$list->id}}','get-msg-hist')"><em>(edited)</em></a>@endif </span>&nbsp;&nbsp;
                                                                   @if(!is_null($list->read_at))
                                                                     <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                                                                   @else
                                                                    <i class="fa fa-check " aria-hidden="true"></i>
                                                                   @endif
                                                                </div>
                                                                <span style="padding-left:20px;font-size: 11px">{{$list->created_at->diffForhumans()}}</span> &nbsp;&nbsp;
                                                        
                                                                <div class="dropdown">
                                                                    <a href="#" class="text-white pl-3" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">...</a>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-1" >
                                                                       <a class="dropdown-item" onclick="MsgEdit('{{csrf_token()}}','{{$list->id}}','msg-edit','{{$SelectedUserId}}')"><i class="fa fa-edit"></i>Edit</a>
                                                                       <a class="dropdown-item" onclick="MsgDlt('{{csrf_token()}}','{{$list->id}}','msg-delete','{{$SelectedUserId}}')"><i class="fa fa-trash"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                        @elseif(is_null($list->message) && $list->files==1 && (is_null($list->deleted_at)))
                                                        @else 
                                                            <div class="single-msg user">
                                                                <div class="triangle-topright single-msg-shap"></div>
                                                                <div class="single-msg-content user">
                                                                    <div class="msg-detail">
                                                                        <span> <em>This message was deleted </em> </span> <span style="padding-left:20px;font-size: 11px">{{$list->created_at->diffForhumans()}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                             
                                                    <div id="c-media" style="margin-left:70%;">
                                                            @if($list->files==1)
                                                                <br/>
                                                              <p class="paragraph" style="color:red">@foreach($list->MediaFiles as $media)
                                                              </br>
                                                                    @if(!is_null($media->chat_file_name))
                                                                        {{getMedia($media->id)}}
                                                                       <span>{{Str::limit(substr($media->chat_file_name,5),1,$end='...')}} &nbsp;&nbsp;</span></p>
                                                                        <a href="{{URL::asset('file-manager/media-files/Chat_media/'.$media->chat_file_name)}}" download="{{substr($media->chat_file_name,5)}}"  class="download-chat-file"><i class="fa fa-download" aria-hidden="true"></i>
                                                                        </a>&nbsp;
                                                                        <a href="javascript:void(0)" id="dlt-chat-media" onclick="deleChatMedia('delete-chat-media','{{csrf_token()}}','{{$media->id}}','{{$SelectedUserId}}')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                    @else
                                                                        <span> <em>This message was deleted </em> </span>
                                                                    @endif
                                                                @endforeach
                                                            @endif 
                                                    </div>
                                            @else
                                                @if(!is_null($list->message))
                                                    <div class="single-msg">
                                                        <div class="triangle-topleft single-msg-shap"></div>
                                                        <div class="single-msg-content">
                                                            <div class="msg-detail">
                                                                <span>
                                                                 
                                                                    @nl2br($list->message) 
                                                                    @if(!is_null($list->edited_at))
                                                                        <a class="text-primary" data-toggle="tooltip" data-placement="top" title="{{$list->edited_at}}" data-html="true" onclick="GetMssgsHstry('{{csrf_token()}}','{{$list->id}}','get-msg-hist')"><em>(edited)</em></a>
                                                                    @endif 
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif(is_null($list->message) && $list->files==1 && (is_null($list->deleted_at)))
                                                @else
                                                    <div class="single-msg">
                                                        <div class="triangle-topleft single-msg-shap"></div>
                                                        <div class="single-msg-content">
                                                            <div class="msg-detail">
                                                                <span><em>This message was deleted </em></span>
                                                            </div>
                                                            <div class="msg-action"><span>{{$list->created_at->diffForhumans()}}</span> </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div id="c-media" style="margin-right: 70%;">
                                                   <p class="paragraph"> @if($list->files==1)
                                                        <br/>
                                                        @foreach($list->MediaFiles as $media)
                                                            @if(!is_null($media->chat_file_name))
                                                                {{getMedia($media->id)}}
                                                                    <br/><span>{{Str::limit(substr($media->chat_file_name,5),1,$end='...')}} &nbsp;&nbsp; </span></p>
                                                                    <a href="{{URL::asset('file-manager/media-files/Chat_media/'.$media->chat_file_name)}}" download="{{substr($media->chat_file_name,5)}}"  class="download-chat-file"><i class="fa fa-download" aria-hidden="true"></i></a>
                                                            @else
                                                                <span> <em>This message was deleted </em> </span>
                                                            @endif
                                                        @endforeach
                                                    @endif 
                                                </div>
                                            @endif
                                        @endforeach 
                                    @else
                                        Say Hello
                                    @endif
                                </div>
                            </div>

                        <!------------------------------- Edit history ------------------------------------------------------------------>
                                <!-- Modal -->

                            <div class="modal fade" id="edit-mssg-hstry" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit History</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body edit-mssg-hstry"></div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                </div>
                            </div>
                                <!-- END Modal -->
                        <!------------------------------- end history ------------------------------------------------------------------->
                        <!---------------------------------------------------Message send----------------------------------------------------------------- -->
                            <div class="card-footer px-3 py-3" >
                                <div id="cht-file-progress" style="display:none;">
                                 <div class="progress" >
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">sending messages or files please don't refresh page
                                </div>
                            </div>
                                </div>
                                <span id="filesList"></span>
                                <form id="msg-send">
                                    <div class="input-group input-group-sm">
                                        <textarea class="form-control" name="chat_input" id="chat-input" placeholder="Enter here..." aria-label="Enter your message" aria-describedby="basic-addon2" ></textarea>
                                        <input type="hidden" value="amo" class="demo">
                                        <div class="input-group-append">
                                            <input type="hidden" name="creciever" value="{{$SelectedUserId}}">
                                            <!--<input type="file" name="chat-media[]" style="display: none;" class="chat-media-files" id="chat-media" onchange="showChatFile()" multiple>-->
                                            <!--<a href="javascript:void(0)" onclick="clickfile()"><i class="fa fa-file" aria-hidden="true"></i></a>-->
                                            <button type="button" class="input-group-text chat-icon" id="basic-addon1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> &#128512;
                                            </button>
                                            <input type="file" name="chat-media[]" style="display: none;" class="chat-media-files" id="chat-media" onchange="showChatFile()" multiple>
                                             <button><a href="javascript:void(0)" onclick="clickfile()"><i class="fa fa-file" aria-hidden="true"></i></a></button>
                                          <!--   <div class="dropdown-menu p-0 border-0" aria-labelledby="basic-addon1">
                                            <emoji-picker data-target-input="#chat-input"></emoji-picker>
                                            </div> -->
                                        </div>
                                        <div class="input-group-append">
                                          <div class="input-group-append">
                                             <button type="submit" name="submit" id="chat-submit" ><i class="fa fa-telegram text-primary"></i></button>
                                          </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                <!----------------------------------------------- end send message ---------------------------------------------------------------------------->
                        </div>
                    @endif
                </div>  
            </div>
<!----------------------------------------------------------------end chat ----------------------------------------------- ----------->
              

      </div>
    </div>
</div>

<script>
    const chat_p = document.getElementById('chat-input');
    chat_p.addEventListener('keydown', function (e) {
    const keyCode = e.which || e.keyCode;
    if (keyCode === 13 && !e.shiftKey) { e.preventDefault(); document.getElementById("chat-submit").click();}
    });




    Pusher.logToConsole = true;
    var pusher = new Pusher('a86e590851d8c029f88f', {
    cluster: 'ap2'
    });
    var channel = pusher.subscribe('message-channel');
    channel.bind('Send-message-live-notifications', function(data) {
    var reciever = <?php echo session('USER_ID');  ?> ;
    var count  = <?php echo CountNotifications(); ?> ;
    if(reciever==data.recieverId)
     {  
        document.title = '('+count+') Wiser | CRM Dashboard';
        $('#count-notifications').html(count);
        fetchUsers('chat-list','fetch-users','{{csrf_token()}}');
        playSound ();
     }
    RefreshUserMessages('refresh-user-messages','{{csrf_token()}}','{{$SelectedUserId}}','msg-list')
    });  
</script>
@include('includes.footer');