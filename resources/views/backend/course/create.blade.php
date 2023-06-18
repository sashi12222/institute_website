@extends('backend.app')
@section('content')
    <div class="conatiner">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                       <a href="/course" class="btn btn-primary">Back</a>
                   </div>
                   <div class="card-body">
                   <form action="/course" method="post" enctype="multipart/form-data">
                      @csrf
                       <div class="form-group">
                           <label for="name">Course Name</label>
                           <input id="name" class="form-control" type="text" name="name" placeholder="eg:Java,flutter,python">
                       </div>


                       <div class="form-group">
                           <label for="duration">Duration*</label>
                           <input id="duration" class="form-control" type="text" name="duration" placeholder="eg: 1-2 months">
                       </div>

                        <div class="form-group">
                           <label for="fee">Course fee (Rs.)(optinal)</label>
                           <input id="fee" class="form-control" type="text" name="fee" placeholder="eg:4000">
                       </div>

                          <div class="form-group">
                           <label for="syllabus">Syllabus*</label>
                           <textarea id="description" class="form-control" name="syllabus" rows="3"></textarea>
                          </div>
                       <div class="form-group">
                           <label for="image">featured image*</label>
                           <input id="image" class="form-control" type="file" name="image">
                       </div>
                       <div class="form-group">
                        <label for="catgory_id">Category*</label>
                        <select id="category_id" class="form-control" name="category_id">
                          @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                              
                          @endforeach
                        </select>
                       </div>
                       <button type="submit" class="btn btn-primary">Save</button>
                   </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
@endsection