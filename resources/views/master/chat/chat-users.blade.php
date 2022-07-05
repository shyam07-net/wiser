 @if(!is_null($users))
                @foreach($users as $list)
                <a href="javascript:void(0);" onclick="FetchUserMessages('fetch-user-messages','{{csrf_token()}}','{{$list->id}}','user-content-1','cu')">
                <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-1">
                     <div class="img-container">
                        <div class="avatar avatar-60">
                            @if(!is_null(ProfileImage($list->id)))
                            <img src="{{asset('file-manager/media-files/Profile_Pictures/'.ProfileImage($list->id))}}" alt="users" class="img-fluid avatar-borderd avatar-rounded">
                            @else
                             <img src="{{asset('file-manager/media-files/Profile_Pictures/profile.jpg')}}" alt="users" class="img-fluid avatar-borderd avatar-rounded">
                            @endif
                            <span class="avatar-status">
                                <i class="ri-checkbox-blank-circle-fill text-success"></i>
                            </span>
                        </div>
                    </div>
                    <div class="simple-item-body">
                        <div class="simple-item-title">
                           
                                <h5 class="title-text">{{GetUserProfileName($list->id) ?? ''}}</h5>
                                <div class="simple-item-time"> <span>{{GetRecentChatTime($list->id,'')}}</span> </div>
                            
                        </div>
                        <div class="simple-item-content">
                        @if(GetUserLastMessage($list->id,'check')=='true')
                            <span class="simple-item-text short">{{ GetUserLastMessage($list->id,'')}}</span>
                        @else
                            <span class="simple-item-text short " style="color:red">{{ GetUserLastMessage($list->id)}}</span>
                        @endif
                        <div class="dropdown">
                            <button class="btn btn-link " type="button" id="chat-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-caret-down"></i>
                            </button>
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
                &nbsp;&nbsp; &nbsp;&nbsp;You Have not any conversation
               </li>         
            @endif