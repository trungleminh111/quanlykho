@extends('layout')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic form</h4>
            <p class="card-description"> Basic form elements </p>
            <form class="forms-sample" action="{{ route('products.store') }}" method="post">
                {{ csrf_field() }}
              
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="" name="name" value="" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">img</label>
                    <input type="text" name="img" value=""  class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Description</label>
                    <input type="text" name="desc" value=""  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Price</label>
                    <input type="text" name="price" value=""  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Import price</label>
                    <input type="text" name="import_price" value=""  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Unit</label>
                    <input type="text" name="unit" value=""  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Quantity</label>
                    <input type="text" name="quantity" value=""  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Category</label>
                    <input type="text" name="category_id" value=""  class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
               
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection