<?php

namespace App\Http\Controllers\TeacherController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Course;
use App\Model\Result;
use App\Model\Login;
use App\Model\Registration;

use Validator;


class TeacherMarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course_id=Course::all();
    
        return view('teacher.teacherCreateMarks',compact('course_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [

			'examType'=>'required',
			'examName'=>'required',
			'courseId'=>'required',
			'userId'=>'required | integer | exists:registrations,id',
			'marks'=>'required | regex:/^\d+(\.\d{2})?$/',
        ]);

        if($validation->fails()){
            return response()->json(['errors'=>$validation->errors()->all()]);
        }else{

            $check = Login::where('regid', $request->userId)->first();

            if($check->utype == "teacher" | $check->utype == "admin"){
                return response()->json(['success'=>'The selected user id is invalid']);
            }

            $mark = new Result();
            $mark->examType = $request->examType;
            $mark->examName = $request->examName;
            $mark->cid = $request->courseId;
            $mark->sid = $request->userId;
            $mark->marks= $request->marks;
            $mark->save();

            return response()->json(['success'=>'Record is successfully added']);

        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
