<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Student;
use App\Models\Vote;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories_classement', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request  $request)
    {

        $category_id = $request->category;

        $candidates = Vote::select('votes.*', 'students.*', 'categories.name as category_name')
            ->where('category_id', $category_id)
            ->join('students', 'votes.student_id', '=', 'students.id')
            ->join('categories', 'students.category_id', '=', 'categories.id')
            ->orderByRaw('CAST(votes.prix AS SIGNED) DESC')
            ->take(3)
            ->get(); // Ajout de la méthode get() pour exécuter la requête et récupérer les résultats

        return view('classement_candidates', compact('candidates', 'category_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
