
@extends('layouts.admin')


@section('adminApproveStudent')
<section>
    <div id
="wrapper">
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
                        <h1> Approval Student</h1>
                    </div>
                    <div class="col-lg-10">
                        <table class="table table-hover table-primary">
                            <thead class="table-danger">
                            <tr>
                                <th>STUDENT ID</th>
                                <th>STUDENT NAME</th>
                                <th>Status</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $user)
                                    <tr>
                                        <th>{{$user->id}}</th>
                                        <th>{{$user->uname}}</th>
                                        <th>{{$user->ustatus}}</th>
                                        <th>
                                            <a href="{{route('admin.confirmApproveStudent',$user->id)}}" class="btn btn-warning">Yes</a>
                                            <a href="{{route('admin.denyStudent',$user->id)}}" class="btn btn-info">No</a>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
