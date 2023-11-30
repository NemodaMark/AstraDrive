@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <style>
            .question-divider {
                margin-top: 20px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
            }
            .bg-light-green {
                background-color: #d1f7d4;
                color: #28a745;
                border: 1px solid #28a745;
                border-radius: 5px;
            }
        </style>

        <form action="{{ route('quiz.submit') }}" method="post" @if(session('score')) disabled @endif>
            @csrf

            @foreach ($questions as $key => $question)
                @if($key > 0)
                    <!-- Horizontal line -->
                    <hr class="question-divider">
                @endif

                <p>{{ $question->question }}</p>

                @foreach ($question->answers as $index => $answer)
                    <label>
                        <input type="radio" class="form-check-input" name="answers[{{ $question->id }}]" value="{{ $answer }}" required
                               @if(session('score')) disabled @endif>
                        {{ $answer }}
                    </label>
                @endforeach
            @endforeach

            <div class="mt-3">
                <button type="submit" class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-send" viewBox="0 0 16 16">
                        <path
                            d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                    </svg> Válaszok beküldése
                </button>
            </div>
        </form>
    </div>
</div>
@if(session('score'))
    @php
        $incorrectlyAnsweredQuestions = [];
    @endphp
    @foreach ($questions as $question)
        @if ($question->correct_answer !== old('answers.' . $question->id))
            @php
                $incorrectlyAnsweredQuestions[] = $question;
            @endphp
        @endif
    @endforeach

    @if(count($incorrectlyAnsweredQuestions) > 0)
        <div class="score-box mt-4 mb-4 p-3 bg-light-green">
            <p>Megválaszolt kérdések:</p>
            <ol>
                @foreach ($incorrectlyAnsweredQuestions as $index => $question)
                    <li>
                        {{ $index + 1 }}.
                        {{ $question->question }}
                        <br>
                        Helyes válasz: {{ $question->correct_answer }}
                    </li>
                @endforeach
            </ol>
            <br>
            Elért pontszám: {{ session('score') }}
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi bi-check2-circle" viewBox="0 0 16 16">
                <path
                    d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                <path
                    d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
            </svg>
        </div>
    @endif
@endif
@endsection
