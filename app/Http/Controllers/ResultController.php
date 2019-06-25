<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prueba');
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
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
    
    public function updateAll(Request $request)
    {
        // foreach ($results as $result) {
        //     $result->update(request(['scoreA']));
        //     $result->update(request(['scoreB']));
        // }

        //dd($request->result);

        $i = 0;

        // $result = Result::find($id);
        // $result->update(["socreA", "scoreB"]);

        foreach ($request->all() as $result) {
            if($i != 0){
                $resultFound = Result::find($result["id"]);
                $resultFound->scoreA = $result["scoreA"];
                $resultFound->scoreB = $result["scoreB"];
                $resultFound->touch();
                $resultFound->save();
                // dd($algo);
                // echo("<br>");
                // echo($algo["scoreA"]);
                // echo($algo["scoreB"]);
                //dd($resultFinded);
            }
            $i++;
        }


        //$result = $request->result;

        // foreach ($result as $r) {
        //     echo("<br>");
        //     echo($r["nombre"]);
        //     echo($r["apellido"]);
        // }

        
    }
}
