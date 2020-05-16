@extends('layouts.admin')

@section('adminSendMail')
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
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card p-3">
                            <h4 class="card-header text-center font-weight-bold my-3">Email Details</h4>

                            <div class="px-3 text-center">
                                @foreach($errors->all() as $err)
                                <span style="background-color: #0043ff5e; padding:6px; font-size: 18px;  font-weight: 700; display:block;"
                                >{{$err}} </span>
                                @endforeach

                                <form action="" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="To" class="font-weight-bold">To</label>
                                        <input type="text" class="form-control" id="topic" name="recipients" readonly value="{{$data->parentEmail}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="subject" class="font-weight-bold">Subject</label>
                                        <input type="subject" class="form-control" id="topic" placeholder="subject" name="subject">
                                    </div>

                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label for="subject" class="font-weight-bold">Message</label>
                                        <textarea class="form-control" type="text" placeholder="Message" name="message" id="message" rows="6"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
