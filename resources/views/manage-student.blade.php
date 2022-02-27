@extends('master')

@section('title')
    Manage Student
@endsection

@section('body')

    <section class="py-5 mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">All Student</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead class="bg-light">
                                <tr class="text-center">
                                    <th>Sl no</th>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Student Email</th>
                                    <th>Student Mobile</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                <tr class="text-center">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->mobile}}</td>
                                    <td>
                                        <a href="{{route('edit-student',['id'=> $student->id])}}" class="btn btn-success btn-sm mr-2">
                                            <i class="fa fa-user-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm ml-2"onclick="deleteStudent({{$student->id}})">
                                            <i class="fa fa-trash-alt"></i>
                                        </a>
                                        <form action="{{route( 'delete-student',[ 'id' => $student->id])}}" id="deleteStudentForm{{$student->id}}" method="POST">
                                            @csrf
                                        </form>

                                    </td>
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
    <script>
        function deleteStudent(id) {
            event.preventDefault();
            var check = confirm('Are you sure to delete this...');
            if(check){
                document.getElementById('deleteStudentForm'+id).submit();
            }
        }
    </script>
@endsection
