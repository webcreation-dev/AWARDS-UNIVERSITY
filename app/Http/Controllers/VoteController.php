<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $votes = Vote::select('votes.*', 'students.*', 'categories.name as category_name')
        // ->join('students', 'votes.student_id', '=', 'students.id')
        // ->join('categories', 'students.category_id', '=', 'categories.id')
        // ->orderBy('votes.prix', 'desc')
        // ->get();

        $votes = Vote::select('votes.*', 'students.*', 'categories.name as category_name')
            ->join('students', 'votes.student_id', '=', 'students.id')
            ->join('categories', 'students.category_id', '=', 'categories.id')
            ->orderByRaw('CAST(votes.prix AS SIGNED) DESC')
            ->get();

        $total = Vote::sum("prix");
        $count = Vote::sum("count");
        $candidats = Vote::count();

        return view('statistics', compact('votes', 'total', 'candidats', 'count'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
    }
}
