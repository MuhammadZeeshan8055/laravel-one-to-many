<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Book;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::with('books')->get();
        return $student;
        // if ($student) {
        //     echo "Student Name: " . $student->name . "<br>";
        //     echo "Books: <br>";
        //     foreach ($student->books as $book) {
        //         echo "- " . $book->book . "<br>";
        //     }
        // } else {
        //     echo "Student not found.";
        // }
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
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
