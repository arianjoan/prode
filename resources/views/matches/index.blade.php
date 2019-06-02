@extends('index')
@section('indexSection')
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
      <tr>
        <th scope="row">{{$match->id}}</th>
        <td>{{$match->dateMatch}}</td>
        <td>{{$match->teamA->nameTeam}}</td>
        <td>VS</td>
        <td>{{$match->teamB->nameTeam}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection()