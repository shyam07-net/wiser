
<style>
   
  .sidenav2 {
   height: 100%;
  width: 3%;
  position: fixed;
  /* z-index: 1; */
  top: 0;
  right: 0;
  background-color: #0c2556;
  /* overflow-x: hidden; */
  transition: 0.5s;
 
}
.toggle2 {
    font-size: 30px;
    cursor: pointer;
    position: relative;
    /*left: 1390px;*/
    /*top:-116px;*/
    float:right;
    margin-right:80px;
    display:block;
       
    text-align: center;
    color: #8f9fbc;
 
    transition: all .6s ease-in-out;

}
.sidenav2 a {
  padding: 8px 8px 8px;
  text-decoration: none;
  font-size: 30px !important;
  color: #818181;

  transition: 0.3s;
  justify-content:center;
  margin-right: -8px;

}

.nav-icon{
 display:block;
}

.sidenav2 a:hover {
  color: #f1f1f1;
}

.sidenav2 .closebtn {
  position: absolute;
  top: 0;
  right: 30px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav2 {padding-top: 15px;}
  .sidenav2 a {font-size: 18px;}
}
  
  
  
  
  
  
   .same{
       position:absolute;
   }
  
   


 .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 126px;
    background-color: 	#F0FFF0;
    width: 100%;
}



.box2 ul {
    list-style: none;
    display: flex;
    /* justify-content: space-evenly; */
    align-items: center;

}

.box3 {
    width: 20%;
    height: 100px;
    display: flex;
    justify-content: end;
    align-items: center;
    margin-right: 33px;
    position: absolute;
    right: 30px;

    top: 39px;
}

.content1 {
    display: flex;
    justify-content: space-evenly;
    height: 100px;
    align-items: center;
}
i.fa-solid.fa-video {
    font-size: 20px;
    
}
button.Loc {
    border: none;
    padding: 12px;
    border-radius: 93px;
    font-size: 12px;
}
button.Loc :hover{
    background-color: aliceblue;
    color: black;
    /* width: 100%;  */
    padding: 10px;
}
h3{
    color: green!important;
}
.fa-solid{
    
    font-size: 20px;
}
i.fa-solid.fa-location-crosshairs {
    color: red;
    width: 100%;
    height: 50%;
    padding: 5px;
}
.btnL:hover{
    
    color: black;
    width: 100%;
    padding: 10px;
    border: 2px solid red;
}
button.btnL {

    padding: 10px;
    border-radius: 28px;
    margin-top:180px;
    outline:none;
    background:white;
    border:1px solid grey;
    font-family: 'Poppins', sans-serif;
    
}

.btnL:hover {
 
   border: 1px solid #e8be46;
}

button.btn2{
    margin-left:180px;
        padding: 10px;
    border-radius: 28px;
    margin-top:50px;
    background:white;
     border:1px solid grey;
     font-family: 'Poppins', sans-serif;
   
}

.btn2:hover{
    border: 1px solid #003366;
}

button.btn3{
    margin-left:20px;
        padding: 10px;
    border-radius: 28px;
    background:white;
      border:1px solid grey;
     font-family: 'Poppins', sans-serif; 
     
    
   
   
}

.btn3:hover{
     border: 1px solid red ;
}
button.BtnL {
    border: none;
    border-radius: 27px;
    padding: 12px;
    border: 2px solid red;
    margin-right: 10px;
    margin-top:40px;
    font-family: 'Poppins', sans-serif;
}
.close {
    padding: 1px;

    top: 0;
    right: 5px;
    color:black;
}
select {
    border: none;
    background: none;
}

.content-page-2 {
    overflow: hidden;
    /*margin-left: 260px;*/
    /*padding: 60px 15px 0;*/
    /*min-height: 10vh;*/
    transition: all .3s ease-in-out;
}




.nav .nav-tabs ul li {
    padding:20px;
}


.nav .nav-tabs{
     font-family: 'Poppins', sans-serif !important;
     
}

/*.nav .nav-tabs a{*/
/*    color:black;*/
/*     font-family: 'Poppins', sans-serif !important;*/
/*     padding:20px;*/
/*}*/

label{
     font-family: 'Poppins', sans-serif !important;
    
   
}



.option-d{
    
    display:flex;
}
 

  
  .row-2 {
    display: flex;
    justify-content:center;
    align-items:center;
  
  }
  
   .fa-bell-concierge{
      color:#e8be46;
      align-items:center;
  }
  
  .fa-handshake-o{
      color:#003366 ;
  }
  
  .fa-bullseye{
      color:red;
  }


fieldset {
display: none
}
fieldset.show {
display: block
}
select:focus,
input:focus {
-moz-box-shadow: none !important;
-webkit-box-shadow: none !important;
box-shadow: none !important;

outline-width: 0 !important;

}
button:focus {
-moz-box-shadow: none !important;
-webkit-box-shadow: none !important;
box-shadow: none !important;
outline-width: 0
}
.tabs {
margin: 2px 5px 0px 5px;
padding-bottom: 10px;
cursor: pointer;
display:flex;
}
.tabs:hover,
.tabs.active {
border-bottom: 1px solid #2196F3
}
a:hover {
text-decoration: none;
color: #1565C0
}
.box {
margin-bottom: 10px;
border-radius: 5px;
padding: 10px
}
/*.modal-backdrop {*/
/*background-color: #64B5F6*/
/*}*/
.line {
background-color: #CFD8DC;
height: 1px;
width: 100%
}
@media screen and (max-width: 768px) {
.tabs h6 {
font-size: 12px
}
}

.come-from-modal.right .modal-dialog {
    position: fixed;
    /* margin: auto; */
    /* width: 320px; */
    height: 100%;
    padding-top: 0px;
    -webkit-transform: translate3d(0%, 0, 0);
    -ms-transform: translate3d(0%, 0, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0);
}


.come-from-modal.right .modal-content {
    /* height: 100%; */
    overflow-y: auto;
    border-radius: 0px;
   
    height: 100vh;
    width:500px;

}


.come-from-modal.right .modal-body {
    padding: 15px 15px 80px;
}
.come-from-modal.right.fade .modal-dialog {
    right: 0px;
    -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
    -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
    -o-transition: opacity 0.3s linear, right 0.3s ease-out;
    transition: opacity 0.3s linear, right 0.3s ease-out;
}


.Wrap-Social {
 /*   background: white;*/
    display: -webkit-inline-box;
 /*   width: 100%;*/
	/* background-color: black; */
	/*margin-top: -14px;*/

	position:relative;
}
input#exampleFormControlInput1 {
  
	border: none;
}
input#Datelog {
    margin: auto -72px;
	color: #007500;
    font-size: 14px;
   
}
select#Add_one {
    color: #007500;
    font-size: 12px;
 
    padding: 10px;
}
select#Add_one {
    margin: auto -52px;
}
label.form-label {
    margin: -25px;
	background:white;
}
button.btn.btn-Primary {
    background: green;
    color: white;
    font-size: 15px;
    padding: 5px 20px;
}
.Fa-Top{
	color: #029f5b;

	/* width: 50%; */
	letter-spacing: 5px;
	
  
    font-size: 20px;
}

.Wrapper-para {
    margin-left: 27px;
    color:black;
    font-size: 14px;
 
}
.Wrapper-para1 {
    margin-left: -6px;
    color: black;
    font-size: 14px;
   
}
.panel-login>.panel-heading {
	color: #00415d;
	border-color: #fff;
	text-align:center;
	padding-top: 15px;
	padding-bottom: 15px;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
a#register-form-link {
    color: green;
    font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
form#login-form {
    background: aliceblue;
    /* color: black; */
    margin: auto 15px;
    padding: 17px 10px;
}
form#register-form {
    background: aliceblue;
    margin: auto 18px;
    padding: 30px 10px;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.tabs{
   padding:10px; 
}

.input-feild{
    /*height: 46px;*/
    /*line-height: 45px;*/
    background: #fff;
   
    font-size: 14px;
    color: #324253;
    border-radius: 5px;
    box-shadow: none;
        width: 380px;
     margin-left: 30px; 
    /*display: block;*/
}

.modal-header-2 {
    align-items: flex-start;
    justify-content: space-between;
    padding: 1rem;

    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
     font-family: 'Poppins', sans-serif;


}

.modal-header-3 {
    align-items: flex-start;
    /* justify-content: space-between; */
   padding-left:10px;
    border-bottom: 1px solid #f1f1f1;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
  
     font-family: 'Poppins', sans-serif;
}

  label {
            display: inline-block;
            position: relative;
         
           
        }

        input.picker {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            border: 0;
            overflow: hidden;
            cursor: pointer;
        }

        /*input::-webkit-calendar-picker-indicator {*/
        /*    position: absolute;*/
        /*    top: -150%;*/
        /*    left: -150%;*/
        /*    width: 300%;*/
        /*    height: 300%;*/
        /*    cursor: pointer;*/
        /*}*/

        input:hover+button {
            background-color: silver;
        }
        
        
   
   #Add_one{
       margin-left:-160px;
   }
   
   .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  /*padding: 12px 16px;*/
  text-decoration: none;
  display: block;
}



.show {display: block;}
        
 
  
/*input{*/
/*   margin-left:-100px;*/
/*}*/
  
   #brow_div input{
          margin-left: -80px;
    width: 100%;
   }
   
   #brow datalist{
       background-color:white;
   }



.fa-clock{
  color:green!important; 
}


.end a{
   font-size:15px;
   color:#213446;
   padding:30px;


}

.end{
    height:40px;
    text-align: center;
    padding: 10px;
}

select#selUser{
    margin-left:-90px;
}

      
</style>

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link rel="stylesheet" href="{{asset('assets/css/bootstrap-side-modals.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="side-menu-bt-sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </div>
                    

                  <div class="row" >
                 
                </div> 
                  
               <fieldset id="timer-container">
   
    <div id="button-container">
   
   
   
    </div>
    </fieldset>
    
       


 
                    <div class="d-flex align-items-center">
                        <!--<div class="change-mode">-->
                        <!--    <div class="custom-control custom-switch custom-switch-icon custom-control-inline">-->
                        <!--        <div class="custom-switch-inner">-->
                        <!--            <p class="mb-0"> </p>-->
                        <!--            <input type="checkbox" class="custom-control-input" id="dark-mode"-->
                        <!--                data-active="true">-->
                        <!--            <label class="custom-control-label" for="dark-mode" data-mode="toggle">-->
                        <!--                <span class="switch-icon-right">-->
                        <!--                    <svg xmlns="http://www.w3.org/2000/svg" id="h-moon" height="20" width="20"-->
                        <!--                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                        <!--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
                        <!--                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />-->
                        <!--                    </svg>-->
                        <!--                </span>-->
                        <!--                <span class="switch-icon-left">-->
                        <!--                    <svg xmlns="http://www.w3.org/2000/svg" id="h-sun" height="20" width="20"-->
                        <!--                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                        <!--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
                        <!--                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />-->
                        <!--                    </svg>-->
                        <!--                </span>-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
              
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                                        <!-- reminder icon start -->
                        <!--<li class="nav-item  nav-icon" data-toggle="modal" data-target="#exampleModalScrollable">-->
                        <!--    <a class="iq-icons-list" href="#" data-toggle="tooltip" data-placement="top"-->
                        <!--        title="Reminder">-->
                        <!--        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-secondary" fill="none"-->
                        <!--            viewBox="0 0 24 24" stroke="currentColor">-->
                        <!--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
                        <!--                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />-->
                        <!--        </svg>-->
                        <!--        <span class="bg-primary"></span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        

                        <!-- reminder modal code in below in this same page  -->
                        <!-- reminder icon end -->
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="notification-dropdown"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="fetchNotifications('{{@csrf_token()}}','notification-ul');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            class="h-6 w-6 text-secondary" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                        </svg><span class="badge badge-danger" id="count-notifications">{{CountNotifications()}}</span>
                                        <span class="bg-primary"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="notification-dropdown">
                                        <div class="card shadow-none m-0 border-0">
                                            <div class="p-3 card-header-border">
                                                <h6 class="text-center">
                                                    Notifications 
                                                </h6>
                                            </div>
                                           <div class="card-body card-header-border p-0 card-body-list" style="max-height: 400px;">
                                                 <div class="card-body card-header-border p-0 card-body-list" style="max-height: 300px;overflow-y: auto;">
                                                    <ul class="dropdown-menu-1 overflow-auto list-style-1 mb-0" id="notification-ul"></ul> </div>
                                                    <div class="end">
                                                <a style="" onclick="ReadAllNotification('read-all-notification','{{csrf_token()}}')">Mark all as read</a>
                                                <a href="" >See All</a>
                                                </div>
                                            </div>
                                            <!--<div class="card-footer text-muted p-3">-->
                                            <!--    <p class="mb-0 text-primary text-center font-weight-bold">Show all-->
                                            <!--        notifications</p>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </li>
                              
                                <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <svg class="svg-icon text-secondary" id="h-suns" height="25" width="25"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu"
                                        aria-labelledby="dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="text search-input font-size-12"
                                                    placeholder="type here to search...">
                                                <a href="#" class="search-link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="" width="20"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#..." class="nav-item nav-icon dropdown-toggle pr-0 search-toggle"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                            <img src="../file-manager/media-files/Profile_Pictures/{{ProfileImage(session('USER_ID')) ?? 'profile.jpg'}}" data-toggle="tooltip" data-placement="top" title="{{session('USER_NAME')}}" class="img-fluid avatar-rounded"
                                                alt="user">
                                        <span class="mb-0 ml-2 user-name">
</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-item d-flex svg-icon">
                                            <svg class="svg-icon mr-0 text-secondary" id="h-01-p" width="20"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <a href="{{route('Employee.view.profile')}}">My
                                                Profile</a>
                                        </li>
                                       
                                        
                                        <!--<li class="dropdown-item d-flex svg-icon">-->
                                        <!--    <svg class="svg-icon mr-0 text-secondary" id="h-04-p" width="20"-->
                                        <!--        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"-->
                                        <!--        stroke="currentColor">-->
                                        <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
                                        <!--            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />-->
                                        <!--    </svg>-->
                                        <!--    <a-->
                                        <!--        href="#">Privacy Settings</a>-->
                                        <!--</li>-->
                                        <li class="dropdown-item  d-flex svg-icon border-top">
                                            <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            <a href="{{url('logout')}}">Logout</a>
                                        </li>
                                    </ul>
                            
                            </ul>
                        </div>
    
  
      
     <span  class="toggle2" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <div id="mySidenav3" class="sidenav2" onclick="fixed()">
            <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
            <a href="#"><li class="nav-item  nav-icon" data-toggle="modal" data-target="#exampleModalScrollable">
                            <a class="iq-icons-list" href="#" data-toggle="tooltip" data-placement="top"
                                title="Reminder">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-secondary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <!--<i class="fa-solid fa-calculator"></i>-->
                                <span class="bg-primary"></span>
                            </a>
                        
        <!--<a href="#"><i class="fa-solid fa-calculator"></i></a>-->
        </li> </a>

            <div class="change-mode">
                            <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                                <div class="custom-switch-inner">
                                    <p class="mb-0"> </p>
                                    <input type="checkbox" class="custom-control-input" id="dark-mode"
                                        data-active="true">
                                    <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                        <!--<span class="switch-icon-right">-->
                                        <!--    <svg xmlns="http://www.w3.org/2000/svg" id="h-moon" height="20" width="20"-->
                                        <!--        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                                        <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
                                        <!--            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />-->
                                        <!--    </svg>-->
                                        <!--</span>-->
                                        <span class="switch-icon-left">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="h-sun" height="20" width="20"
                                                class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
          
          </div>
     
                    </div>
                </nav>
            </div>
        </div>
        
    
        
 

  <div class="content-page-2">
   <div class="container-fluid">
   <div class="row-2">
   <div class="box2">
            <ul>
                <!--<h3><li>Status:</li></h3>-->

                <!--<li><button class="btnL"><i class="fa-solid fa-location-crosshairs"></i></li>-->


                     <li id="Resume" class="same" >
                    <button class="btnL" ><span><i class="fa-solid fa-bell-concierge"></i></span>
                  Resume
                    </button>
                    </li>

                      <li id="submit1" class="same">
                    <button class="btnL"  ><span><i class="fa-solid fa-bell-concierge"></i></span>
                  Go Away
                    </button>
                    </li>
                     <!-- <div class="dropdown">
                    <button class="btn btn-outline-success mt-2 btn-sm" data-toggle="modal" data-target=".login-register-form" >In Metting</button>
                    </div> -->

                    </ul>




                   <!--  <li id="submit2" class="same2">-->
                   <!--<button class="btnL" data-toggle="modal" data-target=".login-register-form" >In Metting</button>-->
                   <!-- </li>-->

            <button class="btn2" id="meat" data-toggle="modal" data-target=".login-register-form" ><span><i class="fa-solid fa-handshake-o"></i></span>
                    Meeting
                </button>
                
                
                
 <button class="btn3"   id="Engaged" ><span><i class="fa-solid fa-bullseye"></i></span>
                At Work 
                </button>
        </div>
        <div class="box3">
            <!--<button class="BtnL">Check Out</button>-->
            <!--<span class="close"><i class="fa-solid fa-xmark"></i></span>-->
        </div>
   </div>
   </div>
</div>

    



               <!-- modal start -->
  <div class="modal fade login-register-form" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#login-form"> INTERNAL  <span class="glyphicon glyphicon-user"></span></a></li>
                                            <li><a data-toggle="tab" href="#registration-form"> EXTERNAL  <span class="glyphicon glyphicon-pencil"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tab-content">
                                            <div id="login-form" class="tab-pane in active">
                                                <form action="metting" method="POST">
                                                    @csrf
                                                     <div class="form-group">
                                                        <label for="meeting_time">Topic :</label>
                                                         <input class="form-control" type="text" name="topic" placeholder="Meeting About" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="meeting_time">Meeting Time :</label>
                                                         <input class="form-control" type="datetime-local" name="meeting_time" required>
                                                    </div>
                                                    <div class="form-group">
                                                       
                                                        <label for="toemp">Meeting With :</label>
                                                       
                                                        <select class="form-control" name="toemp[]" id="select-state" required multiple>
                                                         @foreach(emp() as $emp )
                                                        <option value="{{$emp->id}}" class="shadow p-1 mb-2 bg-white rounded" >{{$emp->name}}</option>
                                                         @endforeach
                                                        </select>
                                                    </div>

                                                    <button type="submit" class="btn btn-outline-primary btn-sm">CREATE</button>
                                                </form>
                                            </div>
                                            <div id="registration-form" class="tab-pane fade">
                                                <form action="metting_out" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="name">Organization:</label>
                                                        <input type="text" class="form-control" id="name" placeholder="Enter organization name" name="organization" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="newemail">Location :</label>
                                                        <input type="test" class="form-control" id="newemail" placeholder="Enter Location" name="Location" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="newpwd"> Schedule Time :</label>
                                                        <input type="datetime-local" class="form-control" id="newpwd" placeholder=" Enter Schedule Time" name="ScheduleTime" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-outline-primary btn-sm">Submit </button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
<!--                                    <div class="modal-footer">-->
<!--                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>

<!-- modal End -->
<!-- reminder modal start  -->


 <div class="modal fade  come-from-modal right" id="exampleModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle">
       <div role="document" class="modal-dialog">
<div class="modal-content">
 <div class="modal-header-2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Reminders</h4>
<!--                </div>   -->
<div class="modal-header-3 row d-flex ">
<!--<div class="option-d">-->
<div class="tabs" id="tab01">
<h6 class="text-muted">For Me</h6>
</div>
<div class="tabs active" id="tab02">
<h6 class="font-weight-bold">Assigned to others</h6>
</div>
</div>
<div class="line"></div>
<form method="post" action='{{url("/AddReminder")}}'>
    @csrf
    
    
    
    </br>
  



<feildset class="Wrap-Social">
 <div class="Wrap-input">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label"></label>
                                                        <input type="text" class="input-feild" name="Reminder_name"
                                                            id="exampleFormControlInput1" placeholder="Set a Reminder" required>
                                                    </div>
                                                     
                                                    <div class="Fa-Top">
                                                        <!--<i class="fa-solid fa-clock" type="datetime-local" onclick="show_timelog();">-->
                                                        
        
                                                        <!--</i>-->
                                                           <label class="clock">
        <input class="picker" type="datetime-local"name="Reminder_Date_Time" required >
        <!--<button id="calendar_text">-->
        <i class="fa-solid fa-clock"></i> 
        <!--</button>-->
    </label>
                                                      
  <!--<i class="fa-solid fa-at" onclick="show_select()"></i>-->
 
   
  
  

  
<!--<div id="brow_div">-->
<!--<input list="brow">-->
<!--<datalist id="brow" >-->
<!--    @foreach(Emp() as $Emp)-->
<!--  <option value="{{ $Emp->id}}">{{ $Emp->name}}</option>-->
<!-- @endforeach-->
<!--</datalist>-->
<!--</div>-->

    <a onclick="MyFunction()" ><i class="fa-solid fa-at" ></i></a>
 <input type="submit" name="set" class="btn btn-success btn-sm" value="Set">
        <select style="display: none;" id='selUser'>
        <option value='0'>Select Member</option>
        <option value='1'>Akshit Seth</option>
        <option value='2'>Rajeev </option>
        <option value='3'>Anil Singh</option>
        <option value='4'>Vishal Sahu</option>
        <option value='5'>Mayank Patidar</option>
        <option value='6'>Vijay Mourya</option>
        <option value='7'>Rajeev</option>
    </select>
  
  
  
  


 <!--<input type="text" id="Datelog" name="birthdaytime"-->
 <!--                                                           style="display: none">-->
 <!--                    <div id="Add_one" class="dropdown-content">-->
                         
 <!--   <select>-->
 <!--   <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">-->
 <!--    @foreach(Emp() as $Emp )-->
 <!--                      <option id="{{$Emp->name}}"  value='{{$Emp->id}}'>{{$Emp->name}} </option>-->
 <!--                       @endforeach-->
 <!--                        </select>-->
 <!-- </div>-->
 
 

  

                                                    </div>
                                                    </feildset>
                                                    </form>


</div>
 
<div class="line"></div>



<div class="modal-body p-0">
  
      <fieldset id="tab011">
 @foreach(reminders() as $reminders)
             {{$reminders->Reminder_name}}</br>{{$reminders->Reminder_Date_Time}}
               @endforeach

</fieldset>                             
      


<fieldset  id="tab021">

 @foreach(reminders_as() as $reminders_as)
             {{$reminders_as->Reminder_name}}</br>{{$reminders_as->Reminder_Date_Time}}
               @endforeach
               
               
          
</fieldset>






</div>
<div class="line"></div>
<div class="modal-footer d-flex flex-column justify-content-center border-0">
<p class="text-muted"></p> <button type="button" class="btn btn-primary">close</button>
</div>
</div>
</div>
    </div>

<!-- reminder modal End  -->
<!--   meeting modal start -->

<div class="modal fade bd-example-modal-sm" id="getCodeModal" tabindex="-1" role="dialog"   aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <h6 class="modal-title" >Meeting Invitation from <h5 id="getCode"></h5></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
         <div class="row">
    <div class="col-sm">
    <form action="StartMetting" method="post">
        @csrf
                  <input type="hidden" name="main_id" id="meet_emp_id">
                  <input type="submit" value="Accept" class="btn btn-success">
              </form> 
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Deny</button>
    </div>
   
  </div>

             
            
         </div>
         <!--<div class="modal-footer">-->
           
           
            
         <!--</div>-->
      </div>
   </div>
</div>
</div>
</div>


<!--   meeting modal end -->



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


 <script type="text/javascript"> 


 function updateUserStatus(){
			jQuery.ajax({
				url:'{{url('update_logout_status')}}',
                method:'GET',
				success:function(data){
                  
				}
			});
		}

        function total_login(){
			jQuery.ajax({
				url:'{{url('total_login')}}',
                method:'GET',
				success:function(response){
                $('#timer').html(response);
				}
			});
		}
        setInterval(function(){
			total_login();
		},1000);

		setInterval(function(){
			updateUserStatus();
		},1000);
</script>

   <script>
          
// function openNav() {
//   document.getElementById("mySidenav3").style.width = "100px";
// }

// function closeNav() {
//   document.getElementById("mySidenav3").style.width = "0";
// }

//   function closeNav() {
//   document.getElementById("mySidenav3").style.display = "none";
// }
// function openNav(){
//   const abc=  document.getElementById("mySidenav3");
//     if(abc.style.display=='none')
//     {
//         document.getElementById("mySidenav3").style.display="block";  
//     }else{
//         document.getElementById("mySidenav3").style.display="none";  
//     }
// }

     function closeNav() {
  document.getElementById("mySidenav3").style.display = "none";
}
function openNav(){
  const abc=  document.getElementById("mySidenav3");
    if(abc.style.display=='none')
    {
        document.getElementById("mySidenav3").style.display="block";  
    }else{
        document.getElementById("mySidenav3").style.display="none";  
    }
}
      </script>
<script type="text/javascript"> 
$("#submit1").click(function(e){
    e.preventDefault();
    $.ajax({
        type: "GET",
        url:'{{url('away_start')}}',
        success: function(result) {
    
        },
        error: function(result) {
            console.log("Away error");
        }
    });
});


$("#Resume").click(function(e){
    e.preventDefault();
    $.ajax({
        type: "GET",
        url:'{{url('away_stop')}}',
        success: function(result) {
      
        },
        error: function(result) {
            console.log("Away error");
        }
    });
});


$("#Engaged").click(function(e){
    e.preventDefault();
    $.ajax({
        type:"GET",
        url:'{{url('engaged')}}',
        success:function(response){
          if(response.status == 1 ){
          alert("Engaged at work");
          }else{
          
                Swal.fire("Our First Alert", "With some body text and success icon!", "success");
          }
        },
        error: function(result){
            console.log("engaged error");
        }
    })
})


  function break_status(){
			jQuery.ajax({
				url:'{{url('break_status')}}',
                method:'GET',
				success:function(response){

                    $('#time').html(response.data);
                    $('#tim').html(response.total_break);
                    $('#eff_login').html(response.eff_login);
                    $('#123').html(response.output_eff)
                    
                    if(response.meeting == 1){
                        console.log("in a meeting ");
                        document.getElementById("meat").style.color = "red";
                        document.getElementById("meat").style.backgroundColor = "#FBF8F3";
                    }else{
                        document.getElementById("meat").style.color = "black";
                    }


                    if(response.status == 1){
                        document.getElementById('submit1').style.visibility = 'hidden';
                        document.getElementById('Resume').style.visibility = 'visible';
                        document.getElementById('time').style.visibility = 'visible';
                        document.getElementById('123').style.visibility = 'hidden';
                        document.getElementById('tim').style.visibility = 'hidden';

                    }else{
                       document.getElementById('submit1').style.visibility = 'visible';
                       document.getElementById('Resume').style.visibility = 'hidden';
                       document.getElementById('time').style.visibility = 'hidden';
                       document.getElementById('tim').style.visibility = 'visible';
                       document.getElementById('123').style.visibility = 'visible';

                    }
				}
			});
		}
        setInterval(function(){
			break_status();
		},1000);


const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })
})



</script>
<script>
   
    function show_login_div()
{
document.getElementById('login-form').style.display='block'; 
document.getElementById('register-form').style.display='none'; 
}
function show_register_div()
{
document.getElementById('login-form').style.display='none'; 
document.getElementById('register-form').style.display='block'; 
}
function show_timelog(){
    document.getElementById('Datelog').style.display='block';
    document.getElementById('Add_one').style.display='none'; 

}





$(document).ready(function(){
$(".tabs").click(function(){
$(".tabs").removeClass("active");
$(".tabs h6").removeClass("font-weight-bold");
$(".tabs h6").addClass("text-muted");
$(this).children("h6").removeClass("text-muted");
$(this).children("h6").addClass("font-weight-bold");
$(this).addClass("active");
current_fs = $(".active");
next_fs = $(this).attr('id');
next_fs = "#" + next_fs + "1";
$("fieldset").removeClass("show");
$(next_fs).addClass("show");
current_fs.animate({}, {
step: function() {
current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({
'display': 'block'
});
}
});
});
});
</script>
<script>

$(document).ready(function() {
    console.log("hellofiyfyfyt");
    // document.getElementById('user_select').style.display='none';
       document.getElementById('brow_div').style.display='none';
 
});

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function show_select() {
    console.log("hello");
//  document.getElementById('user_select').style.display='revert';
   document.getElementById('brow_div').style.display='revert';
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("Add_one");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
<script>
// In your Javascript
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
<script>
    //   function MyFunction() {
    //         document.getElementById("selUser").style.display="block";
    //         $("#selUser").select2();
    //              // Read selected option
    //          $('#but_read').click(function () {
    //         var username = $('#selUser option:selected').text();
    //         var userid = $('#selUser').val();
    //         $('#result').html("id : " + userid + ", name : " + username);
    //         });
    //     }
      function MyFunction()
{
    var x = document.getElementById("selUser");
     if (x.style.display === "none") {
    x.style.display = "block";
     $("#selUser").select2();
                 // Read selected option
             $('#but_read').click(function () {
            var username = $('#selUser option:selected').text();
            var userid = $('#selUser').val();
            $('#result').html("id : " + userid + ", name : " + username);
            });
    } else {
    x.style.display = "none";
    }
} 
  
      
</script>


<script>
    $('option').mousedown(function(e) {
    e.preventDefault();
    var originalScrollTop = $(this).parent().scrollTop();
    console.log(originalScrollTop);
    $(this).prop('selected', $(this).prop('selected') ? false : true);
    var self = this;
    $(this).parent().focus();
    setTimeout(function() {
        $(self).parent().scrollTop(originalScrollTop);
    }, 0);
    
    return false;
});

    </script>
    


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>


