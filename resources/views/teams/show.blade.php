@extends('index')

@section('indexSection')

<h1>{{ $team->nameTeam }}</h1>


<a href="/team/{{ $team->id }}/edit">Edit</a>

<form action="/team/{{ $team->id }}" method="POST">
    @method('DELETE')
    @csrf

    <button type="submit">Delete Team</button>
</form>

@endsection