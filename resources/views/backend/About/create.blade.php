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
                   <form action="/about" method="post">
                     @csrf
                    <div class="form-group">
                        <label for="title">Title*</label>
                        <input id="title" class="form-control" type="text" name="title" placeholder="title">
                    </div>

                   <div class="form-group">
                    <label for="description">Description*</label>
                    <textarea id="description" class="form-control" name="description" rows="10"></textarea>
                   </div>

                   <button type="submit" class="btn btn-primary">Save</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection