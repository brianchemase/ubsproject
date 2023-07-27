@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Mission Sustainability</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dash') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Mission Reports
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <div class="col-12 card">
                    <div class="card-body">
                        <a href="{{ route('bibleTranslationForm') }}" class="btn btn-primary"> Bible Translation Data Form</a>

                        <a href="{{ route('biblePublishingAndDistributionForm') }}" class="btn btn-primary"> Bible Publishing and Distribution Data Form</a>

                        <a href="{{ route('scriptureEngagementForm') }}" class="btn btn-primary"> Scripture Engagement Data Form</a>

                    </div>

                </div>



            </div>
        </div>
    </div>
@endsection
