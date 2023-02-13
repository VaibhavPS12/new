<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function userDetails(){
        $user_id = auth::user()->id;
        if(auth::user()->user_role == 1){
         $data['user_deatils'] = DB::table('users')
            ->leftjoin('user_roles','users.user_role','=','user_roles.id')
            ->select('*')
            ->get();
          
        }
        else{
           $data['user_deatils'] = DB::table('users')
           ->join('user_roles','users.user_role','=','user_roles.id')
           ->select('*')
           ->where('users.id', '=', $user_id)
           ->get();
           
        }
        return view('userdetails',$data);
    }
}
