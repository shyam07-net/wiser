@include('HR_DEPARTMENT.sidebar');
@include('COMMEN/navbar')

<div id="remoteModelData" class="modal fade" role="dialog"></div>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="font-weight-bold">Customer</h4>
                    </div>
                    <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex">
                                <form class="mr-3 position-relative">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Search Customer">
                                        <a class="search-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </a>
                                    </div>
                                </form>
                                <button class="btn btn-primary position-relative d-flex align-items-center justify-content-between" data-toggle="modal" data-target="#exampleModalCenter">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Add Employees
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> Add Employees</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('/AllEmployees/store')}}" method="POST" onsubmit="return Validation()" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="type">Employee Name</label><span style="color:red">*</span>
                                        <input type="text" name="name" class="form-control" id="name">
                                        <span style="color:red" id="ename"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Employee Email</label><span style="color:red">*</span>
                                        <input type="email" name="email" class="form-control" id="email">
                                        <span style="color:red" id="em"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Password</label><span style="color:red">*</span>
                                        <input type="text" name="password" class="form-control" id="password">
                                        <span style="color:red" id="pass"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="department">Departments</label>
                                        <select class="form-control" name="department" aria-label="Default select example" id="department">
                                            <option value="">--Select Departments--</option>
                                            @foreach($department as $list)
                                            <option value="{{$list->department_id}}">
                                                {{$list->department_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <span style="color:red" id="depart"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="department">Roles</label>
                                        <select class="form-control" name="role" aria-label="Default select example" id="role">
                                            <option value="">--Select role--</option>
                                            <option value="1">TL</option>
                                             <option value="0">Employee</option>
                                              <option value="2">Admin</option>
                                            
                                        </select>
                                        <span style="color:red" id="drole"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Date of joining</label><span style="color:red">*</span>
                                        <input type="date" name="dateofjoin" class="form-control" id="dateofjoin">
                                        <span style="color:red" id="doj"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Designation</label><span style="color:red">*</span>
                                        <input type="text" name="designation" class="form-control" id="designation">
                                        <span style="color:red" id="desig"></span>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <h5 class="font-weight-bold">Customer List</h5>
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
                                                    Email
                                                </th>
                                                <th scope="col">
                                                    Department
                                                </th>
                                                <th scope="col">
                                                    Phone
                                                </th>
                                                <th scope="col" class="text-right">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $list)
                                            <tr class="white-space-no-wrap">
                                                <td>{{$loop->iteration}}</td>
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" src="images/user/1.jpg">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">{{$list->name}}</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                                Developer
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{$list->email}}</td>
                                                <td>
                                                    {{$list->department->department_name}}
                                                </td>
                                                <td>
                                                    +1 (021) 145-2256
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="customer-view.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="customer-edit.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
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
<script>
    function Validation() {

        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var department = document.getElementById('department').value;
        var role = document.getElementById('role').value;
         var dateofjoin = document.getElementById('dateofjoin').value;
          var designation = document.getElementById('designation').value;

        if (name == "") {
            document.getElementById('ename').innerHTML = "Please enter name";
            return false;
        } else {
            document.getElementById('ename').innerHTML = "";
        }

        if (email == "") {
            document.getElementById('em').innerHTML = "Please enter email";
            return false;
        } else {
            document.getElementById('em').innerHTML = "";
        }

        if (password == "") {
            document.getElementById('pass').innerHTML = "Please enter password";
            return false;
        } else {
            document.getElementById('pass').innerHTML = "";
        }

        if (department == "") {
            document.getElementById('depart').innerHTML = "Please select department";
            return false;
        } else {
            document.getElementById('depart').innerHTML = "";
        }
         if (role == "") {
            document.getElementById('drole').innerHTML = "Please select role";
            return false;
        } else {
            document.getElementById('drole').innerHTML = "";
        }
        
         if (dateofjoin == "") {
            document.getElementById('doj').innerHTML = "Please select date of joining";
            return false;
        } else {
            document.getElementById('doj').innerHTML = "";
        }
        
         if (designation == "") {
            document.getElementById('desig').innerHTML = "Please select designation";
            return false;
        } else {
            document.getElementById('desig').innerHTML = "";
        }
    }
</script>

@include('COMMEN/footer');