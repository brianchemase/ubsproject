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
                                Printed Bible Distribution
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">First Translation Physical Bibles Ordered and Supplied</small>
                                    <input type="number" step="1" class="form-control" id="first-translation-physical-bible-distribution">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Revised Physical Bibles Ordered and Supplied</small>
                                    <input type="number" step="1" class="form-control"
                                        id="revised-physical-bible-distribution">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Other Physical Bible Versions and Material Ordered and Supplied</small>
                                    <input type="number" step="1" class="form-control" id="other-physical-bible-versions-and-material-distribution">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Electronic Bible Distribution
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">First Translation Electronic Bibles Ordered and Supplied</small>
                                    <input type="number" step="1" class="form-control" id="first-translationelectronic-bible-distribution">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Revised Electronic Bibles Ordered and Supplied</small>
                                    <input type="number" step="1" class="form-control"
                                        id="revisedelectronic-bible-distribution">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Other Electronic Bible Versions and Material Ordered and Supplied</small>
                                    <input type="number" step="1" class="form-control" id="otherelectronic-bible-versions-and-material-distribution">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Audio Visual Bible Distribution
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">First Translation Audio Visual Bibles Ordered and Supplied</small>
                                    <input type="number" step="1" class="form-control" id="first-audio-visual-translation-bible-distribution">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Revised Audio Visual Bibles Ordered and Supplied</small>
                                    <input type="number" step="1" class="form-control"
                                        id="revised-audio-visual-bible-distribution">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Other Audio Visual Bible Versions and Material Ordered and Supplied</small>
                                    <input type="number" step="1" class="form-control" id="other-audio-visual-bible-versions-and-material-distribution">
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
