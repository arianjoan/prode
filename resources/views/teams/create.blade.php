@extends('index')

@section('indexSection')

    <form action="/team" method="post">
    @csrf

        <div class="field">
            <label for="nameTeam" class="label">Team name</label>

                <div class="control">
                    <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="nameTeam" values="{{ old('nameTeam') }}">
                </div>   
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Team</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>

@endsection