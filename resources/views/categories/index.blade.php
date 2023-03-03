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
                <a  href="{{ route('categories.create') }}" class="badge badge-warning btn btn-warning"> Create New</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Desc</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    
                        @foreach($categoryList as $category)
                        <tr>
                            <td>#</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->desc }}</td>
                            <td>
                                <a class="badge badge-warning btn btn-warning" href="{{ route('categories.edit',$category->id) }}">Pending</a>
                            </td>

                            <td>
                                <form action="{{ route('categories.destroy',$category->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit">Delete</button>
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