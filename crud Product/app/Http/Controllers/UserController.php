<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function index()
    {
        $users = DB::table('users')->get(); 
       
        return view('user.list')->with('userList', $users);
    }

    public function details($id)
    {
        
        $user = User::find($id);
        return view('user.details')->with('user', $user);
    }
    public function edit($id)
    {
        
        $user = User::find($id);
        return view('user.edit')->with('user', $user);
    }
    public function update(Request $req, $id)
    {
        
        $user = User::find($id);
        $user->username = $req->username;
        $user->email = $req->email;
        $user->name = $req->name;
       $user->save();
     return redirect()->route('user.index');
        
    }

    public function delete($id)
    {
        
        $user = User::find($id);
        return view('user.delete')->with('user', $user);
    }


    public function destroy(Request $req, $id)
    {

        ;

        User::destroy($id);
        return redirect()->route('user.index');
    }

    public function create()
    {
        return view('user.create');
    }
    public function insert(Request $req)
    {
    

        $user = new User;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->name = $req->name;
        $user->email = $req->email;
      
        $user->type = 'user';
        $user->save();
        return redirect()->route('user.index');
    }


   
}