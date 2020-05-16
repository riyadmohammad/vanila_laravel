
@extends('layouts.admin')

@section('adminMarksCreate')
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
                        <h1>Student Marks Entry</h1>
                    </div>
                    <div class="col-lg-5">

                        {{-- errors shows --}}
                        <div class="alert-danger"></div>

                        <form class="form" action="{{route('teacher.marks')}}" method="POST" >
                                @csrf
                            <div class="form-group">
                            <h5>Exam Type</h5>
                            <select class="form-control" name="examType" id="examType">
                                <option> Quiz </option>
                                <option> Written </option>
                                <option> Objective </option>
                            </select>
                            </div>


                            <div class="form-group">
                            <h5>Exam Name</h5>
                            <select class="form-control" name="examName" id="examName">
                                <option> Quiz 1 </option>
                                <option> Quiz 2 </option>
                                <option> Quiz 3 </option>
                                <option> Written </option>
                                <option> Objective</option>
                            </select>
                            </div>

                            <div class="form-group">
                                <h5> Course Id</h5>
                                <select class="form-control" name="courseId" id="courseId">
                                
                                     @foreach ($course_id as $id)
                                        <option> {{$id->id}} </option>
                                    @endforeach

                                 
                                </select>
                            </div>

                            <div class="form-group">
                                <h5> Student Id </h5>
                                <input class="form-control" id="userId" name="userId" placeholder="enter userId">
                            </div>

                            <div class="form-group">
                                <h5> Marks</h5>
                                <input class="form-control" id="marks" name="marks" placeholder="enter marks">
                            </div>
                            <button type="submit" class="btn btn-primary">upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- <script type="text/javascript">

    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
             }
          });

        $('#sub').submit(function(e){
          e.preventDefault();
          var data = $(this).serialize();
          var url = "{{route('teacher.marks')}}"
         $.ajax({
             url: url,
             method: 'POST',
             data:data ,
             success: function(data){
                 if(data.success == undefined){
                    $(".alert-danger p").remove();
                    $.each(data.errors, function(key, value){
                        $('.alert-danger').show();
                        $('.alert-danger').append('<p>'+value+'</p>');
                    });
                 }
                 else{
                    $(".alert-danger p").remove();
                    $('#userId').val('');
                    $('#marks').val('');
                    alert(mark.success);
                 }
            }
          });
       });
    });
</script> -->


@endsection
