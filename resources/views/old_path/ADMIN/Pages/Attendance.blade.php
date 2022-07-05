@include('ADMIN/sidebar')
@include('COMMEN/navbar')

<div class="content-page">
            <div class="container-fluid">
              
                <table id="datatable" class="table data-table table-striped table-bordered" >
              
<thead>
    <tr><th>user id  </th>
        <th>Date </th>
        <th>Time in </th>
        <th>Time out </th>
        <th>Login time </th>
        <th>Status</th>
   </tr>
</thead>
<tbody>

@foreach($user_atns as $user_atns)
                        <tr>
                            <td>{{$user_atns->atn->name ?? ''}}</td>
                            <td>{{$user_atns->date}}</td>
                            <td>{{$user_atns->created_at}}</td>
                            <td>{{$user_atns->total_login_sec}}</td>
                            <td>{{$user_atns->updated_at }}</td>
                            <td>{{$user_atns->status}} </td>
                        </tr>
                        @endforeach


</table>
          

</div>
</div>


@include('COMMEN/footer')