@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if ($about->title=="" || $about->title==null)
                 
                    <a href="/about/create" class="btn btn-primary">Add About us</a>
                    @else
                       <h1>About us</h1>
                 
                       
                   @endif
                  
                </div> 

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th style="width: 25%">Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>

                        <tr>
                            <td >{{ $about->title }}</td>
                            <td>
                                {{ Str::limit($about->description),50 }}
                            </td>
                            <td><a href="/about/{{ $about->id }}/edit" class="badge btn-primary">Edit</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
    
