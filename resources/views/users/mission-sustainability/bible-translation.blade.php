@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Bible Translation Data Form</h3>
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

            <div class="content-body">

                <section class="tooltip-validations" id="tooltip-validation">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="content-header-title">Bible Translation Projects</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title" for="inputDanger"><strong>First Bible Translation
                                            Projects</strong></label>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate="">
                                            <h4 class="form-section"><i class="ft-clipboard"></i>First Bible Translation</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="completed-electronic-translations">Completed Electronic
                                                        Translations</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="completed-electronic-translations">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ongoing-electronic-translations">Ongoing Electronic
                                                        Translations</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ongoing-electronic-translations">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="completed-audiovisual-translations">Completed Audio/Visual
                                                        Translations</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="completed-audiovisual-translations">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ongoing-audiovisual-translations">Ongoing Audio/Visual
                                                        Translations</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ongoing-audiovisual-translations">
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-clipboard"></i> Bible Translation
                                                Revisions</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="completed-electronic-revisions">Completed Electronic
                                                        Revisions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="completed-electronic-revisions">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ongoing-electronic-revisions">Ongoing Electronic
                                                        Revisions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ongoing-electronic-revisions">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="completed-audiovisual-revisions">Completed Audio/Visual
                                                        Revisions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="completed-audiovisual-revisions">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ongoing-audiovisual-revisions">Ongoing Audio/Visual
                                                        Revisions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ongoing-audiovisual-revisions">
                                                </div>
                                            </div>

                                            <div class="form-row match-height gx-3 col-12">
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
