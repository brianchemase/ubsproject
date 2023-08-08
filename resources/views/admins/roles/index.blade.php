@extends('super-admin-dash.layouts.layout')

@section('content')
    <div class="row">
        @foreach ($roles as $role)
            <article class="card-body m-2 outline-primary">{{ $role->name }}</article>
        @endforeach
    </div>

    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Role</th>
                    <th scope="col">Permissions</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Mark</td>
                    <td>COO</td>
                    <td>Admin</td>
                    <td>Permissions</td>
                    <td>Edit</td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
