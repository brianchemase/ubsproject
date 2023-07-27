@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Membership and Partnership form</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Form
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">

            <form class="col-12 mb-4">
                <div class="row match-height mx-auto gx-3">
                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Active Registered Individuals
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Active registered members</small>
                                    <input type="number" step="1" class="form-control"
                                        id="membership-active-individuals">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Active Registered Churches and Para church Organisations
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Active registered churches</small>
                                    <input type="number" step="1" class="form-control"
                                        id="membership-active-churches">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Active Registered Para church Organisations
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Active registered para church organisations</small>
                                    <input type="number" step="1" class="form-control"
                                        id="membership-active-para-church-organisations">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Donors
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Individual donors</small>
                                    <input type="number" step="1" class="form-control"
                                        id="membership-individual-donors">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Corporate donors</small>
                                    <input type="number" step="1" class="form-control"
                                        id="membership-corporate-donors">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row match-height gx-3 col-12 w-100">
                    <button class="btn btn-primary px-2 py-1 mx-auto" type="submit">Submit</button>
                </div>


            </form>
        </div>
    </div>

    @endsection
