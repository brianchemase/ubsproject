@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Leadership Data Form</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dash') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Programme Reports</a>
                                </li>
                                <li class="breadcrumb-item active">Leadership Data Form
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
                            <h4 class="content-header-title">Leadership Data Form</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title" for="inputDanger"><strong>Leadership Data
                                            Form</strong></label>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate="">

                                            <h4 class="form-section"><i class="ft-clipboard"></i>Performance Management
                                            </h4>

                                            <div class="form-row">
                                                <h5 class="col-12">Annual staff performance appraisal</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have annual staff performance appraisal?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="staffPerformanceAppraisal"
                                                            id="staffPerformanceAppraisalYes">
                                                        <label class="form-check-label" for="staffPerformanceAppraisalYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="staffPerformanceAppraisal"
                                                            id="staffPerformanceAppraisalNo" checked>
                                                        <label class="form-check-label" for="staffPerformanceAppraisalNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="staffPerformanceAppraisalFile">
                                                        <label class="custom-file-label"
                                                            for="staffPerformanceAppraisalFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Project completion rate analysis</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have done project completion rate analysis?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="projectCompletionRate" id="projectCompletionRateYes">
                                                        <label class="form-check-label" for="projectCompletionRateYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="projectCompletionRate" id="projectCompletionRateNo"
                                                            checked>
                                                        <label class="form-check-label" for="projectCompletionRateNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="projectCompletionRateFile">
                                                        <label class="custom-file-label"
                                                            for="projectCompletionRateFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-clipboard"></i>Collaborations</h4>

                                            <div class="form-row">
                                                <h5 class="col-12">Annual General Meeting</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Had an annual general meeting?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="annualGeneralMeeting" id="annualGeneralMeetingYes">
                                                        <label class="form-check-label" for="annualGeneralMeetingYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="annualGeneralMeeting" id="annualGeneralMeetingNo" checked>
                                                        <label class="form-check-label" for="annualGeneralMeetingNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="annualGeneralMeetingFile">
                                                        <label class="custom-file-label"
                                                            for="annualGeneralMeetingFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Quaterly Board Meeting</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Had quaterly board meetings?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="quaterlyBoardMeetings" id="quaterlyBoardMeetingsYes">
                                                        <label class="form-check-label" for="quaterlyBoardMeetingsYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="quaterlyBoardMeetings" id="quaterlyBoardMeetingsNo"
                                                            checked>
                                                        <label class="form-check-label" for="quaterlyBoardMeetingsNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="quaterlyBoardMeetingsFile">
                                                        <label class="custom-file-label"
                                                            for="quaterlyBoardMeetingsFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Management Meetings with Staff</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Had management meetings with staff?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="managementMeetingsWithStaff"
                                                            id="managementMeetingsWithStaffYes">
                                                        <label class="form-check-label"
                                                            for="managementMeetingsWithStaffYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="managementMeetingsWithStaff"
                                                            id="managementMeetingsWithStaffNo" checked>
                                                        <label class="form-check-label"
                                                            for="managementMeetingsWithStaffNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="managementMeetingsWithStaffFile">
                                                        <label class="custom-file-label"
                                                            for="managementMeetingsWithStaffFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <h4 class="form-section"><i class="ft-clipboard"></i>Digitization and
                                                Automation</h4>

                                            <div class="form-row">
                                                <h5 class="col-12">Supply Chain Management Automation</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Implimented supply chain management automation?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="supplyChainMgtAutomation"
                                                            id="supplyChainMgtAutomationYes">
                                                        <label class="form-check-label" for="supplyChainMgtAutomationYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="supplyChainMgtAutomation"
                                                            id="supplyChainMgtAutomationNo" checked>
                                                        <label class="form-check-label" for="supplyChainMgtAutomationNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="supplyChainMgtAutomationFile">
                                                        <label class="custom-file-label"
                                                            for="supplyChainMgtAutomationFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Financial System Automation</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Implimented financial system automation?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="financialSystemAutomation"
                                                            id="financialSystemAutomationYes">
                                                        <label class="form-check-label"
                                                            for="financialSystemAutomationYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="financialSystemAutomation"
                                                            id="financialSystemAutomationNo" checked>
                                                        <label class="form-check-label" for="financialSystemAutomationNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="financialSystemAutomationFile">
                                                        <label class="custom-file-label"
                                                            for="financialSystemAutomationFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">ICT System Security Plugins</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have installed ICT system security plugins?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="ictSystemSecurityPlugins"
                                                            id="ictSystemSecurityPluginsYes">
                                                        <label class="form-check-label" for="ictSystemSecurityPluginsYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="ictSystemSecurityPlugins"
                                                            id="ictSystemSecurityPluginsNo" checked>
                                                        <label class="form-check-label" for="ictSystemSecurityPluginsNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="ictSystemSecurityPluginsFile">
                                                        <label class="custom-file-label"
                                                            for="ictSystemSecurityPluginsFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Intergrations on Website and Online Store</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have done intergrations on website and online store?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="intergrationsOnWebsiteAndOnlineStore"
                                                            id="intergrationsOnWebsiteAndOnlineStoreYes">
                                                        <label class="form-check-label"
                                                            for="intergrationsOnWebsiteAndOnlineStoreYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="intergrationsOnWebsiteAndOnlineStore"
                                                            id="intergrationsOnWebsiteAndOnlineStoreNo" checked>
                                                        <label class="form-check-label"
                                                            for="intergrationsOnWebsiteAndOnlineStoreNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="intergrationsOnWebsiteAndOnlineStoreFile">
                                                        <label class="custom-file-label"
                                                            for="intergrationsOnWebsiteAndOnlineStoreFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-clipboard"></i>Staff Empowerment</h4>

                                            <div class="form-row">
                                                <h5 class="col-12">Capacity building initiatives in place</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have capacity building initiatives in place?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="capacityBuildingInitiative"
                                                            id="capacityBuildingInitiativeYes">
                                                        <label class="form-check-label"
                                                            for="capacityBuildingInitiativeYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="capacityBuildingInitiative"
                                                            id="capacityBuildingInitiativeNo" checked>
                                                        <label class="form-check-label"
                                                            for="capacityBuildingInitiativeNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="capacityBuildingInitiativeFile">
                                                        <label class="custom-file-label"
                                                            for="capacityBuildingInitiativeFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Staff pension in place</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have staff pension scheme in place?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="staffPension"
                                                            id="staffPensionYes">
                                                        <label class="form-check-label"
                                                            for="staffPensionYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="staffPension"
                                                            id="staffPensionNo" checked>
                                                        <label class="form-check-label"
                                                            for="staffPensionNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="staffPensionFile">
                                                        <label class="custom-file-label"
                                                            for="staffPension">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <h4 class="form-section"><i class="ft-clipboard"></i>Policies and Procedures</h4>

                                            <div class="form-row">
                                                <h5 class="col-12">Stock Takes</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Frequent Stock takes?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="stockTakes"
                                                            id="stockTakesYes">
                                                        <label class="form-check-label"
                                                            for="stockTakesYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="stockTakes"
                                                            id="stockTakesNo" checked>
                                                        <label class="form-check-label"
                                                            for="stockTakesNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="stockTakesFile">
                                                        <label class="custom-file-label"
                                                            for="stockTakesFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Pricing</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have unit price costing, selling price setting and revisions, discounts approvals?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="unitPricing"
                                                            id="unitPricingYes">
                                                        <label class="form-check-label"
                                                            for="unitPricingYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="unitPricing"
                                                            id="unitPricingNo" checked>
                                                        <label class="form-check-label"
                                                            for="unitPricingNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="unitPricingFile">
                                                        <label class="custom-file-label"
                                                            for="unitPricingFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Cash Management</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have banking and cash handling procedures?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="cashManagementPolicies"
                                                            id="cashManagementPoliciesYes">
                                                        <label class="form-check-label"
                                                            for="cashManagementPoliciesYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="cashManagementPolicies"
                                                            id="cashManagementPoliciesNo" checked>
                                                        <label class="form-check-label"
                                                            for="cashManagementPoliciesNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="cashManagementPoliciesFile">
                                                        <label class="custom-file-label"
                                                            for="cashManagementPoliciesFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Procurement and Management of Assets</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have procurement and asset management policies?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="procumentAndAssetManagement"
                                                            id="procumentAndAssetManagementYes">
                                                        <label class="form-check-label"
                                                            for="procumentAndAssetManagementYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="procumentAndAssetManagement"
                                                            id="procumentAndAssetManagementNo" checked>
                                                        <label class="form-check-label"
                                                            for="procumentAndAssetManagementNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="procumentAndAssetManagementFile">
                                                        <label class="custom-file-label"
                                                            for="procumentAndAssetManagementFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Use and Disposal of Assets</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have use and asset disposal policies?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="useAndAssetDispposal"
                                                            id="useAndAssetDispposalYes">
                                                        <label class="form-check-label"
                                                            for="useAndAssetDispposalYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="useAndAssetDispposal"
                                                            id="useAndAssetDispposalNo" checked>
                                                        <label class="form-check-label"
                                                            for="useAndAssetDispposalNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="useAndAssetDispposalFile">
                                                        <label class="custom-file-label"
                                                            for="useAndAssetDispposalFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Human Resource Policies for Full time and  Part time Employees</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have Remuneration, recruitment, leave management, sick off, pension, allowances, training and rewards, recognition and sanction policies?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="humanResourcePolicy"
                                                            id="humanResourcePolicyYes">
                                                        <label class="form-check-label"
                                                            for="humanResourcePolicyYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="humanResourcePolicy"
                                                            id="humanResourcePolicyNo" checked>
                                                        <label class="form-check-label"
                                                            for="humanResourcePolicyNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="humanResourcePolicyFile">
                                                        <label class="custom-file-label"
                                                            for="humanResourcePolicyFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h5 class="col-12">Loan Policies</h5>

                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Have loan policies for staff and by the organization?</p>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="loanPolicy"
                                                            id="loanPolicyYes">
                                                        <label class="form-check-label"
                                                            for="loanPolicyYes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="loanPolicy"
                                                            id="loanPolicyNo" checked>
                                                        <label class="form-check-label"
                                                            for="loanPolicyNo">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <p>Attach PDF file</p>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="loanPolicyFile">
                                                        <label class="custom-file-label"
                                                            for="loanPolicyFile">Choose
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
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
