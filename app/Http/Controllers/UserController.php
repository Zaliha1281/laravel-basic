<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // query list of user from db
        $users = User::paginate(10);
        //$users = User::all();

        // return to view - resources/views/users/index.blade.php
        return view('users.index', compact('users'));
    }
    
    
      public function show(User $user)  
      {
        return view('users.show', compact('user'));
      }


      public function edit(User $user)
      {
          return view('users.edit', compact('user'));
      }


      public function update(User $user, Request $request)
      {
          $user->title = $request->title;
          $user->description = $request->description;
          $user->save();

          return redirect()->to('/user');
      }


      public function delete(User $user)
      {
          //delete from table using model
          $user->delete();

          //return to user index
          return redirect()->to('/users');
      }
}

