<style>
    a.read {
        color:red !important;
        font-size:15px;
        font-weight:600;
    }
</style>
    @forelse($Notifications as $notifications)
            <li class="dropdown-item-1 float-none p-3">
                <div class="list-item d-flex justify-content-start align-items-start">
                    <div class="avatar">
                        <div class="avatar-img avatar-success avatar-20"><span><img class="avatar is-squared rounded-circle"
                                                                                src="../assets/images/user/2.jpg"
                                                                             alt="2.jpg"></span>
                        </div>
                    </div>
                    <div class="list-style-detail ml-2 mr-2">
                        <?php $name = \App\Models\users::find($notifications->data['sender']); ?>
                        @if($notifications->data['url']=='chat')
                            <a href="{{Route('notification.tochat',['id'=>$notifications->data['sender']])}}"> <h6 class="font-weight-bold">{{ $notifications->data['title'] ?? ''}}</h6></a>
                        @else
                            <a href="{{Route($notifications->data['url'])}}"> <h6 class="font-weight-bold">{{ $notifications->data['title'] ?? ''}}</h6></a>
                        @endif
                        <p class="m-0"><small class="text-secondary">{{$notifications->data['message'] ?? ''}}{{ $name->name ?? ''}}</small>.</br>
                        <a href="javascript:void(0);" class="read" onclick="ReadNotification('read-notification','{{csrf_token()}}','{{$notifications->id}}')">  Mark As Read</a></p>
                        <p class="m-0"><small class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg"class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24"stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>{{$notifications->created_at->diffForHumans() ?? ''}}</small>
                        </p>
                    </div>
                </div>
            </li>

    @empty
      
    @endforelse
    @if(count($ReadNotifications)>0)
    <li class="dropdown-item-1 float-none p-3">
        <div class="list-item d-flex justify-content-start align-items-start">Read Notifications
        </div>
    </li>
    @endif
    @forelse($ReadNotifications as $ReadNotifications)
     <li class="dropdown-item-1 float-none p-3">
                <div class="list-item d-flex justify-content-start align-items-start">
                    <div class="avatar">
                        <div class="avatar-img avatar-success avatar-20"><span><img class="avatar is-squared rounded-circle" src="../assets/images/user/2.jpg" alt="2.jpg"></span>
                        </div>
                    </div>
                    <div class="list-style-detail ml-2 mr-2">
                        <?php $name = \App\Models\users::find($ReadNotifications->data['sender']); ?>
                           @if($ReadNotifications->data['url']=='chat')
                            <a href="{{Route('notification.tochat',['id'=>$ReadNotifications->data['sender']])}}"> <h6 class="font-weight-bold">{{ $ReadNotifications->data['title'] ?? ''}}</h6></a>
                        @else
                            <a href="{{Route($ReadNotifications->data['url'])}}"> <h6 class="read">{{ $notifications->data['title'] ?? ''}}</h6></a>
                        @endif
                        <p class="m-0"><small class="text-secondary">{{$ReadNotifications->data['message'] ?? ''}}{{ $name->name ?? ''}}</small>.</p>
                        <p class="m-0"><small class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg"class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24"stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>{{$ReadNotifications->created_at->diffForHumans() ?? ''}}</small>
                        </p>
                    </div>
                </div>
            </li>
    @empty
        @if(count($Notifications)<=0)
           <li class="dropdown-item-1 float-none p-3">
                <div class="list-item d-flex justify-content-start align-items-start">You Do Not Have Any Notification</div>
           </li>
        @endif
    @endforelse