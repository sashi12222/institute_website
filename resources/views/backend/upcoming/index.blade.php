@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                 
                 <a href="/upcoming/create" class="btn btn-primary">Add Upcoming class</a>
                   
                  
                </div> 

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th style="width: 25%">#</th>
                            <th>Course Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      
                            @foreach ($upcoming as $upcoming)
                                <tr>
                                    <td>{{ $upcoming->id }}</td>
                                    <td>{{ $upcoming->course->name }}</td>
                                    <td>{{ $upcoming->date }}</td>
                                    <td>{{ $upcoming->time }}</td>
                                    <td class="{{ $upcoming->status==1 ? 'badge bg-success':'badge bg-danger' }} my-2">{{ $upcoming->status==1 ? 'active':'inactive'}}</td>
                                     <td>
                                        <a href="" class="badge bg-info">Edit</a>
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
    
