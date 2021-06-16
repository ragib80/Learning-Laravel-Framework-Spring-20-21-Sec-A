<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users =$this->getUserList();

        return view('user.list')->with('userList',$users);
    }
    public function details($id){
        $users=$this->getUserList();
        $user='';
        foreach($users as $u){
            if($u['id']==$id){
                $user=$u;
                break;
            }
        }
     
       return view ('user.details')->with('user',$user);

    }

    public function create(){
        return view('user.create');

    }

    public function insert(Request $req){
        $users = $this-> getUserList();
        $user=['id'=>$req->id,'name'=>$req->uname,'email'=>$req->email];
         array_push($users,$user);

        return view('user.list')->with('userList',$users);

    }

    public function edit($id){
        $users=$this->getUserList();
        $user='';
        foreach($users as $u){
            if($u['id']==$id){
                $user=$u;
                break;
            }
        }
     
       return view ('user.edit')->with('user',$user);
    }

    public function update(Request $req, $id){
        
        $users=$this->getUserList();
     
        for($i=0; $i<sizeof($users); $i++)
        {
            if($users[$i]['id'] == $id)
            {
                $users[$i]['name'] = $req->uname;
                $users[$i]['email'] = $req->email;
                break;
            }
        } 
        return view('user.list')->with('userList', $users);
    }
    
    public function delete( $id){
       
        $users = $this->getUserList();
        $user = '';
        foreach($users as $u)
        {
            if($u['id'] == $id)
            {
                $user = $u;
                break;
            }
        }
        
        return view('user.delete')->with('user', $user);
    }

    public function destroy($id){
        
       
        $users = $this->getUserList();
        $new_users = [];
        foreach($users as $u)
        {
            if($u['id'] != $id)
            {
                array_push($new_users,$u);
            }
        }
        return view('user.list')->with('userList', $new_users);
    }


    public function getUserList(){
        return [
            ['id'=>1, 'name'=>'Ragib', 'email'=>'email@email.com'],
                ['id'=>2, 'name'=>'Shahriar', 'email'=>'abc@email.com'],
                ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
        ];
    }
}
