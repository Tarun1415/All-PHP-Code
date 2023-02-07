<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;


class membercontroller extends Controller
{

    function list(){
        $data=member::all();
        return view('Delete',['member'=>$data]);
    }
    function delete($id)
    {
    $data=member::find($id);
    $data->delete();
    echo"Data deleted sucessfully";
    }
    function Update($id)
    {
        $data=member::find($id);
        return view('Update',['data'=>$data]);


    }
    function edit(Request $req)
    {
        $data=member::find($req->id);
        $data-> Name=$req->Name;
        $data-> Email=$req->Email;

        $data->save();
        return redirect('login');
        

    } 
  function index(Request $req)
  {
    $member = new member;
    $member-> Name=$req->Name;
    $member-> Email=$req->Email;
    $member->save();
    return redirect('login');

}
}





    
