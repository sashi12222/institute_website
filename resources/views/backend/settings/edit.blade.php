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
                         <form action="/settings/{{ $setting->id }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 @method('put')
                                 <div class="form-group">
                                    <label for="name">Company Name</label>
                                    <input id="name" class="form-control" type="text" name="name" placeholder="eg.Code IT" value={{ $setting->name }}>
                                </div>
        
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input id="address" class="form-control" type="text" name="address" placeholder="eg.Prithvi path" value={{ $setting->address }}>
                                </div>
        
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email" placeholder="eg.xxxxx@gmail.com" value={{ $setting->email }}>
                                </div>
        
                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input id="contact" class="form-control" type="tel" name="contact" placeholder="eg.+977949553455" value={{ $setting->contact }}>
                                </div>
                                <div class="form-group">
                                    <label for="regno">Reg.No</label>
                                    <input id="regno" class="form-control" type="text" name="regno" placeholder="eg.025-555343" value={{ $setting->regno }}>
                                </div>
        
                                <div class="form-group">
                                    <label for="logo">Upload Company Logo</label>
                                    <input id="logo" class="form-control" type="file" name="logo">
                                </div>
                                <div class="py-3">
                                    <img src="{{ asset($setting->logo) }}" width="120" alt="">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Record</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection