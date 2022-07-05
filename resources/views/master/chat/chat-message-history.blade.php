<style type="text/css">
#mssg-history ul{
list-style-type: none;
margin: 0;
padding: 0;
}	
#mssg-history ul li{
margin-bottom: 10px;
}
</style>
<div id="mssg-history">
    <ul> 
    	<li><a href="#"><i class="fa fa-circle" aria-hidden="true" style="color:green"></i></a> &nbsp;{{$data->message}}</li>
		@forelse($data->MessageHistory as $list)
         	<li><i class="fa fa-circle" aria-hidden="true" ></i><a href="#"> &nbsp;{{$list->created_at->diffForHumans()}}</a> &nbsp;{{$list->message}}</li>
        @empty
        	
        @endforelse
    </ul>
</div>