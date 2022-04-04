<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\UserModel;
use DB;

class UserController extends Controller
{
    // /**
    //  * Show the profile for a given user.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\View\View
    //  */
    
    public function insert(){
        Request()->validate([
            'phoneNumber' => 'required',
            'firstName' => 'required|max:50',
            'email' => 'required',
            'username' => 'required|max:20',
            'password' => 'required|min:8|max:50|protected'
        ]);
        $data = [
            'firstName' => Request()->firstName,
            'lastName' => Request()->lastName,
            'address' => Request()->address,
            'phoneNumber' => Request()->phoneNumber,
            'email' => Request()->email,
            'username' => Request()->username,
            'password' => Request()->password,
        ];
        // this->UserModel->addData($data);
        DB::table('user_account')->insert($data);
        return redirect()->route('signup')->with('msg','Account has been made!');
    }
}