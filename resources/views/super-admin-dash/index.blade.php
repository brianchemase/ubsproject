@extends('super-admin-dash.layouts.layout')

@section('content')
    <div class="row text-center">

        <div class="card col-xs-12 col-sm-4 border-0">
            <div class="card-header">
                <h4>User Management</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="{{ route('registerForm') }}" class="btn btn-primary p-2">Register User</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="btn btn-primary p-2">Manage Users</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card col-xs-12 col-sm-4 border-0">
            <div class="card-header">
                <h4>Role Management</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="#" class="btn btn-primary p-2">Roles</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="btn btn-primary p-2">Manage Roles</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card col-xs-12 col-sm-4 border-0">
            <div class="card-header">
                <h4>Permissions Management</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="#" class="btn btn-primary p-2">Permissions</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="btn btn-primary p-2">Manage Permissions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
