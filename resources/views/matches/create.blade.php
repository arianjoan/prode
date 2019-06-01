@extends('layout')

@section('body')

<form action="/match" method="POST">
@csrf

    <div class="field">
        <label class="label" for="teamA">Team Name A</label>

        <div class="control">
            <select name="id_teamA">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}"> {{ $team->nameTeam }} </option>
                @endforeach                
            </select>
        </div>

    </div>

    <div class="field">
        <label class="label" for="teamB">Team Name B</label>

        <div class="control">
            <select name="id_teamB">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->nameTeam }}</option>
                @endforeach                
            </select>
        </div>

    </div>

    <div class="field">
        Fecha y Hora del partido: <input type="datetime" name="dateMatch" placeholder="YYYY/MM/DD HH:MM:SS">
    </div>

    <div class="button">
        <button type="submit">Create Match</button>
    </div>


</form> 