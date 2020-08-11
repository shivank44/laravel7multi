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
        $users=User::select('id','email','name','role_id')
        ->with('getRole')
        ->where('users.id','!=','1')
        ->where('status','1')->get();
        //dd($users);
        return view('admin.index', compact('users'));
    }
}
