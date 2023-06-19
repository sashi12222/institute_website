@extends('backend.app')
@section('content')
    <div class="contianer">
        <div class="row">
            <div class="col-md-12">
              <a href="/course" class="btn btn-primary">Back</a>
              <hr>

                     <h1>
                        {{ $course->name }}
                     </h1>
                     <h5>{{ $course->duration }}</h5>
                     <h5>{{ $course->fee }}</h5>
                     <hr>
                     <h3>syllabus</h3>
                  {!! $course->syllabus !!}
              
            </div>
        </div>
    </div>
@endsection