<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::select('users.id AS id','email','users.name AS name','display_name AS user_type')
        ->join('roles','roles.id','users.role_id')
        ->where('users.id','!=','1')
        ->where('status','1')->get();
        return view('admin.index', compact('users'));
    }
}
