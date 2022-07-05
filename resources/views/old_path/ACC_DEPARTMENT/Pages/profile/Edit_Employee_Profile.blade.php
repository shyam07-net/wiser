@include('ACC_DEPARTMENT.sidebar');
@include('COMMEN/navbar')
<div id="remoteModelData" class="modal fade" role="dialog"></div>
<div class="content-page">
    <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body p-0">
                     <div class="iq-edit-list usr-edit">
                        <ul class="iq-edit-profile d-flex nav nav-pills">
                           <li class="col-md-3 p-0">
                              <a class="nav-link active" data-toggle="pill" href="#personal-information">
                              Personal Information
                              </a>
                           </li>
                           <li class="col-md-3 p-0">
                              <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                              Change Password
                              </a>
                           </li>
                           <li class="col-md-3 p-0">
                              <a class="nav-link" data-toggle="pill" href="#emailandsms">
                              Email and SMS
                              </a>
                           </li>
                           <li class="col-md-3 p-0">
                              <a class="nav-link" data-toggle="pill" href="#manage-contact">
                              Manage Contact
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="iq-edit-list-data">
                  <div class="tab-content">
                     <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Personal Information</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form action="{{route('employee.update.profile')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                 

                                 <div class=" row align-items-center">
                                    <div class="form-group col-sm-6">
                                       <label for="fname">First Name:</label>
                                       <input type="text" class="form-control" id="fname" name="fname" value="{{$fname}}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="lname">Last Name:</label>
                                       <input type="text" class="form-control" id="lname" name="lname" value="{{$lname }}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="lname">Mobile No.:</label>
                                       <input type="text" class="form-control" id="Mob" name="Mob" value="{{$Mob}}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="lname">Highest Qualification:</label>
                                       <input type="text" class="form-control" id="edu" name="edu" value="{{$HQ}}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="uname">Designation:</label>
                                       <input type="text" class="form-control" id="desig" name="desig" value="{{$Desig}}">
                                    </div>
                                 
                                    <div class="form-group col-sm-6">
                                       <label class="d-block">Gender:</label>
                                       <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadio6" name="gender" value="Male" class="custom-control-input" {{ ($Gender == 'Male') ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="customRadio6" > Male </label>
                                       </div>
                                       <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadio7" name="gender" value="Female" class="custom-control-input" {{ ($Gender == 'FeMale') ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="customRadio7"> Female </label>
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="dob">Date Of Birth:</label>
                                       <input  class="form-control" id="dob" name="dob" value="{{$DOB}}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label>Marital Status:</label>
                                       <select class="form-control" id="maritalStatus" name="maritalStatus">
                                          @if($Marital_Status!='')
                                          <option value="{{$Marital_Status}}" selected>{{$Marital_Status}}</option>
                                          @else
                                          <option value="" selected>Select Marital Status</option>
                                          @endif
                                          <option value="Single">Single</option>
                                          <option value="Married">Married</option>
                                          <option value="Widowed">Widowed</option>
                                          <option value="Divorced">Divorced</option>
                                          <option value="Separated">Separated </option>
                                       </select>
                                    </div>
                                         <div class="form-group col-sm-6">
                                       <label>Pin Code:</label>
                                      <input type="text" class="form-control" id="pincode" name="pincode" value="{{$PC}}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label>State:</label>
                                       <input type="text" class="form-control" id="state" name="state" value="{{$State}}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label>Country:</label>
                                        <input type="text" class="form-control" id="country" name="country" value="{{$Country}}">
                                    </div>
                               
                               
                                    <div class="form-group col-sm-12">
                                       <label>Address:</label>
                                       <textarea class="form-control" name="address" rows="5" style="line-height: 22px;" >{{ $Address}}</textarea>
                                    </div>
                                 </div>
                                 <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Change Password</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form>
                                 <div class="form-group">
                                    <label for="cpass">Current Password:</label>
                                    <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                    <input type="Password" class="form-control" id="cpass" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="npass">New Password:</label>
                                    <input type="Password" class="form-control" id="npass" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="vpass">Verify Password:</label>
                                    <input type="Password" class="form-control" id="vpass" value="">
                                 </div>
                                 <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Email and SMS</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form>
                                 <div class="form-group row align-items-center">
                                    <label class="col-md-3" for="emailnotification">Email Notification:</label>
                                    <div class="col-md-9 custom-control custom-switch">
                                       <input type="checkbox" class="custom-control-input" id="emailnotification" checked="">
                                       <label class="custom-control-label" for="emailnotification"></label>
                                    </div>
                                 </div>
                                 <div class="form-group row align-items-center">
                                    <label class="col-md-3" for="smsnotification">SMS Notification:</label>
                                    <div class="col-md-9 custom-control custom-switch">
                                       <input type="checkbox" class="custom-control-input" id="smsnotification" checked="">
                                       <label class="custom-control-label" for="smsnotification"></label>
                                    </div>
                                 </div>
                                 <div class="form-group row align-items-center">
                                    <label class="col-md-3" for="npass">When To Email</label>
                                    <div class="col-md-9">
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email01">
                                          <label class="custom-control-label" for="email01">You have new notifications.</label>
                                       </div>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email02">
                                          <label class="custom-control-label" for="email02">You're sent a direct message</label>
                                       </div>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email03" checked="">
                                          <label class="custom-control-label" for="email03">Someone adds you as a connection</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group row align-items-center">
                                    <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                    <div class="col-md-9">
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email04">
                                          <label class="custom-control-label" for="email04"> Upon new order.</label>
                                       </div>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email05">
                                          <label class="custom-control-label" for="email05"> New membership approval</label>
                                       </div>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email06" checked="">
                                          <label class="custom-control-label" for="email06"> Member registration</label>
                                       </div>
                                    </div>
                                 </div>
                                 <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Manage Contact</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form>
                                 <div class="form-group">
                                    <label for="cno">Contact Number:</label>
                                    <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                 </div>
                                 <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" id="email" value="Barryjone@demo.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="url">Url:</label>
                                    <input type="text" class="form-control" id="url" value="https://getbootstrap.com/">
                                 </div>
                                 <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
@include('COMMEN/footer');