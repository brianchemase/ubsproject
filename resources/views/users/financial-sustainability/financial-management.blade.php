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
                                <li class="breadcrumb-item"><a href="{{ route('dash') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('financialSustainabilityIndex') }}">Finance Reports</a>
                                </li>
                                <li class="breadcrumb-item active">Finance Management
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
                            <h4 class="content-header-title">Finance Management</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title" for="inputDanger"><strong>Finance Management</strong></label>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate="">
                                            <h4 class="form-section"><i class="ft-clipboard"></i> Grant Balances</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="unclaimed-grants">Unclaimed Grants</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="unclaimed-grants">
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="unutilised-grants">Unutilised Grants </label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="unutilised-grants">
                                                </div>
                                            </div>

                                            <h4 class="form-section">
                                                <i class="ft-clipboard"></i>UBS Current Account Balance
                                            </h4>

                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="current-account-balance">Current Balance</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="current-account-balance">
                                                </div>
                                            </div>

                                            <h4 class="form-section">
                                                <i class="ft-clipboard"></i>Loans
                                            </h4>

                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="bank-loans">Bank Loans</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="bank-loans">
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="other-loanlabel">Other Loans</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="other-loans">
                                                </div>
                                            </div>

                                            <h4 class="form-section">
                                                <i class="ft-clipboard"></i>Bible Costings
                                            </h4>

                                            <div class="form-row">
                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="printing-costs">Printing Costs</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="printing-costs">
                                                </div>
                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="shipping-costs">Shipping Costs</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="shipping-costs">
                                                </div>
                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="delivery-costs">Last Mile delivery Costs</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="delivery-costs">
                                                </div>
                                            </div>

                                            <div class="form-row col-12">
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
    @endsection
