<?php

/*
 * 
 * 
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class WelcomeController
 * @package App\Http\Controllers
 */
class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function showWelcome()
    {
        return view('welcome');
    }
}