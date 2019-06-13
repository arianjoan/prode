@extends('index')
@section('indexSection')

    <h1>GRUPO A</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Equipo</th>
            <th scope="col"></th>
            <th scope="col">Equipo</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)
            @if($match->name == "A")
                <tr>
                    <th scope="row">{{$match->id}}</th>
                    <td>{{date("d/m/y",strtotime($match->dateMatch))}}</td>
                    <td>{{$match->teamA->nameTeam}}</td>
                    <td>VS</td>
                    <td>{{$match->teamB->nameTeam}}</td>
                    <td><a class="btn btn-primary" href="{{ route('match.edit', ['id' => $match->id]) }}" role="button">Editar</a></td>
                </tr>
                @endif
        @endforeach
        </tbody>
      </table>


    <h1>GRUPO B</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Fecha</th>
            <th scope="col">Equipo</th>
            <th scope="col"></th>
            <th scope="col">Equipo</th>
          </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)
            @if($match->name == "B")
                <tr>
                    <th scope="row">{{$match->id}}</th>
                    <td>{{date("d/m/y",strtotime($match->dateMatch))}}</td>
                    <td>{{$match->teamA->nameTeam}}</td>
                    <td>VS</td>
                    <td>{{$match->teamB->nameTeam}}</td>
                </tr>
                @endif
        @endforeach
        </tbody>
      </table>



    <h1>GRUPO C</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Fecha</th>
            <th scope="col">Equipo</th>
            <th scope="col"></th>
            <th scope="col">Equipo</th>
          </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)
            @if($match->name == "C")
                <tr>
                    <th scope="row">{{$match->id}}</th>
                    <td>{{date("d/m/y",strtotime($match->dateMatch))}}</td>
                    <td>{{$match->teamA->nameTeam}}</td>
                    <td>VS</td>
                    <td>{{$match->teamB->nameTeam}}</td>
                </tr>
                @endif
        @endforeach
        </tbody>
      </table>


@endSection()