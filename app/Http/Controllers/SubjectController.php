<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subject = Subject::all();
        
         return view('subject',['title' => 'Daftar Mata Pelajaran', 'subject' => $subject]);
    }
}
