<?php

namespace App\Http\Controllers;

use App\Fixture as Fixture;
use App\Match as Match;
use App\Result as Result;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fixture = Fixture::idUser(auth()->user()->id)->get();

        if (count($fixture) != 0)
        {            
            $fixture = auth()->user()->fixture;
            $results = Result::idFixture($fixture->first()->id)->get();

            $resultFirst = $results->first();
            if($resultFirst->created_at == $resultFirst->updated_at)
            {
                return view('fixtures.index', compact('results'));
            }
            else 
            {
                return view('fixtures.fixSetted', compact('results'));
            }
        }
        else
        {
            $this->addFixture();
        }
        
    }

    private function addFixture(){
        $fixture = new Fixture();
        $fixture->id_User = auth()->user()->id;
        $fixture->score = 0;
        $fixture->save();

        $fixture = Fixture::idUser(auth()->user()->id)->get()->first();
        $matches = Match::all();

        foreach($matches as $match){
            $result = new Result();
            $result->id_match = $match->id;
            $result->id_fixture = $fixture->id;
            $result->id_teamA = $match->teamA->id;
            $result->id_teamB = $match->teamB->id;
            $result->scoreA = 0;
            $result->scoreB = 0;
            $result->save();
        }

        $fixture->save();

        return $this->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fixtures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Fixture $fixture)
    {
        $fixture->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function edit(Fixture $fixture)
    {
        return view('fixtures.edit', compact('fixture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fixture $fixture)
    {
        //example of param1
        $fixture->update(request(['param1']));

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fixture $fixture)
    {
        $fixture->delete();

        return $this->index();
    }

    public function calculateTotalScore(){
        $fixture = auth()->user()->fixture;
        $resultsSource = Result::idFixture($fixture->first()->id)->get();
        $admin = User::emailUser("admin@admin.com")->get()->first();
        $resultsOrigin = $admin->fixture->results;
        $puntos = $this.calculateMatchScore($resultsSource,$resultOrigin);
        return $puntos;
    }

    public function calculateMatchScore(Result $resultSource,Result $resultOriginal){
        if ($resultSource->scoreA == $resultOriginal->scoreA && $resultSource->scoreB == $resultOriginal->scoreB){
            return 3;
        }else if (($resultSource->scoreA > $resultSource->scoreB && $resultOrigin->scoreA > $resultOrigin->scoreB) ||
                  ($resultSource->scoreA < $resultSource->scoreB && $resultOrigin->scoreA < $resultOrigin->scoreB) ||
                  ($resultSource->scoreA == $resultSource->scoreB && $resultOrigin->scoreA > $resultOrigin->scoreB)){
            return 1;
    }
        else{
            return 0;
        }
}
}
