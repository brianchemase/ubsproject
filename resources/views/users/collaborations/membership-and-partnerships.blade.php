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
                                <li class="breadcrumb-item"><a href="{{ route('dash') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('collaborationsIndex') }}">Collaborations</a>
                                </li>
                                <li class="breadcrumb-item active">Membership and Partnership Form
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <section class="tooltip-validations" id="tooltip-validation">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="content-header-title">Membership and Partnership Form</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title" for="inputDanger"><strong>Membership and
                                            Partnership</strong></label>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate="">
                                            <h4 class="form-section"><i class="ft-clipboard"></i>Active Registered Individual Members
                                            </h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="membership-active-individuals">Active registered individual
                                                        members</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="membership-active-individuals">
                                                </div>
                                            </div>


                                            <h4 class="form-section"><i class="ft-clipboard"></i>Active Registered Churches
                                                and Para church Organisations</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="membership-active-churches">Active registered
                                                        churches</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="membership-active-churches">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="membership-active-para-church-orgs">Active registered para
                                                        church organisations</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="membership-active-para-church-orgs">
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-clipboard"></i>Donors</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="membership-individual-donors">Individual donors</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="membership-individual-donors">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="membership-corporate-donors">Corporate donors</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="membership-corporate-donors">
                                                </div>
                                            </div>
                                            <div class="form-row match-height gx-3 col-12 w-100">
                                                <button class="btn btn-primary px-2 py-1 mx-auto"
                                                    type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
