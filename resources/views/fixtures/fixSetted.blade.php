@extends('index')
@section('indexSection')

    <h1>Mi fixture</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Equipo</th>
            <th scope="col">Goles</th>
            <th scope="col"></th>
            <th scope="col">Goles</th>
            <th scope="col">Equipo</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <form action="result/updateAll" method="POST">
            @csrf
            <tbody>
                @foreach($results as $result)
                    <tr>
                        <td>{{date("d/m/y",strtotime($result->match->dateMatch))}}</td>
                        <td>{{$result->match->teamA->nameTeam}}</td>
                        <td>{{$result->scoreA}}</td>
                        <td>VS</td>
                        <td>{{$result->scoreB}}</td>
                        <td>{{$result->match->teamB->nameTeam}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>


@endSection()