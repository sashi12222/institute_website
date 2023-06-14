@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <a href="/settings/create" class="btn btn-primary">Add Settings</a> --}}
                        <h1>General Settings</h1>
                    </div>
                    <div class="card-body">
                       <table class="table">
                        <tr>

                            <td>Logo</td>
                            <td>Company Name</td>
                            <td>Address</td>
                            <td>Contact</td>
                            <td>Email</td>
                            <td>Reg.No</td>
                            <td>Action</td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset($setting->logo) }}" width="32" alt=""></td>
                            <td>{{ $setting->name }}</td>
                            <td>{{ $setting->address }}</td>
                            <td>{{ $setting->contact }}</td>
                            <td>{{ $setting->email }}</td>
                            <td>{{ $setting->regno }}</td>
                           <td>
                            <a href="/settings/{{ $setting->id }}/edit" class="badge btn-primary">Edit</a>
                           </td>
                        </tr>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection