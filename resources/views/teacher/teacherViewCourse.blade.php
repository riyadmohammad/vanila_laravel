
@extends('layouts.admin')

@section('adminViewCourse')
<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
            <li>
                    <i class="fas fa-users"></i> <a class="ad-active" href="{{route('teacher.home')}}">Profile</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('teacher.createCourse')}}">Create Course</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('teacher.viewCourse')}}">View Course</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('teacher.viewStudent')}}">Student Info</a>
                </li>
                <li>

                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('teacher.notesUp')}}">Notes Upload</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('teacher.noticeUp')}}">Notice Upload</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('teacher.marks')}}">Create Marks</a>
                </li>
                <li>
                    <i class="fas fa-hands-helping"></i> <a href="{{route('teacher.alert')}}">Alert Parents</a> 
                </li>
            </ul>
        </div>

        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 mb-4 mr-auto">
                        <h1> Course Details</h1>
                    </div>
                    <div class="col-lg-10">
                        <table class="table table-hover table-primary">
                            <thead class="table-danger">
                            <tr>
                                <th>COURSE ID</th>
                                <th>COURSE TYPE</th>
                                <th>BATCH</th>
                                <th>DAY</th>
                                <th>Time</th>
                                <th>FEES</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $course)
                                <tr>
                                    <th>{{$course->id}}</th>
                                    <th>{{$course->courseType}}</th>
                                    <th>{{$course->batch}}</th>
                                    <th>{{$course->classDay}}</th>
                                    <th>{{date('h:i:s a ', strtotime($course->classTime))}}</th>
                                    <th>{{$course->fees}}</th>
                                    <th>
                                        <a href="{{route('teacher.editCourse',$course->id)}}" class="btn btn-warning">Edit</a>
                                        <a href="{{route('teacher.deletCourse', $course->id)}}" class="btn btn-danger">Delete</a>
                                    </th>
                                </tr>
                                @endforeach'
                            </tbody> 

                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
