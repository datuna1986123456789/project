<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Container\BindingResolutionException;

class FileControler extends Controller
{
    public function ShowUploadFile()
    {
    	return view("register");

    	//return $request->all();
    }

    public function StoreFile(request $request)
    {
    	return $request->all();
    }
}
