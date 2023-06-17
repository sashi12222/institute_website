@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/about" class="btn btn-primary">Back</a>
                </div> 

                <div class="card-body">
                   <form action="/about/{{ $about->id }}" method="post" enctype="multipart/form-data">

                     @csrf
                     @method('put')
                    <div class="form-group">
                        <label for="title">Title*</label>
                        <input id="title" class="form-control" type="text" name="title"  value="{{ $about->title }}">
                    </div>

                   <div class="form-group">
                    <label for="description">Description*</label>
                    <textarea id="description" class="form-control" name="description" rows="10">{{ $about->description }}</textarea>
                   </div>

                   <button type="submit" class="btn btn-primary">Update</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection