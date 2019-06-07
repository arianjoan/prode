<?php

namespace App\Http\Controllers;

use App\Match as Match;
use App\Team as Team;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::all();

        return view('matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view("matches.create",compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Match::create(
            request()->validate(
                [
                    'name' => ['required' ,'max : 2', 'min : 1'],
                    'id_teamA' => ['required'],
                    'id_teamB' => ['required'],
                    'dateMatch' => ['required']
                    
                ]
            )            
        );*/
        $match = new Match();
        $match->name = $request->name;
        $match->id_teamA = $request->id_teamA;
        $match->id_teamB = $request->id_teamB;
        $match->dateMatch = $request->dateMatch;

        dd($match);
        
        //return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        return view("matches.show", compact("match"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        return view("matches.edit", compact("match"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        $match->destroy();

        return $this->index();
    }
}
