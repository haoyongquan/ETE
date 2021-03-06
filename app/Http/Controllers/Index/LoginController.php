<?php

namespace App\Http\Controllers\Index;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class LoginController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function login(){
    	return  view('index.login.login');
    }
    public function register(){
    	return  view('index.login.register');
    }
}
