<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMailAcc;

class emailController extends Controller
{
    public function index() //diterima
    {
        $tujuan = 'andhikaaditya12@gmail.com'; 
        
        Mail::to($tujuan)->send(new sendMailAcc);
        return "Udah ke kirim wak, barusan";
    }

    // public function index() //ditolak
    // {
    //     $tujuan = 'andhikaaditya12@gmail.com'; 
        
    //     Mail::to($tujuan)->send(new sendMailDec);
    //     return "Udah ke kirim wak, barusan";
    // }
}
