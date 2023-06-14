@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
               <a href="/settings" class=" btn btn-primary">Back</a>

                    </div>
                    <div class="card-body">

                        @if (session('message'))
                        <div class="py-4">
                           <p class="text-primary">{{ session('message') }}</p>
                        </div>
                            
                        @endif
                         <form action="/settings" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <div class="form-group">
                                    <label for="name">Company Name</label>
                                    <input id="name" class="form-control" type="text" name="name" placeholder="eg.Code IT">
                                </div>
        
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input id="address" class="form-control" type="text" name="address" placeholder="eg.Prithvi path">
                                </div>
        
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email" placeholder="eg.xxxxx@gmail.com">
                                </div>
        
                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input id="contact" class="form-control" type="tel" name="contact" placeholder="eg.+977949553455">
                                </div>
                                <div class="form-group">
                                    <label for="regno">Reg.No</label>
                                    <input id="regno" class="form-control" type="text" name="regno" placeholder="eg.025-555343">
                                </div>
        
                                <div class="form-group">
                                    <label for="logo">Upload Company Logo</label>
                                    <input id="logo" class="form-control" type="file" name="logo" >
                                </div>

                                <button type="submit" class="btn btn-primary">Save Record</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection