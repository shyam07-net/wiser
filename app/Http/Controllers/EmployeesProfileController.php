<?php

namespace App\Http\Controllers;
use App\Models\users; 
use App\Models\Employees_Profile;
use Illuminate\Http\Request;

class EmployeesProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $employee_Id = session('USER_ID');
       $deptName = (users::where('id',$employee_Id)->first())->department->department_name;
       $checkProfile = Employees_Profile::where('Employee_ID',$employee_Id)->exists();
       if($checkProfile===true)
       {
       $Employee_Data = Employees_Profile::where('Employee_ID',$employee_Id)->first();
       return view('master.profile.EmployeeProfile',compact('Employee_Data'));
       }
       else{
        return redirect()->route('edit.employee.profile');
       }
    }

    public function edit()
    {
      $employee_Id = session('USER_ID');
      $deptName = (users::where('id',$employee_Id)->first())->department->department_name;
      $checkProfile = Employees_Profile::where('Employee_ID',$employee_Id)->exists();
      if($checkProfile){
      $checkProfile = Employees_Profile::where('Employee_ID',$employee_Id)->first(); 
      $data['id'] = $employee_Id;
      $data['fname'] = $checkProfile->First_Name;
      $data['lname'] = $checkProfile->Last_Name;
      $data['DOJ'] = $checkProfile->DateOfJoining;
      $data['Desig'] = $checkProfile->Designation;
      $data['Gender'] = $checkProfile->Gender;
      $data['DOB'] = $checkProfile->DOB;
      $data['Mob'] = $checkProfile->Mob;
      $data['Marital_Status'] = $checkProfile->Marital_Status;
      $data['profilePic'] = $checkProfile->Profile_Image;
      $data['HQ'] = $checkProfile->Highest_Qualification;
      $data['Address'] = $checkProfile->Address;
      $data['State'] = $checkProfile->State;
      $data['Country'] = $checkProfile->Country;
      $data['PC'] = $checkProfile->PinCode;
      }else{
      $data['id'] ='';
      $data['fname'] = '';
      $data['lname'] = '';
      $data['DOJ'] ='';
      $data['Desig'] ='';
      $data['Gender'] ='';
      $data['DOB'] ='';
      $data['Mob'] ='';
      $data['Marital_Status'] = '';
      $data['profilePic'] ='';
      $data['HQ'] ='';
      $data['Address'] ='';
      $data['State'] ='';
      $data['Country'] ='';
      $data['PC'] ='';
      }
      return view('master.profile.Edit_Employee_Profile',$data);
    }


  public function create(Request $request)
    {
    $empId = session('USER_ID');
    $fname =$request->fname;
    $lname =$request->lname;
    $Mob=$request->Mob;
    $edu=$request->edu;
    $desig=$request->desig;
    $gender=$request->gender;
    $dob=$request->dob;
    $maritalStatus=$request->maritalStatus;
    $pincode=$request->pincode;
    $state=$request->state;
    $country=$request->country;
    $address=$request->address;
    if(Employees_Profile::where('Employee_ID',session('USER_ID'))->exists())
    {
        $checkProfileImage = Employees_Profile::where('Employee_ID',session('USER_ID'))->first()->Profile_Image;
        if($checkProfileImage!='' & $checkProfileImage!='NULL')
        {
         $profilePic =$checkProfileImage;   
        }else{
         $profilePic =NULL;    
        }
    }else{
     $profilePic =NULL;   
    }
       $Insert = Employees_Profile::updateOrCreate(['Employee_ID'=>$empId],[
        'Employee_ID' =>$empId,
        'First_Name' =>$fname,
        'Last_Name'=>$lname,
        'DateOfJoining'=>'5-5-2022',
        'Designation'=>$desig,
        'Gender'=>$gender,
        'Marital_Status'=>$maritalStatus,
        'DOB'=>$dob,
        'Mob'=>$Mob,
        'Profile_Image'=>$profilePic,
        'Highest_Qualification'=>$edu,
        'Address'=>$address,
        'State'=>$state,
        'Country'=>$country,
        'PinCode'=>$pincode,
       ]);
       return redirect()->route('Employee.view.profile');
    }

public function ChangeProfilePicture(Request $request){
        $validatedData = $request->validate([  
         'profile_pic' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|image',
        ],[
            'profile_pic.required'=>'Please choose a photo !',
            'profile_pic.mimes'=>'Please select a valid image!',
            'profile_pic.max'=>'Image should be less than 2 MB!',
        ]);
       if($request->has('profile_pic'))
       {
         $FileName =  $request->file('profile_pic');
          $originalname = $FileName->getClientOriginalName();
        
          $update = Employees_Profile::where('Employee_ID',session('USER_ID'))->first();
          if($update->Profile_Image!='')
          {
            if(file_exists('file-manager/media-files/Profile_Pictures/'.$update->Profile_Image))
            {
             unlink('file-manager/media-files/Profile_Pictures/'.$update->Profile_Image);
            }else{
            }
             //unlink('file-manager/media-files/Profile_Pictures/'.$update->Profile_Image);
          }
          $FileName->move('file-manager/media-files/Profile_Pictures', $originalname);
          $update->Profile_Image = $originalname;
          $update->update();
          return back();
       }else{
           return back();
       }
    
    
    
}



    
}
