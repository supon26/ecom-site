
@extends('backend.master')

@section('main-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update Product :</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">
                <a href="{{route('product.manage')}}">Manage Product</a>
            </li>
        </ol>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data" class="shadow p-4">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="p_name">Product Name :</label>
                        <input type="text" name="p_name" id="p_name" value="{{$product->product_name}}" class="form-control shadow-none rounded-0">
                    </div>
                    <div class="form-group mb-3">
                        <label for="p_image">Product Image :</label>
                        <input type="file" name="p_image" id="p_image" class="form-control shadow-none rounded-0">
                        <img src="{{asset('uploads/products/'.$product->product_image)}}" width="100" alt="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="c_price">Price :</label>
                        <input type="text" name="price" id="price" value="{{$product->price}}" class="form-control shadow-none rounded-0">
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" name="" value="Update Product" class="btn btn-success form-control shadow-none rounded-0">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
