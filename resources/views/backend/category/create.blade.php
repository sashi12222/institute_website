@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/category" class="btn btn-primary">Back</a>
                </div> 

                <div class="card-body">
                   <form action="/category" method="post" enctype="multipart/form-data">
                     @csrf
                    <div class="form-group">
                        <label for="name"> Category Name*</label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="title">
                    </div>

                  <div class="form-group">
                    <label for="image">Upload Image*</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                  </div>

                   <button type="submit" class="btn btn-primary">Save</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection