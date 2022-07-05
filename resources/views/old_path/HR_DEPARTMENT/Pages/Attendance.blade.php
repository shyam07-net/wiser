@include('HR_DEPARTMENT/sidebar')
@include('COMMEN/navbar')

<div class="content-page">
            <div class="container-fluid">
              
                <table id="datatable" class="table data-table table-striped table-bordered" >
               <!-- Today Login  : {{ $user_atn }} m -->
<thead>
    <tr>
        <th>Date </th>
        <th>Time in </th>
        <th>Login time </th>
        <th>Status</th>
   </tr>
</thead>
<tbody>

@foreach($user_atns as $user_atns)
                        <tr>
                            <td>{{$user_atns->date}}</td>
                            <td>{{$user_atns->first_login_time}}</td>
                            <td>{{$user_atns->total_login_sec }} sec</td>
                            <td>{{$user_atns->status}} </td>
                        </tr>
                        @endforeach


</table>
          

</div>
</div>


@include('COMMEN/footer')