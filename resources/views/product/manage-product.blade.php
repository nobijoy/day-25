@extends('master')

@section('title')
    Manage Products
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
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->brand}}</td>
                                        <td>{{$product->price}} &#2547;</td>
                                        <td>{{$product->description}}</td>
                                        <td><img src="{{asset($product->image)}}" width="100"/></td>
                                        <td>
                                            <a href="{{route('edit-product',['id'=> $product->id])}}" class="btn btn-success btn-sm mr-2">
                                                <i class="fa fa-user-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm ml-2"onclick="deleteProduct({{$product->id}})">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                            <form action="{{route( 'delete-product',[ 'id' => $product->id])}}" id="deleteProductForm{{$product->id}}" method="POST">
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
        function deleteProduct(id) {
            event.preventDefault();
            var check = confirm('Are you sure to delete this...');
            if(check){
                document.getElementById('deleteProductForm'+id).submit();
            }
        }
    </script>
@endsection

