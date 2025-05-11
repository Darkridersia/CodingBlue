<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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

        return redirect('users/usercontroller');
    }

    // public function loadView(){

    //     $users = $this->testData();

    //     return view('users', ['users' => $users]);
    // }
}
