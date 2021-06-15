<?php

namespace App\Http\Controllers;

use App\Record;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function login(Request $request, $id)
    {
        $dt = Carbon::now();

        $data = Student::find($id);
        if($data->status == 0)
        {
            
            $log = new Record();
            $log->student_id = $id;
            $log->date = $dt->toDateString();
            $log->login_time = $dt->format('h:i:s');
            $request->session()->put('t', $dt->format('h:i:s'));
            $log->save();
            
            $data->status = 1;
            $data->save();
        }
        
        return redirect()->back();

    }

    public function logout($id, Request $request)
    {
        $t = $request->session()->get('t');
        $dt = Carbon::now();
       
        $data = Student::find($id);
        if($data->status == 1)
        {
            $log = Record::where('login_time', $t)->first();
            $log->logout_time = $dt->format('h:i:s');;
            $log->save();


            $diff =Record::where('login_time', $t)->first();
            $start = Carbon::parse($diff['login_time']);
            $end = Carbon::parse($diff['logout_time']);
            $diff->time_diff = $start->diffInSeconds($end);
            $diff->save();

            $request->session()->forget('t');

            $data->status = 0;
            $data->save();
        }
        return redirect()->back();

    }
}
