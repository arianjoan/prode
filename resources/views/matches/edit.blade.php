@extends('index')

@section('indexSection')

<h1>Edit Match: {{ $match->teamA }} vs {{ $match->teamB }}</h1>

    <form action="/team/{{ $match->id }}" method="post">
        @csrf
        @method('PATCH')

        <div class="field">
            <label for="name" class="field">Grupo:</label>

            <div class="control">
                <input type="text" name="name" value="{{ $match->name }}">
            </div>
        </div>

        <div class="field">
            <label for="teamA" class="field">Equipo A:</label>

            <div class="control">
                <select name="id_teamA">
                    @foreach ($match as $match)
                        <option value="{{ $team->id }}" @if($match->id)> {{ $team->nameTeam }} </option>
                    @endforeach                
                </select>
            </div>
        </div>

        <button type="submit">Update Match</button>
    </form>

@endsection