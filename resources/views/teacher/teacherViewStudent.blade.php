
@extends('layouts.admin')

@section('adminViewStudent')
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
                    <i class="fas fa-users"></i> <a href="#">Student Info</a>
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
                        <h1>Student Info</h1>
                    </div>
                    {{-- <div class="col-lg-10 mb-4">
                        <nav class="navbar navbar-light bg-light">
                            <form class="form-inline ml-auto">
                              <input type="search"  class="form-control mr-sm-2" type="search" placeholder="Search" id="search">
                            </form>
                          </nav>
                    </div> --}}

                    <div class="col-lg-10 ajaxdata">
                        <table class="table table-hover table-primary" id="myTable" >
                            <thead class="table-danger">
                            <tr>
                                <th>STUDENT ID</th>
                                <th>STUDENT NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th>Parent Email</th>
                                
                            </tr>
                            </thead>
                            
<tbody>
                                @foreach ($student_data as $student)
                                <tr>
                                    <th>{{$student->id}}</th>
                                    <th>{{$student->name}}</th>
                                    <th>{{$student->email}}</th>
                                    <th>{{$student->phone}}</th>
                                    <th>{{$student->parentEmail}}</th>
                                   
                                   
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

<!-- <script type="text/javascript">

 $(document).ready( function () {

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        });
});
        var table1= $('#myTable').DataTable({

        processing: true,
        serverSide: true,
        ajax: "{!! route('teacher.viewStudent') !!}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email', searchable:false},
            { data: 'phone', name: 'phone' },
            { data: 'utype', name: 'utype', searchable:false },
            { data: 'action', name: 'action', orderable: false, searchable:false}
        ]
    });

    function deleteData(id){
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        });

        $.ajax({
            type: "post",
            url:"{{URL::to('/teacher/viewStudent')}}"+'/'+id,
            success: function (data) {
                table1.ajax.reload();
                alert(data.success);
            }
        });
    }

</script> -->

@endsection
