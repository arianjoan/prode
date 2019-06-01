@extends('layout')

@section('body')

<form action="/match" method="POST">
{{ csrf_field() }}

    <div class="field">
        <label class="label" for="teamA">Team Name A</label>

        <div class="control">
            <select name="teamA">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->nameTeam }}</option>
                @endforeach                
            </select>
        </div>

    </div>

    <div class="field">
        <label class="label" for="teamB">Team Name B</label>

        <div class="control">
            <select name="teamB">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->nameTeam }}</option>
                @endforeach                
            </select>
        </div>

    </div>

    <div class="button">
        <button type="submit">Create Match</button>
    </div>


</form> 