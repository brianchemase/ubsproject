@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Publicity and Communication Data form</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dash') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('collaborationsIndex') }}">Collaborations</a>
                                </li>
                                <li class="breadcrumb-item active">Publicity and Communication Data form
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
                            <h4 class="content-header-title">Publicity and Communication Data Form</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title" for="inputDanger"><strong>Publicity and
                                            Communication</strong></label>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate="">
                                            <h4 class="form-section"><i class="ft-clipboard"></i>Online Interactions
                                            </h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="publicity-web-traffic">Corporate website traffic</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-web-traffic">
                                                </div>

                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="publicity-email-communication">Email Communication</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-email-communication">
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-clipboard"></i>Social Media and Chat
                                                Interactions</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="publicity-facebook-interaction">Facebook
                                                        interactions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-facebook-interaction">
                                                </div>

                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="publicity-twitter-interaction">Twitter interactions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-twitter-interaction">
                                                </div>

                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="publicity-instagram-interaction">Instagram
                                                        interactions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-instagram-interaction">
                                                </div>

                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="publicity-youtube-interaction">Youtube interactions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-youtube-interaction">
                                                </div>

                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="publicity-sms-interaction">SMS interactions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-sms-interaction">
                                                </div>

                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="publicity-whatsapp-interaction">Whatsapp
                                                        interactions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-whatsapp-interaction">
                                                </div>

                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="publicity-signal-interaction">Signal interactions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-signal-interaction">
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-clipboard"></i>Mainstream Media
                                                Interaction</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="publicity-billboard-publicity">Billboard publicity</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-billboard-publicity">
                                                </div>

                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="publicity-newspaper-publicity">Newspaper ADs and
                                                        Mentions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-newspaper-publicity">
                                                </div>

                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="publicity-radio-publicity">Radio Mentions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-radio-publicity">
                                                </div>

                                                <div class="form-group col-md-4 mb-3">
                                                    <label for="publicity-tv-publicity">TV Mentions</label>
                                                    <input type="number" step="1" class="form-control"
                                                        id="publicity-tv-publicity">
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
