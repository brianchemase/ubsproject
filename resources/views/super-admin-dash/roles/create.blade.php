@extends('super-admin-dash.layouts.layout')

@section('content')
    <div class="row text-center text-primary mb-3">
        <h1>Create a Role</h1>
    </div>
    <div class="row text-center">
        <div class="col-xs-12 col-md-5 mx-auto">
            <form method="POST" action="/role_management/roles" class="bg-light p-3 shadow" enctype="multipart/form-data">
                @csrf

                <div class="input-group mb-3">
                    <span class="input-group-text" id="role-name">Role Name</span>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                        placeholder="Enter role name" aria-label="role-name" aria-describedby="role-name">
                </div>
                @error('name')
                    <p class="text-danger fs-6">
                        {{ $message }}
                    </p>
                @enderror

                <div class="input-group mb-3">
                    <fieldset>
                        <legend>Choose role permissions:</legend>
                        @foreach ($permissions as $permission)
                            <div>
                                <input type="checkbox" id="{{ $permission->name }}" name="permissions[]"
                                    value="{{ $permission->name }}" />
                                <label for="{{ $permission->name }}">
                                    {{ $permission->name }}
                                </label>
                            </div>
                        @endforeach
                    </fieldset>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
