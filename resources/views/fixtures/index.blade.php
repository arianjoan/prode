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
                    <input type="hidden" name="result{{$result->id}}[id]" value="{{$result->id}}">
                        <td>{{date("d/m/y",strtotime($result->match->dateMatch))}}</td>
                        <td>{{$result->match->teamA->nameTeam}}</td>
                    <td><input type="number" style="width:50px" name="result{{$result->id}}[scoreA]" value="{{$result->scoreA}}"></td>
                        <td>VS</td>
                        <td><input type="number" style="width:50px" name="result{{$result->id}}[scoreB]" value="{{$result->scoreB}}"></td>
                        <td>{{$result->match->teamB->nameTeam}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <input type="submit" class="btn btn-primary" value="ENVIAR">
        </div>
    </form>


@endSection()