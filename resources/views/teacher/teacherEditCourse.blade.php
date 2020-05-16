@extends('layouts.admin')

@section('adminEditCourse')
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
                        <h1>Update Course</h1>
                         <div class="alert-danger">

                        </div>

                        <form class="form" id="sub">
                            <div class="form-group">
                            <h5 class="mt-3">Course Type</h5>
                            <select class="form-control" name="courseType" id="courseType" value="{{$data->courseType}}">
                                <option> Model Test </option>
                                <option> Revision </option>
                                <option> Regular </option>
                            </select>
                            </div>

                            <div class="form-group">
                            <h5>Batch</h5>
                            <select class="form-control" name="batchType" id="batchType" value="{{$data->batch}}">
                                <option> SSC </option>
                                <option> HSC </option>
                            </select>
                            </div>

                            <div class="form-group">
                            <h5>Class Day</h5>
                            <select class="form-control" name="day" id="day" value="{{$data->classDay}}">
                                <option> Sunday & Tuesday </option>
                                <option> Monday & Wednesday </option>
                                <option> thursday & Saturday </option>
                            </select>
                            </div>

                            <div class="form-group">
                               <h5> Time </h5>
                                <input type="time" class="form-control" id="time"
                                name="time" value="{{$data->classTime}}">
                            </div>

                            <div class="form-group">
                                <h5> Fees</h5>
                                <input type="text" class="form-control" id="fees" name="fees" placeholder="enter fees" value="{{$data->fees}}">
                            </div>
                            <button type="submit" class="btn btn-info" >Update</button>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">

    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
             }
          });


        $('#sub').submit(function(e){
          e.preventDefault();
          var data = $(this).serialize();
          var url = "{{route('admin.updateCourse',$data->id)}}"
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
                    alert(data.success);
                 }
            }
          });
       });
    });
</script>

@endsection
