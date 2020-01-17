<?php 

namespace App\Http\Controllers\Admin;
use App\User;
// 16/01/20
use App\Quiz;
use App\Question;
use App\Answer;
use App\CorrectAnswer;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered()
    {
    	$users = User::all();
    	return view('admin.registered')->with('users',$users);
    }
    public function registeredEdit(Request $request, $id)
    {
    	$users = User::findOrFail($id);
    	return view('admin.registered-edit')->with('users', $users);
    }

    public function registeredUpdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/registered')->with('success','Your Data is Updated'); 
    }
    public function registeredDelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/registered')->with('success','You Delete One Users');
    }

    // create quiz 15/01/20
    public function createQuiz(Request $request)
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        //Get Request Data
        $data = $request->all();

        //Create Quiz instance
        $quiz = new Quiz;
        $quiz->user_id = Auth::user()->id;
        $quiz->quiz = $data['quiz-name'];
        $quiz->save();
        //Create Question Instance
        foreach ($data['question'] as $question_key => $question) {
            $question_instance = new Question;
            $question_instance->quiz_id = $quiz->id;
            $question_instance->question = $question['question-text'];
            $question_instance->save();
            //Create Answer Instance
            foreach ($question['answers'] as $answer_key => $answer ) {
                if($answer_key != "is_correct") {
//                    var_dump($answer_key);
                    $answer_instance = new Answer;
                    $answer_instance->question_id = $question_instance->id;
                    $answer_instance->answer = $answer;
                    $answer_instance->save();
                }
                if($answer_key == 'is_correct'){
                    //Create CorrectAnswer instance
                    $correct_answer = CorrectAnswer::create(['question_id' => $question_instance->id, 'answer_id' => $answer_instance->id ]);
                }
            }
        }
        $quizzes = Quiz::all();
        return view('admin.create', compact('quizzes')->with('success', 'Quiz added Succefully'));
    }
}
