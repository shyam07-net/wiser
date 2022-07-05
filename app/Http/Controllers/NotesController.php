<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\department;


class NotesController extends Controller
{
    public function index(Request $request){
        // echo "hii";
        $employe_id = session('USER_ID');
        $result['empnotes'] = Notes::where('Employee_id',$employe_id)->orderBy('id', 'DESC')->get();
        $result['empData'] = users::where('id',$employe_id)->first();
        $deptname =$result['empData']->department->department_name;
        return view('/master/PersonalNotes', $result);

    }
   
    public function store(Request $request){

        $employe_id = session('USER_ID');
        $notes = new Notes();
        $notes->Employee_id = $employe_id;
        $notes->title = $request->post('title');
        $notes->notes = $request->post('notes');
        $notes->status = 1;
        $notes->save();
        return redirect('/personalnotes');
    }

    public function delete(Request $request, $id){

        $model=Notes::find($id);
        $Status = Notes::where('id', $id)->first();
        if($Status->status == 1) {
            $model->delete();
            return back()->with('success','Your notes has been deleted');
        }
    }

    // public function edit($id){
        
    //     $model = Notes::find($id);
    //     return view('editpage',compact('data'));
    // }

}
