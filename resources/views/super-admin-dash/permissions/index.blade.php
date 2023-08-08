@extends('super-admin-dash.layouts.layout')

@section('content')
    permissions index


    <div class="row">
        @foreach ($permissions as $permission)
            <article class="card-body m-2 outline-primary">{{ $permission->name }}</article>
        @endforeach
    </div>
@endsection
