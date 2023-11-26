<!-- resources/views/alsites/quiz.blade.php -->

@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <form action="{{ route('quiz.submit') }}" method="post">
            @csrf

            @foreach ($questions as $question)
                <p>{{ $question->question }}</p>

                @foreach ($question->answers as $answer)
                    <label>
                        <input type="radio" name="answers[{{ $question->id }}]" value="{{ $answer }}" required>
                        {{ $answer }}
                    </label>
                @endforeach
            @endforeach

            <div class="mt-3">
                <button type="submit" class="btn btn-warning">Válaszok beküldése</button>
            </div>
        </form>

        @if(session('score'))
            <div class="mt-3">
                <p>Elért pontszám: <span class="score">8/{{ session('score') }}</span> <i class="fas fa-check"></i></p>
            </div>
        @endif
    </div>
</div>
@endsection
