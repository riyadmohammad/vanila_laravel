<?php

namespace App\Http\Controllers\TeacherController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Registration;
use App\Model\Login;
use DB;


class TeacherSudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $student_data = Login::where('utype','student');
        // // if($student_data=='student') {

        // //     $student=Registration::all();
           
        // // }
        // $student=Login::where('utype','=','student');
        // $student_data=Registration::where('email','=','$atudent->uemail');


        $student=Registration::where('email','$student_data->uemail');
        $student_data=DB::table('registrations')
        ->join('logins', 'registrations.id', '=', 'logins.regid')
        ->select('registrations.*', 'logins.utype')
        ->where('logins.utype','=','student')
        ->get();

        


        return view('teacher.teacherViewStudent',compact('student_data'));


        
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
