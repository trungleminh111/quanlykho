@extends('layout')
@section('content')
@if(Session::has('message'))
<h3>{{ Session::get('message') }}</h3>
@endif
<div class="row">
   
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Table</h4>
                <a class="badge badge-warning btn btn-warning" href="{{ route('products.create') }}"> Create New</a>
                <p class="card-description"> Add class <code>.table</code> </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                       
                            <th>Desc</th>
                            <th>Price</th>
                            <TH>Import price </TH>
                            <TH>unit </TH>
                            <TH>quantity</TH>
                            <TH>Category</TH>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                   
                        @foreach($productList as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            
                            <td>{{ $product->desc }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->import_price }}</td>
                            <td>{{ $product->unit }}</td>
                            <td>{{ $product->quantit }}</td>
                            <td>{{ $product->category_id }}</td>
                            <td>
                                <a class="badge badge-danger" href="{{ route('products.edit',$product->id) }}">Pending</a>
                            </td>

                            <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit">Delete</button>
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
@endsection