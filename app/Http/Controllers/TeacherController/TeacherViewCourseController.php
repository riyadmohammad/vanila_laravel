<?php

namespace App\Http\Controllers\TeacherController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Course;


class TeacherViewCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Course::all();
        return view('teacher.teacherViewCourse', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        
        $data = Course::find($id);
        return view('teacher.teacherEditCourse', compact('data'));
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
        $validation = Validator::make($request->all(), [

			'courseType'=>'required',
			'batchType'=>'required',
			'day'=>'required',
			'time'=>'required',
			'fees'=>'required | integer',
        ]);

        if($validation->fails()){

            return response()->json(['errors'=>$validation->errors()->all()]);
        }

        $data = Course::find($id);

        $data->courseType = $request->courseType;
        $data->batch = $request->batchType;
        $data->classDay = $request->day;
        $data->classTime = $request->time;
        $data->fees= $request->fees;
        $data->save();

        return response()->json(['success'=>'Record is successfully added']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Course::destroy($id);
        return back();
    }
}
