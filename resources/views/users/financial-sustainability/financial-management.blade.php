@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Finance Management form</h3>
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
                                Grant Balances
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Unclaimed Grants</small>
                                    <input type="number" step="1" class="form-control" id="unclaimed-grants">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Unutilised Grants </small>
                                    <input type="number" step="1" class="form-control"
                                        id="unutilised-grants">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                UBS Current Account Balance
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Current Balance</small>
                                    <input type="number" step="1" class="form-control" id="current-account-balance">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Loans
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Bank Loans</small>
                                    <input type="number" step="1" class="form-control" id="bank-loans">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Other Loans</small>
                                    <input type="number" step="1" class="form-control"
                                        id="other-loans">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Bible Costings
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Printing Costs</small>
                                    <input type="number" step="1" class="form-control"
                                        id="printing-costs">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Shipping Costs</small>
                                    <input type="number" step="1" class="form-control" id="shipping-costs">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Last Mile delivery Costs</small>
                                    <input type="number" step="1" class="form-control" id="delivery-costs">
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
