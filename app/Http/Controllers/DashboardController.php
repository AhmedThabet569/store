<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    //actions 
    /**
     * index
     * 
     */
    public function index()
    {
        // return responsice view json redirect file
            //   pass var to view
            $user  = "Ahmed Thabet";
        // return view('dashboard',[
        //     'user' => 'ahmed thabet'
        // ]);

        // compact built in php return array 
        // you can pass any varible in it
        // return view('dashboard',compact('user'));
        return view('dashboard.index')->with([
            'user'=>$user,
            'title'=>'new dashboard'
        ]);

    //     return View::make('dashboard',[
    //         //     'user' => 'ahmed thabet'
    //         // ]);
    // )
    }
}
