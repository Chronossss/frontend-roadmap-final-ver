<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\UserTest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function getTest($test_name)
    {
        return Test::with('questions.answers')->where('name', $test_name)->first();
    }


    /*
     * Данный метод сохраняет результаты теста, который прошёл пользователь
     */
    public function saveTest(Request $request, Test $test)
    {
        UserTest::create([
            'test_id' => $test->id,
            'results' => $request->get('testResults'),
            'user_id' => Auth::user()->id
        ]);
        return response(204);
    }

    public function getHistory(): JsonResponse
    {
        $user_tests = UserTest::with('test.questions.answers')->where('user_id', Auth::user()->id)
            ->orderByDesc('id')->limit(10)->get();
        $results = [];
        foreach ($user_tests as $user_test) {
            $_tmp = [
                'test_name' => $user_test->test->name,
                'results' => [],
                'good_answers' => 0
            ];
            foreach ($user_test->results as $result_answer) {
                $question = $user_test->test->questions->find($result_answer['question_id']);
                $_tmp['results'][] = [
                    'question' => $question->question,
                    'answers' => $question->answers,
                    'user_answer' => $result_answer['answer_id']
                ];
                $user_answer_is_true = $question->answers->where('id', $result_answer['answer_id'])
                    ->where('is_true', true)->first();
                if ($user_answer_is_true) {
                    ++$_tmp['good_answers'];
                }
            }
            $results[] = $_tmp;
        }
        return response()->json($results);
    }
}
