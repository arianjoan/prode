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
        /*$matches = Match::all();

        return view('matches.index', compact('matches'));*/

        $matches = Match::name("A")->get();
        dd($matches);
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
        Match::create(
            request()->validate(
                [
                    'name' => ['required' ,'max : 2', 'min : 1'],
                    'id_teamA' => ['required'],
                    'id_teamB' => ['required'],
                    'dateMatch' => ['required'] 
                ]
            )            
        ); 
        
        return $this->index();
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
        $teams = Team::all();

        return view("matches.edit", compact("match", "teams"));
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
        $match->update(request(['name', 'id_teamA', 'id_teamB']));
  
        return $this->index();
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
