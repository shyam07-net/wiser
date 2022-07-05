@include('includes/sidebar');
@include('includes/navbar');
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
           center h4{
                margin-top:100px;
            }
        </style>


        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mb-4 mt-1">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <h4 class="font-weight-bold">Dashboard </h4>
                           
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                           
                            <div class="col-md-12">
                                <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Users</h4>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <a href="#" class="text-muted pl-3" id="dropdownMenuButton-customer"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" stroke="currentColor"
                                                stroke-width="2" aria-hidden="true" focusable="false"
                                                style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <g fill="none" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="1" />
                                                    <circle cx="19" cy="12" r="1" />
                                                    <circle cx="5" cy="12" r="1" />
                                                </g>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-customer">
                                            <a class="dropdown-item" href="#">
                                                <svg class="svg-icon text-secondary" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                Edit
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg class="svg-icon text-secondary" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                View
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg class="svg-icon text-secondary" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                <table class="table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="text-secondary">

                                                <th scope="col">Employee Name </th>
                                                <th scope="col">Department</th>
                                                <th scope="col" class="text-right">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(Emp() as $Emp)
                                            <tr class="white-space-no-wrap">

                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-45 mr-2">
                                                            <img src="../assets/images/user/1.jpg"
                                                                class="img-fluid rounded-circle" alt="image">
                                                        </div>
                                                        <div>{{$Emp->name}}</div>
                                                       
                                                    </div>
                                                    
                                                </td>
                                                <td class="text-left">{{$Emp->department->department_name}}</td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-primary d-flex justify-content-start align-items-center">
                                                        <small><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small> Online/Offline/Away/Metting
                                                    </p>
                                                  
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end align-items-center border-top-table p-3">
                                        <button class="btn btn-secondary btn-sm">See All</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                
                                
                           
                        </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Upcoming Events</h4>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <a href="#" class="text-muted pl-3" id="dropdownMenuButton-event"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" stroke="currentColor"
                                                stroke-width="2" aria-hidden="true" focusable="false"
                                                style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <g fill="none" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="1" />
                                                    <circle cx="19" cy="12" r="1" />
                                                    <circle cx="5" cy="12" r="1" />
                                                </g>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-event">
                                            <a class="dropdown-item" href="#">
                                                <svg class="svg-icon text-secondary" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                Edit
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg class="svg-icon text-secondary" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                View
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg class="svg-icon text-secondary" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <center><h4>Coming Soon</h4></center>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                  
               
                <!-- Page end  -->
            </div>
        </div>
    </div>
    <script>
         
         jQuery(document).ready(function ($) {
            $(".close").click(function () {
                $(".content-page-2").hide();
            });
        });
    </script>
    
    <!-- Wrapper End-->
    @include('includes/footer');