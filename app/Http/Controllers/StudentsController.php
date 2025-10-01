<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $student = [
        //     ['id'=> 1 ,
        //     'name'=> 'ega',
        //     'email'=> '11pplg6',
        //     'date_of_birth'=> '2005-05-05',
        //     'address'=> 'kudus',
        //     'gender'=> 'male',
        // ],
        //     ['id'=> 2 ,
        //     'name'=> 'budi',
        //     'email'=> '11pplg6',
        //     'date_of_birth'=> '2005-05-05',
        //     'address'=> 'jepara',
        //     'gender'=> 'male',
        // ],
        //     ['id'=> 3 ,
        //     'name'=> 'ani',
        //     'email'=> '11pplg6',
        //     'date_of_birth'=> '2005-05-05',
        //     'address'=> 'malang',
        //     'gender'=> 'female',
        // ],
        //     ['id'=> 4 ,
        //     'name'=> 'sari',
        //     'email'=> '11pplg6',
        //     'date_of_birth'=> '2008-05-05',
        //     'address'=> 'jepara',
        //     'gender'=> 'female',
        // ],
        //     ['id'=> 5 ,
        //     'name'=> 'dina',
        //     'email'=> '11pplg6',
        //     'date_of_birth'=> '2005-05-05',
        //     'address'=> 'jepara',
        //     'gender'=> 'male',
        // ],
        // ];

            $student = Student::all();

        return view('students',['title' => 'Daftar Siswa', 'students' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
