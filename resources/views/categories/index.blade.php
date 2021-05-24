@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="/categories/create" class="btn btn-success">Add Category</a>
    </div>
    <div class="card-default">
        <div class="card-header">
            Category
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
    
                    </tr>
                </thead>
    
                @foreach($categories as $category)
                <tbody>
                <tr>
                    <td>{{ $category->name }}</td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection