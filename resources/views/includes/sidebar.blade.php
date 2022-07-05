<!doctype html>
<html lang="en">
<head>
    <style>
       .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.svg-icon{
 
}
    </style>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> ({{CountNotifications()}}) Wiser | CRM Dashboard</title>

    <!-- Favicon -->
    <!--<link rel="shortcut icon" href="https://templates.iqonic.design/datum/html/assets/images/favicon.ico" />-->
    
    <link rel="stylesheet" href="{{asset('assets/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/backende209.css?v=1.0.0')}}">
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <div class="iq-sidebar  sidebar-default  ">
            <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
                <a href="/" class="header-logo">
                    <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                    <img src="../assets/images/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img"
                        alt="logo">
                    <span>Wiser</span>  
                </a>
                <div class="side-menu-bt-sidebar-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="side-menu">
  

 <li class="sidebar-layout">
                            <a href="#app3" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                <i>
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
</svg>
                                </i>
                                <span class="ml-2"id="timer" title="Total login time">
                                   
</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"
                                    width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul id="app3" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" sidebar-layout" class="tab">
                                    <a href="" class="svg-icon">
                                        <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                            </svg>
                                        </i><span class="" id="123"  data-toggle="tooltip" data-placement="bottom" title=" On desk time "> On desk time</span>
                                    </a>
                                </li>
                         
                                <li class=" sidebar-layout" class="tab">
                                    <a href="" class="svg-icon">
                                        <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                            </svg>
                                        </i><span class=""  id="tim"  data-toggle="tooltip" data-placement="bottom" title="Total break" >Total break</span>
                                    </a>
                                </li>
                                
                                 <li class=" sidebar-layout" class="tab-2">
                                    <a href="" class="svg-icon">
                                        <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                            </svg>
                                        </i><span class="" id="time"  data-toggle="tooltip" data-placement="bottom" title=" Current break time "> Current break time</span>
                                    </a>
                                </li>
                            </ul>
                        </li> 


  
                      
                        <li class="px-3 pt-3 pb-2 ">
                            <span class="text-uppercase small font-weight-bold">Application</span>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="{{url('Attendance')}}" class="svg-icon ">
                                <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                                </i>
                                <span class="ml-2">All Attendance</span>
                            </a>
                        </li>
                        <li class="sidebar-layout">
                            <a href="#app2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </i>
                                <span class="ml-2">Employee</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"
                                    width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul id="app2" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" sidebar-layout">
                                    <a href="{{url('/Employeeleave')}}" class="svg-icon">
                                        <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                            </svg>
                                        </i><span class="">Leaves</span>
                                    </a>
                                </li>
                                @if((App\Models\users::where('id',session('USER_ID'))->first()->Role) ==1 )
                                <li class=" sidebar-layout">
                                    <a href="{{url('/Employeelist')}}" class="svg-icon">
                                        <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                            </svg>
                                        </i><span class="">Employee Leaves</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li> 
                   <?php 
                        $empData = App\Models\users::where('id',session('USER_ID'))->first();
                        $Dept_IDname =$empData->department->department_name;
                        ?>
                       @if( $Dept_IDname == "ADMIN" || $Dept_IDname == "HR_DEPARTMENT" )
                        <li class="sidebar-layout">
                            <a href="#app3" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </i>
                                <span class="ml-2"> Department</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"
                                    width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul id="app3" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" sidebar-layout">
                                    <a href="{{url('/Employeelist')}}" class="svg-icon">
                                        <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                            </svg>
                                        </i><span class="">All Employee Leaves</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="{{url('/AllEmployees')}}" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                            </svg>
                                        </i><span class="">All Employees</span>
                                    </a>
                                </li>
                                 <li class=" sidebar-layout">
                                    <a href="{{url('/department')}}" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </i><span class="">Departments</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="{{url('/LeaveManage')}}" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </i><span class="">Leave Manage</span>
                                    </a>
                                </li>
                              
                            </ul>
                        </li>
                        
                         @endif
                        
                         <li class=" sidebar-layout">
                            <a href="{{Route('Employee.Showtask')}}" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                    </svg>
                                </i><span class="ml-2">Tasks</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="{{Route('Show.chat')}}" class="svg-icon">
                                <i class="fa fa-comment">
                               
                                </i><span class="ml-2">#Chat</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="{{route('all.users')}}" class="svg-icon">
                                <i class="fa fa-user">
                               
                                </i><span class="ml-2">#Users</span>
                            </a>
                        </li>
                     
                </nav>
                <div class="pt-5 pb-5"></div>
            </div>
        </div>
