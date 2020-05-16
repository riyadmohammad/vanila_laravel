@extends('layouts.admin')

@section('adminNoticeUpload')

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
                    <i class="fas fa-users"></i> <a href="#">Create Marks</a>
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
                        <h1>Notice Upload</h1>
                    </div>
                    <div class="col-lg-5">

                        {{-- errors shows --}}
                        <div class="alert-danger"></div>

                        <form class="form" action="{{route('teacher.noticeUp')}}" method="POST" id="sub">
                            <div class="form-group">
                                <label for="topic" class="font-weight-bold">Topic</label>
                                <input type="text" class="form-control" id="topic" placeholder="enter topic" name="topic">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" class="font-weight-bold">Details</label>
                                <textarea class="form-control" id="details" rows="6" placeholder="write something" name="details"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" >Upload</button>
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
          var url = "{{route('teacher.noticeUp')}}"
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
                    $('#topic').val('');
                    $('#details').val('');
                    alert(data.success);
                 }
            }
          });
       });
    });
</script>

@endsection
