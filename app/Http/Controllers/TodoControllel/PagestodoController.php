<?php

namespace App\Http\Controllers\TodoControllel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\pagescontroller\CreateRequest;
use App\Http\Requests\pagescontroller\UpdateRequest;
use App\Models\Todo;
use App\User;
use Auth;


class PagestodoController extends Controller
{
    public function __construct()
    {
     $this->middleware('auth',['except'=>['index']]);
    }

 
    public function index()
    {
     return view('welcome');
    }

    public function showtodo()
    {
      $todos=Todo::where("user_id",Auth::user()->id)->where("delete","=",0)->orderBy('created_at','desc')->get();
      return view('hometodo.show')->with('todo',$todos);
    }

    public function profile(User $User)
    {
    	return view('profile')->with('User',$User);
    }

    public function allaction(Request $request){
      if ($request->has("complete")) {
        if ($request->has("check")) {
          foreach ($request->check as $check) {
            $todo = Todo::find($check);
            $todo->complete = 1;
            $todo->save();
          }
        }
      }elseif ($request->has("delete")) {
        if ($request->has("check")) {
          foreach ($request->check as $check) {
            $todo = Todo::find($check);
            $todo->delete = 1;
            $todo->save();
          }
        }
      }

     elseif ($request->has("UnComplete")) {
        if ($request->has("check")) {
          foreach ($request->check as $check) {
            $todo = Todo::find($check);
            $todo->complete =0;
            $todo->save();
          }
        }
      }

      
              return redirect()->route('todo.show.showtodo');

    }

    public function completeAll(Request $request){
      return $request->all();
    }

    public function updateprofile(UpdateRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email =$request->email;
        $user->gender=$request->gender;
        $user->password = $request->has("password") ? bcrypt($request->password) : $user->password;
        $user->save();
        return redirect()->route('todo.show.showtodo')->with('success','Update Profile successfully');
    }


     public function addtodolist()
    {
     return view('TodoPages.addtodo');	
    }

    public function createtodolist(CreateRequest $request)
    {
      $data=$request->all();
      $data["user_id"]=Auth::user()->id;
      $data=Todo::create($data);
       return redirect()->route('todo.show.showtodo')->with('success','Create TodoList successfully');
    }

    public function approved(Todo $todo)
    {
        $todo->complete = $todo->complete == 1 ? 0 : 1;
        $todo->save();
        return redirect()->route('todo.show.showtodo');
    } 

     public function delete(Todo $todo)
     {
       $todo->delete = 1;
       $todo->save();
        return redirect()->route('todo.show.showtodo');
    }



}
