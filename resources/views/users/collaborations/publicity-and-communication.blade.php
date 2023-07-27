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
                                Online Interactions
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Corporate website traffic</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-web-traffic">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Email Communication</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-email-communication">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Social Media and Chat Interactions
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Facebook interactions</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-facebook-interactions">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Twitter interactions</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-twitter-interactions">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Instagram interactions</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-instagram-interactions">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Whatsapp interactions</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-whatsapp-interactions">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Signal interactions</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-signal-interactions">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">SMS interactions</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-sms-interactions">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-12 ">
                        <div class="card-block">
                            <div class="card-header">
                                Mainstream Media Interactions
                            </div>
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">Billboards</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-billboards">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Newspaper ads and mentions</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-newspaper">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">Radio mentions</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-radio-mentions">
                                </fieldset>
                                <fieldset class="form-group">
                                    <small class="text-muted">TV appearances</small>
                                    <input type="number" step="1" class="form-control"
                                        id="publicity-tv-appearances">
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
