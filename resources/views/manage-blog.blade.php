@extends('master')

@section('title')
    Manage Blogs
@endsection

@section('body')

    <section class="py-5 mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">All Blogs</div>
                        <div class="card-body">

                            <table class="table table-bordered table-hover table-striped">
                                <thead class="bg-light">
                                <tr class="text-center">
                                    <th>Sl no</th>
                                    <th>Blog ID</th>
                                    <th>Blog Title</th>
                                    <th>Author Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->id}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->author}}</td>
                                        <td>{{$blog->description}}</td>
                                        <td>
                                            <a href="{{route('edit-blog',['id'=>$blog->id])}}" class="btn btn-success btn-sm mr-2">
                                                <i class="fa fa-user-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm ml-2">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
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

@endsection
