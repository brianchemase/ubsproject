@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Governance Data Form</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dash') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Programme Reports</a>
                                </li>
                                <li class="breadcrumb-item active">Governance Data Form
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
                            <h4 class="content-header-title">Governance Data Form</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title" for="inputDanger"><strong>Governance Data
                                            Form</strong></label>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate="">
                                            <h4 class="form-section"><i class="ft-clipboard"></i>Corporate Governance
                                                Compliance </h4>
                                            <div class="form-row">
                                                <h3 class="col-12">BS registration as a legal entity</h3>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have a certificate of registration?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="registrationCertificate" id="registrationCertificateYes">
                                                        <label class="form-check-label" for="registrationCertificateYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="registrationCertificate" id="registrationCertificateNo" checked>
                                                        <label class="form-check-label" for="registrationCertificateNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="registrationCertificateFile">
                                                        <label class="custom-file-label" for="registrationCertificateFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h3 class="col-12">BS with constitution to guide operations</h3>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have a constitution?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="constitution" id="constitutionYes">
                                                        <label class="form-check-label" for="constitutionYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="constitution" id="constitutionNo" checked>
                                                        <label class="form-check-label" for="constitutionNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="constitutionFile">
                                                        <label class="custom-file-label" for="constitutionFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h3 class="col-12">BS with board corporate governance charter</h3>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have a governance by laws/charter?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="governanceCharter" id="governanceCharterYes">
                                                        <label class="form-check-label" for="governanceCharterYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="governanceCharter" id="governanceCharterNo" checked>
                                                        <label class="form-check-label" for="governanceCharterNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="governanceCharterFile">
                                                        <label class="custom-file-label" for="governanceCharterFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h3 class="col-12">BS with Strategic plan</h3>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have a strategic plan?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="strategicPlanCharter" id="strategicPlanCharterYes">
                                                        <label class="form-check-label" for="strategicPlanCharterYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="strategicPlanCharter" id="strategicPlanCharterNo" checked>
                                                        <label class="form-check-label" for="strategicPlanCharterNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="strategicPlanCharterFile">
                                                        <label class="custom-file-label" for="strategicPlanCharterFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
@endsection
