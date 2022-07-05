@include('IT_DEPARTMENT.sidebar');
@include('COMMEN/navbar')



<div id="remoteModelData" class="modal fade" role="dialog"></div>
<div class="content-page">
    <div class="container-fluid">
   <div class="row">
      <div class="col-lg-4">
         <div class="card card-block p-card">
            <div class="profile-box">
               <div class="profile-card rounded">
                  <a onclick="ChangeProfilePic();" title="click here to change profile picture">
                   @if($Employee_Data->Gender=='Male')
                   <img src="{{asset('file-manager/media-files/Profile_Pictures/'.($Employee_Data->Profile_Image ?? 'boys.gif'))}}" alt="profile-bg"
                     class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                  @else
                   <img src="{{asset('file-manager/media-files/Profile_Pictures/'.($Employee_Data->Profile_Image ?? 'girls.jpg'))}}" alt="profile-bg"
                     class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                 @endif
                 </a>
                    <div id="profile-pic"  >
                    <div id="update-image-div" ><form method="post" action="{{route('change.profile.pic')}}" enctype="multipart/form-data" id="changeProfileForm">@csrf
                    <input type="file"  id="file" name="profile_pic" required><input type="submit" id="update-btn"value="Save"></form</div> 
                    </div>
                    </div>
                    @if ($errors->has('profile_pic')) <span class="pi-error">{{ $errors->first('profile_pic') }}</span>@endif
                  <h3 class="font-600 text-white text-center mb-0">{{$Employee_Data->First_Name ?? ''}}&nbsp;{{$Employee_Data->Last_Name ?? ''}} &nbsp;<a href="{{route('edit.employee.profile')}}"><i class="fa fa-edit" style="color:white"></i></a></h3>
                  <p class="text-white text-center mb-5">{{$Employee_Data->Designation ?? ''}}</p>
               
               </div>
               <div class="pro-content rounded">
                  <div class="d-flex align-items-center mb-3">
                     <div class="p-icon mr-3">
                        <i class="fa fa-envelope"></i>
                     </div>
                     <p class="mb-0 eml">{{$Employee_Data->EmployeeDetails->email ?? ''}}</p>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                     <div class="p-icon mr-3">
                        <i class="fa fa-mobile"></i>
                     </div>
                     <p class="mb-0">{{$Employee_Data->Mob ?? ''}}</p>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                     <div class="p-icon mr-3">
                        <i class="fa fa-map-marker"></i>
                     </div>
                     <p class="mb-0">{{$Employee_Data->Country ?? ''}}</p>
                  </div>
                  <div class="d-flex justify-content-center">
                     <div class="social-ic d-inline-flex rounded">
                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            
            <div class="col-sm-4 col-lg-12">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body text-center">
                     <svg width="60" height="48" viewBox="0 0 60 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M23.9091 24.5297C24.495 25.1156 25.4447 25.1156 26.0306 24.5297L27.0909 23.4694C27.6769 22.8834 27.6769 21.9338 27.0909 21.3478L23.7422 18L27.09 14.6512C27.6759 14.0653 27.6759 13.1156 27.09 12.5297L26.0297 11.4694C25.4437 10.8834 24.4941 10.8834 23.9081 11.4694L18.4387 16.9387C17.8528 17.5247 17.8528 18.4744 18.4387 19.0603L23.9091 24.5297V24.5297ZM32.91 23.4703L33.9703 24.5306C34.5563 25.1166 35.5059 25.1166 36.0919 24.5306L41.5613 19.0613C42.1472 18.4753 42.1472 17.5256 41.5613 16.9397L36.0919 11.4703C35.5059 10.8844 34.5563 10.8844 33.9703 11.4703L32.91 12.5306C32.3241 13.1166 32.3241 14.0662 32.91 14.6522L36.2578 18L32.91 21.3488C32.3241 21.9347 32.3241 22.8844 32.91 23.4703V23.4703ZM58.5 39H35.7694C35.7 40.8572 34.3903 42 32.7 42H27C25.2478 42 23.9044 40.3622 23.9278 39H1.5C0.675 39 0 39.675 0 40.5V42C0 45.3 2.7 48 6 48H54C57.3 48 60 45.3 60 42V40.5C60 39.675 59.325 39 58.5 39ZM54 4.5C54 2.025 51.975 0 49.5 0H10.5C8.025 0 6 2.025 6 4.5V36H54V4.5ZM48 30H12V6H48V30Z"
                           fill="#3cb72c" />
                     </svg>
                     <h2 class="mb-2 mt-3 text-success">3+ years </h2>
                     <h4>Experience</h4>
                  
                  </div>
               </div>
            </div>
           
         </div>
      </div>
      <div class="col-lg-8">
         <div class="card card-block">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title mb-0">My Profile</h4>
               </div>
            </div>
            <div class="card-body">
          <table class="table table-bordered">
  <tbody>
      <tr>
         <th>Name</th>
         <td>{{$Employee_Data->First_Name ?? ''}}&nbsp;{{$Employee_Data->Last_Name ?? ''}}</td>
      </tr>
      <tr>
         <th>Designation</th>
         <td>{{$Employee_Data->Designation ?? ''}}</td>
      </tr>
      <tr>
         <th>Date Of Joining</th>
         <td>{{$Employee_Data->DateOfJoining ?? ''}}</td>
      </tr>
      <tr>
         <th>Gender</th>
         <td>{{$Employee_Data->Gender ?? ''}}</td>
      </tr>
      <tr>
         <th>Marital Status</th>
         <td>{{$Employee_Data->Marital_Status ?? ''}}</td>
      </tr>
      <tr>
         <th>Date Of Birth</th>
         <td>{{$Employee_Data->DOB ?? ''}}</td>
      </tr>
      <tr>
         <th>Mob</th>
         <td>{{$Employee_Data->Mob ?? ''}}</td>
      </tr>
      <tr>
         <th>Address</th>
         <td>{{$Employee_Data->Address ?? ''}}</td>
      </tr>
      <tr>
         <th>State</th>
         <td>{{$Employee_Data->State ?? ''}}</td>
      </tr>
      <tr>
         <th>Country</th>
         <td>{{$Employee_Data->Country ?? ''}}</td>
      </tr>
      <tr>
         <th>PinCode</th>
         <td>{{$Employee_Data->PinCode ?? ''}}</td>
      </tr>
     
  </tbody>
</table>
  
         </div>
         <div class="card card-block">
            <div class="card-header">
               <div class="header-title">
                  <h4 class="card-title">Highest Education</h4>
               </div>
            </div>
            <div class="card-body">
               <ul class="list-inline p-0 m-0">
                  <li class="d-flex align-items-center mb-3">
                     <div class="profile-icon iq-icon-box rounded-small bg-danger-light svg-danger text-center">
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0)">
                              <path
                                 d="M23.3379 5.745L12.8777 2.53125C12.3077 2.35612 11.6927 2.35612 11.1231 2.53125L0.662429 5.745C-0.220321 6.01612 -0.220321 7.18349 0.662429 7.45462L2.48605 8.01487C2.08593 8.50949 1.83993 9.11287 1.81555 9.77362C1.45443 9.98062 1.20018 10.3541 1.20018 10.8C1.20018 11.2042 1.41318 11.5444 1.71993 11.7619L0.762554 16.0699C0.679304 16.4445 0.964304 16.8 1.34793 16.8H3.45205C3.83605 16.8 4.12105 16.4445 4.0378 16.0699L3.08043 11.7619C3.38718 11.5444 3.60018 11.2042 3.60018 10.8C3.60018 10.3661 3.35755 10.0031 3.01293 9.79237C3.04143 9.22912 3.32943 8.73112 3.7888 8.41537L11.1227 10.6687C11.4624 10.773 12.1142 10.9031 12.8773 10.6687L23.3379 7.45499C24.2211 7.1835 24.2211 6.0165 23.3379 5.745V5.745ZM13.2298 11.8159C12.1599 12.1444 11.2483 11.9629 10.7702 11.8159L5.33193 10.1452L4.80018 14.4C4.80018 15.7256 8.02368 16.8 12.0002 16.8C15.9767 16.8 19.2002 15.7256 19.2002 14.4L18.6684 10.1449L13.2298 11.8159V11.8159Z"
                                 fill="#FF4B4B" />
                           </g>
                           <defs>
                              <clipPath id="clip0">
                                 <rect width="24" height="19.2" fill="white" />
                              </clipPath>
                           </defs>
                        </svg>
                     </div>
                     <div class="ml-3">
                        <h5>{{$Employee_Data->Highest_Qualification ?? ''}}</h5>
                       <!--  <p class="mb-0">Junior High School | Class of 2008</p> -->
                     </div>
                 
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

@include('COMMEN/footer');