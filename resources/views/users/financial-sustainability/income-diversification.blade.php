@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
                <div class="content-header row">
                    <div class="content-header-left col-md-4 col-12 mb-2">
                        <h3 class="content-header-title">Income Diversification form</h3>
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
                                Scripture Sales Revenue
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Physical Channel Sales</small>
                                    <input type="number" step="1" class="form-control" id="physical-channel-sales">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Bible Society Ecommerce </small>
                                    <input type="number" step="1" class="form-control"
                                        id="bs-ecommerce-channel-sales">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Other Online Marketplace Sales</small>
                                    <input type="number" step="1" class="form-control"
                                        id="other-online-channel-sales">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12">
                        <div class="card-block">
                            <div class="card-header">
                                Membership Fees
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Individual Membership</small>
                                    <input type="number" step="1" class="form-control"
                                        id="individual-membership-fees">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Church and Corporate Membership</small>
                                    <input type="number" step="1" class="form-control"
                                        id="church-and-corporate-membership-fees">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12">
                        <div class="card-block">
                            <div class="card-header">
                                Fundraising
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Physical Fundraising</small>
                                    <input type="number" step="1" class="form-control" id="physical-fundraising">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">International Support Programme (UBSA ISP)</small>
                                    <input type="number" step="1" class="form-control"
                                        id="international-support-programme">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Grants from Online Campaigns</small>
                                    <input type="number" step="1" class="form-control" id="online-campaign-grants">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12">
                        <div class="card-block">
                            <div class="card-header">
                                Copyrights and Royalties
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Copyright and Royalty income</small>
                                    <input type="number" step="1" class="form-control" id="copyright-and-royalty">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12">
                        <div class="card-block">
                            <div class="card-header">
                                Business and Rental Income
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Business and Rental Income</small>
                                    <input type="number" step="1" class="form-control" id="business-and-rental">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12">
                        <div class="card-block">
                            <div class="card-header">
                                Other Income
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Other income</small>
                                    <input type="number" step="1" class="form-control" id="other-income">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height mx-auto gx-3">
                    <div class="card col-xl-4 col-lg-6 col-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Gross Income
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Gross Income</small>
                                    <input type="number" step="1" class="form-control" id="other-income">
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
