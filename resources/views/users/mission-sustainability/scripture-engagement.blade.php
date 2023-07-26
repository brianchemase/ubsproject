@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Scripture Engagement Data Form</h3>
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
                                Observing UBS Bible day/Bible Reading Trivia
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Volunteers engaged to support the works of the BS</small>
                                    <input type="number" step="1" class="form-control" id="ubs-bible-day-volunteers-supporting">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Churches involved by the BS</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-bible-day-churches-involved">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Individuals involved by the BS</small>
                                    <input type="number" step="1" class="form-control" id="ubs-bible-day-individuals-involved">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Jesus Film
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Volunteers engaged to support the works of the BS</small>
                                    <input type="number" step="1" class="form-control" id="ubs-jesus-film-volunteers-supporting">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Trainings held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-jesus-film-trainings-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Workshops held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-jesus-film-workshops-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Meetings held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-jesus-film-meetings-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Scriptures Distributed</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-jesus-film-scriptures-distributed">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Churches involved by the BS</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-jesus-film-churches-involved">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Individuals involved by the BS</small>
                                    <input type="number" step="1" class="form-control" id="ubs-jesus-film-individuals-involved">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Trauma Healing
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Volunteers engaged to support the works of the BS</small>
                                    <input type="number" step="1" class="form-control" id="ubs-trauma-healing-volunteers-supporting">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Trainings held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-trauma-healing-trainings-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Workshops held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-trauma-healing-workshops-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Meetings held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-trauma-healing-meetings-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Scriptures Distributed</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-trauma-healing-scriptures-distributed">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Churches involved by the BS</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-trauma-healing-churches-involved">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Individuals involved by the BS</small>
                                    <input type="number" step="1" class="form-control" id="ubs-trauma-healing-individuals-involved">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Testimonials on the change experience</small>
                                    <input type="number" step="1" class="form-control" id="ubs-jesus-film-experience-testimonials">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Literacy Program
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Volunteers engaged to support the works of the BS</small>
                                    <input type="number" step="1" class="form-control" id="ubs-literacy-program-volunteers-supporting">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Trainings held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-literacy-program-trainings-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Workshops held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-literacy-program-workshops-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Meetings held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-literacy-program-meetings-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Scriptures Distriuted</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-literacy-program-scriptures-distributed">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Churches involved by the BS</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-literacy-program-churches-involved">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Individuals involved by the BS</small>
                                    <input type="number" step="1" class="form-control" id="ubs-literacy-program-individuals-involved">
                                </fieldset>

                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Other Bible Study Programs, Engagements and Projects
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Volunteers engaged to support the works of the BS</small>
                                    <input type="number" step="1" class="form-control" id="ubs-other-programs-volunteers-supporting">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Trainings held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-other-programs-trainings-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Workshops held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-other-programs-workshops-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Meetings held</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-other-programs-meetings-held">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Scriptures Distributed</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-other-programs-scriptures-distributed">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Churches involved by the BS</small>
                                    <input type="number" step="1" class="form-control"
                                        id="ubs-other-programs-churches-involved">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Individuals involved by the BS</small>
                                    <input type="number" step="1" class="form-control" id="ubs-other-programs-individuals-involved">
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
