@extends('layouts.dashboard')

@section('content')
    @if ($errors->any())
        <div class="row">
            <div class="col-12 bg-danger">
                Ci sono errori...
            </div>
        </div>
    @endif

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <div @error('title')
            class="is-invalid"
        @enderror>
            <label for="title">Titolo: </label>
            <input type="text" name="title" required minlength="5" maxlength="255" value="{{ old('title', '') }}">

            @error('title')
                <div class="text-danger"> {{ $message }} </div>
            @enderror

        </div>

        <div @error('content')
            class="is-invalid"
        @enderror>
            <label for="content">Contenuto: </label>
            <textarea name="content" required cols="30" rows="10">{{ old('content', '') }}</textarea>

            @error('content')
                <div class="text-danger"> {{ $message }} </div>
            @enderror

        </div>

        <div>
            <input type="submit" value="Crea">
        </div>

    </form>
@endsection
