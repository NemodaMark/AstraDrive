<?php
// app/Http/Controllers/QuizController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function show()
    {
        $questions = DB::table('quiz_questions')->get();

        foreach ($questions as &$question) {
            $answers = [
                $question->correct_answer,
                $question->wrong_answer1,
                $question->wrong_answer2,
                $question->wrong_answer3,
            ];

            // Keversz válaszlehetőségeket
            shuffle($answers);

            $question->answers = $answers;
        }

        return view('alsites.quiz', compact('questions'));
    }

    public function submit(Request $request)
    {
        $questions = DB::table('quiz_questions')->get();
        $totalScore = 0;

        foreach ($questions as $question) {
            $selectedAnswer = $request->input('answers.' . $question->id);
            $correctAnswer = $question->correct_answer;

            if ($selectedAnswer === $correctAnswer) {
                $totalScore += 1;
            }
        }

        // Itt tárold el a pontokat az adatbázisban a felhasználóhoz
        // (A pontos logika a projekt igényeitől függ)
        if ($totalScore > 0) {
            DB::table('quiz_results')->updateOrInsert(
                ['user_name' => auth()->user()->name],
                ['score' => DB::raw('score + ' . $totalScore), 'updated_at' => now()]
            );
        }

        return redirect()->route('quiz.show')->with('success', 'Quiz submitted successfully!')->with('score', $totalScore);
    }
}
