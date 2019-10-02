<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;
use App\User;

class HomeController extends BackEndController
{
    //
    public function __construct()
    {

    }
    public function index()
    {
        return view('BackEnd.index')->with('usersCount',User::count());
    }
}
