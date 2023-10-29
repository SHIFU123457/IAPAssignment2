<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newuser;

class newuserController extends Controller
{
    public function getIndex(){
        return view('newuser/index');
    }

    public function storeFormValues(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'dob' => 'required',
            'location' => 'required',
            'email' => 'required',
            'gender' => 'required'
        ]);

        $newUserCreated = newUser::create($data);

        return redirect(route('newUser.view'));
        
    }

    public function viewFormValues(){
        $viewFormVal = newuser::all();
        return view('newuser/viewusers', ['viewFormVal' => $viewFormVal]);  //this enables declaration of $ viewFormVal in the view file
    }

    public function edit(newuser $viewUserID){
        return view('newuser/edit', ['UserIDset' => $viewUserID]);
    }
 
    public function update(newuser $viewUserID, Request $request){
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'dob' => 'required',
            'location' => 'required',
            'email' => 'required',
            'gender' => 'required'
        ]);

        $viewUserID->update($data);

        return redirect(route('newUser.view'))->with('success', $viewUserID->username . ' updated successfully'); //the ->with() declares a new session.

    }
    public function delete(newuser $deletion){
        $deletion->delete();
        return redirect(route('newUser.view'))->with('success', ' deleted successfully');
    }
}
