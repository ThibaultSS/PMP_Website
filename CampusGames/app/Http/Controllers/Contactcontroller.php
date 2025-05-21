<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contactcontroller extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function submit(){
        //$word = $_POST['name'] + $_POST['message'];
        Mail::raw(($_POST['message']), function ($message) {$message->to('PretMetPet@gmail.com')->subject($_POST['email']);});
        return view('home');
    }
}
