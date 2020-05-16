@extends('layouts.teacher')

@section('teacherHome')
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
                    <div class="col-lg-6">
                        <h1 class="mt-5">Teachers Info</h1>
                        @foreach($errors->all() as $err)
                        <span style="background-color: #0043ff5e; padding:6px; font-size: 18px;  font-weight: 700; display:block;"
                        >{{$err}} </span>
                        @endforeach
                        <form action="{{route('teacher.profileUpdate',['id'=>$data->id])}}" method="post" class="mt-5">
                        {{csrf_field()}}
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" value="{{$data->name}}" readonly>
                            </div>
                            <div class="form-group">
                              <label for="email1">Email address</label>
                              <input type="email" name ="email" class="form-control" value="{{$data->email}}">
                            </div>
                            <div class="form-group">
                              <label for="pass">Password</label>
                              <input type="password" name="password" class="form-control" value="{{$data->password}}">
                            </div>
                           
        
                            <button type="submit" class="btn btn-success">Update</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <script>

    function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

</script> -->
@endsection



