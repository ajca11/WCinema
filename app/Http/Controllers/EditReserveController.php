<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class EditReserveController extends Controller
{
    public function index(){
        
        return view('edit.editreserve');
    }
}
