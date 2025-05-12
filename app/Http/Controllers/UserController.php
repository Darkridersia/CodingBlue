<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserP5;

class UserController extends Controller
{
    //
    function testData()
    {
        $data = User::paginate(5);

        return view('users', ['users' => $data]);
    }

    function addUser(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();

        return redirect('addUser');
    }

    function deleteUser($id)
    {
        $data = User::find($id);
        ;
        $data->delete();

        return redirect('users/usercontroller');
    }

    function showUpdate($id)
    {
        $data = User::find($id);

        return view('updateUser', ['data' => $data]);
    }

    function updateUser(request $req)
    {
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->save();

        return redirect('users/usercontroller')->with('message', 'User Updated Successfully');
    }

    // public function loadView(){

    //     $users = $this->testData();

    //     return view('users', ['users' => $users]);
    // }

    function signUp(Request $req){
        $data = $req->all();
        $data['is_admin'] = 0;
        
        UserP5::create($data);

        return redirect('addUser')->with('message', 'User Created Successfully');
    }

    function OneToOne(){
        return UserP5::find(2)->getOneCompany;
    }

    function OneToMany(){
        return UserP5::find(2)->getManyCompany;
    }
}
