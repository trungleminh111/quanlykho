@extends('layout')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic form</h4>
            <p class="card-description"> Basic form elements </p>
            <form class="forms-sample" action="{{ route('categories.store') }}" method="post">
                {{ csrf_field() }}
               

                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="name" value="" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Description</label>
                    <input type="text" name="desc" value=""  class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div>
                
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection