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
                                <li class="breadcrumb-item"><a href="{{ route('dash') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('missionSustainabilityIndex') }}">Mission
                                        Reports</a>
                                </li>
                                <li class="breadcrumb-item active">Scripture Engagement Data Form
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
                            <h4 class="content-header-title">Scripture Engagement Data Form</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title" for="inputDanger"><strong>Scripture
                                            Engagement</strong></label>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate="">
                                            <h4 class="form-section"><i class="ft-clipboard"></i>Observing UBS Bible
                                                day/Bible Reading Trivia</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-bible-day-volunteers-supporting">Volunteers engaged to
                                                        support the works of the BS</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-bible-day-volunteers-supporting">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-bible-day-churches-involved">Churches involved by the
                                                        BS</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-bible-day-churches-involved">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-bible-day-individuals-involved">Individuals involved by
                                                        the BS</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-bible-day-individuals-involved">
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-clipboard"></i>Jesus Film</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-jesus-film-volunteers-supporting">Volunteers engaged to
                                                        support the works of the BS</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-jesus-film-volunteers-supporting">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-jesus-film-training-held">Training held</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-jesus-film-training-held">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-jesus-film-workshops-held">Workshops held</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-jesus-film-workshops-held">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-jesus-film-meetings-held">Meetings held</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-jesus-film-meetings-held">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-jesus-film-scriptures-distributed">Scriptures
                                                        Distributed</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-jesus-film-scriptures-distributed">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-jesus-film-churches-involved">Churches involved by the
                                                        BS</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-jesus-film-churches-involved">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-jesus-film-individuals-involved">Individuals involved by
                                                        the BS</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-jesus-film-individuals-involved">
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-clipboard"></i>Trauma Healing</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-trauma-healing-volunteers-supporting">Volunteers engaged
                                                        to support the works of the BS</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-trauma-healing-volunteers-supporting">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-trauma-healing-training-held">Training held</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-trauma-healing-training-held">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-trauma-healing-workshops-held">Workshops held</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-trauma-healing-workshops-held">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-trauma-healing-meetings-held">Meetings held</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-trauma-healing-meetings-held">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-trauma-healing-scriptures-distributed">Scriptures
                                                        Distributed</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-trauma-healing-scriptures-distributed">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-trauma-healing-churches-involved">Churches involved by
                                                        the BS</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-trauma-healing-churches-involved">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="ubs-trauma-healing-individuals-involved">Individuals
                                                        involved by the BS</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="ubs-trauma-healing-individuals-involved">
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
