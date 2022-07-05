@include('includes/sidebar');
@include('includes/navbar');

<div class="content-page">
            <div class="container-fluid">
              
                <table id="datatable" class="table data-table table-striped table-bordered" >
              
<thead>
    <tr><th>Employee Name  </th>
        <th>Date </th>
        <th>Time in </th>
        <th>Total login time</th>
        <th>Time out </th>
   </tr>
</thead>
<tbody>
@foreach($user_atns as $user_atns)
                        <tr>
                            <td>{{$user_atns->atn->name ?? ''}}</td>
                            <td>{{$user_atns->date}}</td>
                            <td>{{$user_atns->created_at}}</td>
                            <td>
                                <?php
                                $seconds = $user_atns->total_login_sec;
                                $output = sprintf('%02d:%02d:%02d', ($seconds/ 3600),($seconds/ 60 % 60), $seconds% 60);
                                echo $output;
                                ?>
                               </td>
                            <td>{{$user_atns->updated_at }}</td>
                        </tr>
                        @endforeach
</table>
</div>
</div>
@include('includes/footer');