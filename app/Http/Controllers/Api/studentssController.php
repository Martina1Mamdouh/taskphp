<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\studentss;
use Carbon\Carbon;
use Illuminate\Http\Request;

class studentssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return $request;
        $student = new studentss();
        $student->id =$request->input('id');
        $student->Name =$request->input('Name');
        $student->Branch =$request->input('Branch');
        $student->GPA =$request->input('GPA');
        $student->save();

        return response()-> json($student);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $student = new studentss();
            $student->id =$request->id;
            $student->Name =$request->Name;
            $student->Branch =$request->Branch;
            $student->GPA =$request->GPA;
            $student->created_at=Carbon::now();
            $student->updated_at=Carbon::now();
            $student->save();
            return response()->json([
                'message'=>'student created succesfully',
                'student'=>$student,
                'status'=>200,

            ]);

        }catch (\Exception $e){
            return response()->json([
                'message'=>'Student not succesfully',
                'student'=>$student,
                'status'=>201,
                '4'=>$e,

            ]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\studentss  $studentss
     * @return \Illuminate\Http\Response
     */
    public function show(studentss $studentss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studentss  $studentss
     * @return \Illuminate\Http\Response
     */
    public function edit(studentss $studentss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\studentss  $studentss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studentss $studentss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studentss  $studentss
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentss $studentss)
    {
        //
    }
}
