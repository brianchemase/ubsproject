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
                                                <h5 class="col-12">BS registration as a legal entity</h5>
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
                                                            name="registrationCertificate" id="registrationCertificateNo"
                                                            checked>
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
                                                        <label class="custom-file-label"
                                                            for="registrationCertificateFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">BS with constitution to guide operations</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have a constitution?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="constitution"
                                                            id="constitutionYes">
                                                        <label class="form-check-label" for="constitutionYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="constitution"
                                                            id="constitutionNo" checked>
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
                                                <h5 class="col-12">BS with board corporate governance charter</h5>
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
                                                        <label class="custom-file-label"
                                                            for="governanceCharterFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">BS with Strategic plan</h5>
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
                                                            name="strategicPlanCharter" id="strategicPlanCharterNo"
                                                            checked>
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
                                                        <label class="custom-file-label"
                                                            for="strategicPlanCharterFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <h4 class="form-section"><i class="ft-clipboard"></i>Lead Compliance </h4>

                                            <div class="form-row">
                                                <h5 class="col-12">File society's returns</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have tax returns receipt?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="taxComplianceCertificate"
                                                            id="taxComplianceCertificateYes">
                                                        <label class="form-check-label" for="taxComplianceCertificateYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="taxComplianceCertificate"
                                                            id="taxComplianceCertificateNo" checked>
                                                        <label class="form-check-label" for="taxComplianceCertificateNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="taxComplianceCertificateFile">
                                                        <label class="custom-file-label"
                                                            for="taxComplianceCertificateFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Compliance with child protection policy</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have child protection policy?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="childProtectionCertificate"
                                                            id="childProtectionCertificateYes">
                                                        <label class="form-check-label"
                                                            for="childProtectionCertificateYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="childProtectionCertificate"
                                                            id="childProtectionCertificateNo" checked>
                                                        <label class="form-check-label"
                                                            for="childProtectionCertificateNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="childProtectionCertificateFile">
                                                        <label class="custom-file-label"
                                                            for="childProtectionCertificateFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Support whistle blowing  policy</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have whistle blowing policy?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="whistleBlowingCompliance"
                                                            id="whistleBlowingComplianceYes">
                                                        <label class="form-check-label"
                                                            for="whistleBlowingComplianceYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="whistleBlowingCompliance"
                                                            id="whistleBlowingComplianceNo" checked>
                                                        <label class="form-check-label"
                                                            for="whistleBlowingComplianceNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="whistleBlowingComplianceFile">
                                                        <label class="custom-file-label"
                                                            for="whistleBlowingComplianceFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Comply with anti-corruption regulations</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have anti-corruption regulations?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="antiCorruptionCompliance"
                                                            id="antiCorruptionComplianceYes">
                                                        <label class="form-check-label"
                                                            for="antiCorruptionComplianceYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="antiCorruptionCompliance"
                                                            id="antiCorruptionComplianceNo" checked>
                                                        <label class="form-check-label"
                                                            for="antiCorruptionComplianceNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="antiCorruptionComplianceFile">
                                                        <label class="custom-file-label"
                                                            for="antiCorruptionComplianceFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Compliance with anti-money laundering laws</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have anti-money laundering policy?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="antiMoneyLaunderingCompliance"
                                                            id="antiMoneyLaunderingComplianceYes">
                                                        <label class="form-check-label"
                                                            for="antiMoneyLaunderingComplianceYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="antiMoneyLaunderingCompliance"
                                                            id="antiMoneyLaunderingComplianceNo" checked>
                                                        <label class="form-check-label"
                                                            for="antiMoneyLaunderingComplianceNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="antiMoneyLaunderingComplianceFile">
                                                        <label class="custom-file-label"
                                                            for="antiMoneyLaunderingComplianceFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <h4 class="form-section"><i class="ft-clipboard"></i>Clear Organisation Structure Compliance </h4>

                                            <div class="form-row">
                                                <h5 class="col-12">Independent board with different church affiliations</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have board with different church affiliations?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="independentBoardCompliance"
                                                            id="independentBoardComplianceYes">
                                                        <label class="form-check-label" for="independentBoardComplianceYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="independentBoardCompliance"
                                                            id="independentBoardComplianceNo" checked>
                                                        <label class="form-check-label" for="independentBoardComplianceNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="independentBoardComplianceFile">
                                                        <label class="custom-file-label"
                                                            for="independentBoardComplianceFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Programs / Project Manager / Director</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have a programs manager, Project manager or Director?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="projectManager"
                                                            id="projectManagerYes">
                                                        <label class="form-check-label" for="projectManagerYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="projectManager"
                                                            id="projectManagerNo" checked>
                                                        <label class="form-check-label" for="projectManagerNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="projectManagerFile">
                                                        <label class="custom-file-label"
                                                            for="projectManagerFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Translation Consultants</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have translation consultants?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="translationConsultants"
                                                            id="translationConsultantsYes">
                                                        <label class="form-check-label" for="translationConsultantsYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="translationConsultants"
                                                            id="translationConsultantsNo" checked>
                                                        <label class="form-check-label" for="translationConsultantsNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="translationConsultantsFile">
                                                        <label class="custom-file-label"
                                                            for="translationConsultantsFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Communications and Marketing Consultant</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have a communications and marketing consultant?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="communicationsAndMarketingConsultant"
                                                            id="communicationsAndMarketingConsultantYes">
                                                        <label class="form-check-label" for="communicationsAndMarketingConsultantYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="communicationsAndMarketingConsultant"
                                                            id="communicationsAndMarketingConsultantNo" checked>
                                                        <label class="form-check-label" for="communicationsAndMarketingConsultantNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="communicationsAndMarketingConsultantFile">
                                                        <label class="custom-file-label"
                                                            for="communicationsAndMarketingConsultantFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Supply Chain Officer</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have supply chain officer?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="supplyChainOfficer"
                                                            id="supplyChainOfficerYes">
                                                        <label class="form-check-label" for="supplyChainOfficerYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="supplyChainOfficer"
                                                            id="supplyChainOfficerNo" checked>
                                                        <label class="form-check-label" for="supplyChainOfficerNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="supplyChainOfficerFile">
                                                        <label class="custom-file-label"
                                                            for="supplyChainOfficerFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Fundraising Officer</h5>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have fundraising officer?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="fundraisingOfficer"
                                                            id="fundraisingOfficerYes">
                                                        <label class="form-check-label" for="fundraisingOfficerYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="fundraisingOfficer"
                                                            id="fundraisingOfficerNo" checked>
                                                        <label class="form-check-label" for="fundraisingOfficerNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="fundraisingOfficerFile">
                                                        <label class="custom-file-label"
                                                            for="fundraisingOfficerFile">Choose
                                                            file</label>
                                                    </div>
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
                </section>
            </div>
        </div>
    </div>
@endsection
