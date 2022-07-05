@if(!is_null($AllChatMessages))
                @foreach($AllChatMessages as $list)
                    @if($list->SenderId== session('USER_ID'))
                        @if(!is_null($list->message))
                            <div class="single-msg user">
                                <div class="triangle-topright single-msg-shap"></div>
                                <div class="single-msg-content user">
                                        <div class="msg-detail">
                                            <span> @nl2br($list->message) 
                                                    @if(!is_null($list->edited_at)) 
                                                        <a style="color: white;" data-toggle="tooltip" data-placement="top" title="{{$list->edited_at}}" data-html="true" onclick="GetMssgsHstry('{{csrf_token()}}','{{$list->id}}','get-msg-hist')"><em>(edited)</em></a>
                                                    @endif </span>&nbsp;&nbsp;
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
                                                <span> <em>This message was deleted </em> </span>
                                                <span style="padding-left:20px;font-size: 11px">{{$list->created_at->diffForhumans()}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                        


                            <div id="c-media" style="margin-left: 80%;padding-bottom: 10px;">
                                @if($list->files==1)
                                    <br/>
                                    @foreach($list->MediaFiles as $media)
                                        @if(!is_null($media->chat_file_name))
                                            {{getMedia($media->id)}}<br/><span>{{substr($media->chat_file_name,5)}}&nbsp;&nbsp; <a href="{{URL::asset('file-manager/media-files/Chat_media/'.$media->chat_file_name)}}" download="{{substr($media->chat_file_name,5)}}"  class="download-chat-file"><i class="fa fa-download" aria-hidden="true"></i></a></span>&nbsp;<a href="javascript:void(0)" id="dlt-chat-media" onclick="deleChatMedia('delete-chat-media','{{csrf_token()}}','{{$media->id}}','{{$SelectedUserId}}')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                                        <span><em>This message was deleted </em> </span>
                                    </div>
                                    <div class="msg-action"><span>{{$list->created_at->diffForhumans()}}</span> </div>
                                </div>
                            </div>
                        @endif
                            <div id="c-media" style="margin-right: 80%;padding-bottom: 10px;">
                                @if($list->files==1)
                                    <br/>
                                    @foreach($list->MediaFiles as $media)
                                        @if(!is_null($media->chat_file_name))
                                            {{getMedia($media->id)}}
                                                <br/>
                                                <span>{{substr($media->chat_file_name,5)}}&nbsp;&nbsp; <a href="{{URL::asset('file-manager/media-files/Chat_media/'.$media->chat_file_name)}}" download="{{substr($media->chat_file_name,5)}}" class="download-chat-file"><i class="fa fa-download" aria-hidden="true"></i></a>
                                                </span>
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