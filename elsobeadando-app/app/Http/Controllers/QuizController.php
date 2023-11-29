<?php

// app/Http/Controllers/QuizController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function show()
    {
        // Check if the user is authenticated
        if (Auth::check() && Auth::user()->name !== null) {
            $questions = DB::table('quiz_questions')->inRandomOrder()->limit(10)->get();

            foreach ($questions as &$question) {
                $answers = [
                    $question->correct_answer,
                    $question->wrong_answer1,
                    $question->wrong_answer2,
                    $question->wrong_answer3,
                ];

                // Shuffle answer options
                shuffle($answers);

                $question->answers = $answers;
            }

            return view('alsites.quiz', compact('questions'));
        } else {
            return view('auth.login');
        }
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
    
        // Store the points in the database for the user
        // (The exact logic depends on the project requirements)
        if ($totalScore > 0) {
            $userName = auth()->user()->name;
    
            // Update quiz_results table
            DB::table('quiz_results')->updateOrInsert(
                ['user_name' => $userName],
                ['score' => $totalScore, 'updated_at' => now()]
            );
    
            // Update users table and set points to the new totalScore
            DB::table('users')->where('id', auth()->user()->id)->update(['point' => $totalScore]);
        }
    
        return redirect()->route('quiz.show')->with('success', 'Quiz submitted successfully!')->with('score', $totalScore);
    }
    
}
