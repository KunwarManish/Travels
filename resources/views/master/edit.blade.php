@extends('layouts.master')


@section('title' , 'Users List')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Role for Registered User</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form action="/admin/update/{{ $users->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="username" value ="{{ $users->name }}" class="form-control">
                            </div>
                                <div class="form-group">
                                <label>Give Role</label>
                                    <Select name="usertype" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="Vendor">Vendor</option>
                                        <option value="">None</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/admin/user" class="btn btn-danger">Cancel</a>
                            </forms>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection


@section('scripts')


@endsection