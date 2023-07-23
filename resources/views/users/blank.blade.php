@extends('users.inc.master')

@section('title', 'Blank page')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Blank Page</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dash')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Inputs start -->
            <section class="basic-inputs">
                <div class="row match-height">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card w-100">

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@section('content')
