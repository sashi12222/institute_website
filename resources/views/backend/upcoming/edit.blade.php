@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/upcoming" class="btn btn-primary">Back</a>
                </div> 

                <div class="card-body">
                   <form action="/upcoming/{{ $upcoming->id }}" method="post" enctype="multipart/form-data">
                     @csrf
                     @method('put')
                    <div class="form-group">
                        <label for="date"> Starting From*</label>
                        <input id="date" class="form-control" type="date" name="date" value="{{ $upcoming->date }}" >
                    </div>

                  <div class="form-group">
                    <label for="time">Class Time*</label>
                    <input id="time" class="form-control-file" type="time" name="time" value="{{ $upcoming->time }}">
                  </div>
                  <div class="form-group">
                    <label for="class_type">Class Type</label>
                    <select id="class_type" class="form-control" name="class_type">
                        <option value="physical">physical</option>
                        <option value="online">online</option>
                    </select>
                  </div>
                 <div class="form-group">
                    <label for="course_id">Select Course</label>
                    <select id="course_id" class="form-control" name="course_id">
                       @foreach ($courses as $course)
                           <option value="{{ $course->id }}">{{ $course->name }}</option>
                       @endforeach
                    </select>
                 </div>
                   <button type="submit" class="btn btn-primary">Update</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

          