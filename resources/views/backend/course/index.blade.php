@extends('backend.app')
@section('content')
    <div class="conatiner">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                       <a href="/course/create" class="btn btn-primary">Add course</a>
                   </div>
                   <div class="card-body">
                       <table class="table">
                           <tr>
                               <th>Sn</th>
                               <th>Course Name</th>
                               <th>Duration</th>
                               <th>Fee</th>
                               <th>Action</th>
                           </tr>
                       </table>
                   </div>
               </div>
           </div>
       </div>
    </div>
@endsection