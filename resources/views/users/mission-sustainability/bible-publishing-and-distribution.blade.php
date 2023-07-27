@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Bible Publishing and Distribution Data Form</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dash') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('missionSustainabilityIndex') }}">Mission
                                        Reports</a>
                                </li>
                                <li class="breadcrumb-item active">Bible Publishing and Distribution Form
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
                            <h4 class="content-header-title">Bible Publishing and Distribution Data Forms</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title" for="inputDanger"><strong>Bible Publishing and
                                            Distribution</strong></label>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate="">
                                            <h4 class="form-section"><i class="ft-clipboard"></i>Printed Bible Distribution
                                            </h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="first-translation-physical-bible-distribution">First
                                                        Translation Physical Bibles Ordered and Supplied</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="first-translation-physical-bible-distribution">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="revised-physical-bible-distribution">Revised Physical Bibles
                                                        Ordered and Supplied</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="revised-physical-bible-distribution">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label
                                                        for="other-physical-bible-versions-and-material-distribution">Other
                                                        Physical Bible Versions and Material Ordered and Supplied</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="other-physical-bible-versions-and-material-distribution">
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-clipboard"></i>Electronic Bible
                                                Distribution</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="first-translation-electronic-bible-distribution">First
                                                        Translation Electronic Bibles Ordered and Supplied</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="first-translation-electronic-bible-distribution">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="revised-electronic-bible-distribution">Revised Electronic
                                                        Bibles Ordered and Supplied</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="revised-electronic-bible-distribution">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label
                                                        for="other-electronic-bible-versions-and-material-distribution">Other
                                                        Electronic Bible Versions and Material Ordered and Supplied</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="other-electronic-bible-versions-and-material-distribution">
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-clipboard"></i>Audio Visual Bible Distribution
                                            </h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="first-translation-audio-visual-bible-distribution">First
                                                        Translation Audio Visual Bibles Ordered and Supplied</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="first-translation-audio-visual-bible-distribution">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="revised-audio-visual-bible-distribution">Revised Audio
                                                        Visual Bibles Ordered and Supplied</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="revised-audio-visual-bible-distribution">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label
                                                        for="other-audio-visual-bible-versions-and-material-distribution">Other
                                                        Audio Visual Bible Versions and Material Ordered and
                                                        Supplied</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="other-audio-visual-bible-versions-and-material-distribution">
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
