@extends('index')
@section('indexSection')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    @foreach($teams as $team)
      <tr>
        <th scope="row">{{$team->id}}</th>
        <td>{{$team->nameTeam}}</td>
        <td><a class="btn btn-primary" href="{{ action('TeamController@edit', ['id' => $team->id]) }}" role="button">Editar</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection()
