@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                 
                 <a href="/category/create" class="btn btn-primary">Add Category</a>
                   
                  
                </div> 

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th style="width: 25%">Image</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($category as $category)
                        <tr>
                            <td><img src="{{ asset($category->image) }}" width="40" alt=""></td>
                            <td>{{ $category->name }}</td>
                            <td>

                                <a href="/category/{{ $category->id }}/edit" class="badge btn-primary">Edit</a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
    
