@include('includes.sidebar')
@include('includes.navbar')

<div id="remoteModelData" class="modal fade" role="dialog"></div>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="font-weight-bold">LeaveManage</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <h5 class="font-weight-bold">Leaves List</h5>
                                    @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                                    <button class="btn btn-secondary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        Export
                                    </button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="">
                                                <th scope="col">
                                                    S No.
                                                </th>
                                                <th scope="col">
                                                    Name
                                                </th>
                                                <th scope="col">
                                                Casual Leave
                                                </th>
                                                <th scope="col">
                                                Emergency Leave
                                                </th>
                                                <th scope="col">
                                                Sick Leave
                                                </th>
                                                <th scope="col" class="text-right">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0 ?>
                                          @foreach($Users as $Users)
                                            <tr class="white-space-no-wrap">
                                                <td>{{++$no}}</td>
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                      
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">{{$Users->name }}</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                               {{ $Users->department->department_name}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td >{{$Users->leave->CL}}</td>
                                                <td >{{ $Users->leave->EL}}</td>
                                                <td >{{ $Users->leave->SL}}</td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                      
                                                        <a class="Open_modal" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" >
                                                            <input type="hidden" class="empId" value="{{$Users->leave->id}}">
                                                            <input type="hidden" class="empcl" value="{{$Users->leave->CL}}">
                                                            <input type="hidden" class="empel" value="{{$Users->leave->EL}}">
                                                            <input type="hidden" class="empsl" value="{{$Users->leave->SL}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor"   data-toggle="modal" data-target="#exampleModalCenter">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                     @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Start-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Manage Leaves </h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('/update_leave')}}" method="POST" >
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" name="Empid" class="form-control" id="emp_id" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Casual Leave</label><span style="color:red">*</span>
                                            <input type="text" name="cl" class="form-control" id="emp_cl" required>
                                            <span style="color:red" id="dname"></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Emergency Leave</label><span style="color:red">*</span>
                                            <input type="text" name="el" class="form-control" id="emp_el" required>
                                            <span style="color:red" id="dname"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Sick Leave</label><span style="color:red">*</span>
                                            <input type="text" name="sl" class="form-control" id="emp_sl" required>
                                            <span style="color:red" id="dname"></span>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
<!--data pass on modal -->
   <script type="text/javascript">
        $(".Open_modal").click(function () {
          
            var tId = $(this).closest('.Open_modal').find('.empId').val();
            var tcl = $(this).closest('.Open_modal').find('.empcl').val();
            var tel = $(this).closest('.Open_modal').find('.empel').val();
            var tsl = $(this).closest('.Open_modal').find('.empsl').val();
           
        
             document.getElementById("emp_id").value = tId;
             document.getElementById("emp_cl").value = tcl;
             document.getElementById("emp_el").value = tel;
             document.getElementById("emp_sl").value = tsl;
        });
    </script>
    

<!-- Modal End --> 

<!--for modal close in 3 sec -->
<script>
$(document).ready(function(){ 
   $(".alert-success").fadeTo(3000, 600).slideUp(600, function(){
       $(".alert-success").slideUp(600);
     });
})
</script>

@include('includes.footer')