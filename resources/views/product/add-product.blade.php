@extends('master')

@section('title')
    Add Products
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">Add Product</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <form action="{{route('new-product')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Product name" class="form-control border-dark" name="name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control border-dark" name="category"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Brand </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control border-dark" name="brand"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control border-dark" name="price"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control border-dark" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control-file" name="image"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Create Product" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

