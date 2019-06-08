@extends('index')

@section('indexSection')

<h1>Edit Match: {{ $match->teamA->nameTeam }} vs {{ $match->teamB->nameTeam }}</h1>

    <form action="/match/{{ $match->id }}" method="post">
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
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ $team->id == $match->teamA->id ? 'selected' : '' }}> {{ $team->nameTeam }} </option>
                    @endforeach                
                </select>
            </div>
        </div>

        <div class="field">
            <label for="teamB" class="field">Equipo B:</label>

            <div class="control">
                <select name="id_teamB">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ $team->id == $match->teamB->id ? 'selected' : '' }}> {{ $team->nameTeam }} </option>
                    @endforeach                
                </select>
            </div>
        </div>

        <button type="submit">Update Match</button>
    </form>

@endsection