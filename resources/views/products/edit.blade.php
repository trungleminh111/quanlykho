@extends('layout')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic form</h4>
            <p class="card-description"> Basic form elements </p>
            <form class="forms-sample" action="{{ route('products.update', $product->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="" name="name" value="{{ $product->name }}" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">img</label>
                    <input type="text" name="img" value="{{ $product->img }}"  class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Description</label>
                    <input type="text" name="desc" value="{{ $product->desc }}"  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Price</label>
                    <input type="text" name="price" value="{{ $product->price }}"  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Import price</label>
                    <input type="text" name="import_price" value="{{ $product->import_price }}"  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Unit</label>
                    <input type="text" name="unit" value="{{ $product->unit }}"  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Quantity</label>
                    <input type="text" name="quantity" value="{{ $product->quantity }}"  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Category</label>
                    <input type="text" name="category_id" value="{{ $product->category_id }}"  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
               
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection