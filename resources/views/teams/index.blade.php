@extends('layout')

@section('body')

@foreach ($teams as $team)
    
    <h1><a href="team/{{ $team->id }}">{{ $team->nameTeam }}</a></h1>
    
@endforeach

<a href="team/create">Create Team</a>
@endsection()
