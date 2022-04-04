<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function showWelcome()
    {
        return view('welcome');
    }
    public function showService()
    {
        return view('v_service');
    }
    public function showProfile()
    {
        return view('v_profile');
    }
    public function showCompany()
    {
        return view('v_company');
    }
    public function showCollaboration()
    {
        return view('v_collaboration');
    }
    public function showSignin()
    {
        return view('auth.signin');
    }
    public function showSignup()
    {
        return view('auth.signup');
    }
    public function register()
    {
        return view('auth.register');
    }
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}