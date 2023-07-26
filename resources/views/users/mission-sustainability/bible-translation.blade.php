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
        </div>

        <div class="content-body">

            <form class="col-12 mb-4">
                <div class="row match-height mx-auto gx-3">
                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                First Bible Translation Projects
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Completed Electronic Translations</small>
                                    <input type="number" step="1" class="form-control" id="completed-electronic-first-translations">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Ongoing Electronic Translations </small>
                                    <input type="number" step="1" class="form-control"
                                        id="ongoing-electronic-first-translations">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Completed Audio/Visual Translations</small>
                                    <input type="number" step="1" class="form-control" id="completed-audiovisual-first-translations">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Ongoing Audio/Visual Translations </small>
                                    <input type="number" step="1" class="form-control"
                                        id="ongoing-audiovisual-first-translations">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Revised Bible Translation Projects
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Completed Electronic Revisions</small>
                                    <input type="number" step="1" class="form-control" id="completed-electronic-revisions">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Ongoing Electronic Revisions </small>
                                    <input type="number" step="1" class="form-control"
                                        id="ongoing-electronic-revisions">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Completed Audio/Visual Revisions</small>
                                    <input type="number" step="1" class="form-control" id="completed-audiovisual-revisions">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Ongoing Audio/Visual Revisions </small>
                                    <input type="number" step="1" class="form-control"
                                        id="ongoing-audiovisual-revisions">
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
