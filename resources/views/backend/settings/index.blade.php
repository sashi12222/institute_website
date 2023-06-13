@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/settings/create" class="btn btn-primary">Add Settings</a>
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
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection