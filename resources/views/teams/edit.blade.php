@extends('index')

@section('indexSection')

<h1>Edit Team: {{ $team->nameTeam }}</h1>

    <form action="/team/{{ $team->id }}" method="post">
        @csrf
        @method('PATCH')

        <input type="text" name="nameTeam" value="{{ $team->nameTeam }}">

        <button type="submit">Update Team</button>
    </form>

@endsection