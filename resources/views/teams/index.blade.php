@extends('index')
@section('indexSection')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
      </tr>
    </thead>
    <tbody>
    @foreach($teams as $team)
      <tr>
        <th scope="row">{{$team->id}}</th>
        <td>{{$team->nameTeam}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection()
