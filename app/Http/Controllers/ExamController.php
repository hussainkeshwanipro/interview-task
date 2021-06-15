<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Exam::get();
        return view('exam.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exam.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $request->validate([
            'question'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'answer'=>'required',
        ]);

        $std = new Exam();
        $std->question = $request->question;
        $std->a = $request->a;
        $std->b = $request->b;
        $std->c = $request->c;
        $std->d = $request->d;
        $std->answer = $request->answer;
        $std->save();
        return redirect()->route('exam.index')->with('status', 'Question Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        return view('exam.edit', compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            'question'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'answer'=>'required',
        ]); 
        
        $std = Exam::find($exam->id);
        $std->question = $request->question;
        $std->a = $request->a;
        $std->b = $request->b;
        $std->c = $request->c;
        $std->d = $request->d;
        $std->answer = $request->answer;
        $std->save();
        return redirect()->route('exam.index')->with('status', 'Question Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $std = Exam::find($exam->id);
        $std->delete();
        return redirect()->route('exam.index')->with('status', 'Question Deleted Successfully');
        
    }

    public function questionPaper()
    {
        $data = Exam::get();
        return view('exam.question', compact('data'));
    }

    public function paperSubmit(Request $request)
    {
        $data = $request->all();
        $qus = Exam::get();
        
        $res = 0;
        $wrong = 0;
        $right = 0;
        foreach($qus as $q)
        {
            
            if($q->answer == $data[$q->id])
            {
                $nres = 1;
                $nwrong = 0;
                $nright = 1;
            } 
            else
            {
                $nres = -0.25;
                $nwrong = 1;
                $nright = 0;
            }
            $res += $nres;
            $wrong += $nwrong;
            $right += $nright;
        }
        
        echo "Result ".$res ."<br>";
        echo "wrong answer ".$wrong ."<br>";
        echo "right answer ".$right ."<br>";
        
    }
}
