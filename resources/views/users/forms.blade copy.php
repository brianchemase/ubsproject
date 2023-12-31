@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Basic Form Elements</h3>
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
                <!-- Basic Inputs start -->
                <section class="basic-inputs">
                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Input</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="basicInput">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Password</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="password" class="form-control" id="passwordField">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With Placeholder</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="email" class="form-control" id="placeholderInput"
                                                placeholder="Enter Email Address">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disabled Input</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <p>Add <code>disabled</code> attribute to disable input field.</p>
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="disabledInput" disabled>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Readonly Input</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <p>Add <code>readonly="readonly"</code> attribute to set field readonly.</p>
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="readonlyInput"
                                                readonly="readonly" value="You can't change me. ;)">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Predefined Value</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <p>Add <code>value="VALUE"</code> attribute to set predefined value.</p>
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="predefinedInput" value="http://">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Static Text</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <p class="form-control-static" id="staticInput">email@themeselection.com</p>
                                            <p>To set static text use <code>.form-control-static</code> class.</p>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input text with help</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <small class="text-muted">eg.<i>someone@example.com</i></small>
                                            <input type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title" for="helpInput">Input with Help</label>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="helpInput"
                                                placeholder="With Help Text">
                                        </fieldset>
                                        <p class="text-muted">Muted help text using <code>.text-muted</code> class.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->

                <section class="textarea-select">
                    <!-- Textarea start -->
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Textarea &amp; Select</h4>
                            <p>Textual form controls—like <code>&lt;select&gt;</code>s, and
                                <code>&lt;textarea&gt;</code>s—are styled with the <code>.form-control</code> class.
                                Included are styles for general appearance, focus state, sizing, and more.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Textarea</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <h5 class="mt-2">Basic Textarea</h5>
                                        <fieldset class="form-group">
                                            <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                                        </fieldset>

                                        <h5 class="mt-2">Textarea with Placeholder</h5>
                                        <fieldset class="form-group">
                                            <textarea class="form-control" id="placeTextarea" rows="3" placeholder="Simple Textarea"></textarea>
                                        </fieldset>

                                        <h5 class="mt-2">Textarea with Description</h5>
                                        <fieldset class="form-group">
                                            <p class="text-muted">Textarea description text.</p>
                                            <textarea class="form-control" id="descTextarea" rows="3" placeholder="Textarea with description"></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Select</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <h5 class="mt-2">Basic Select</h5>
                                        <fieldset class="form-group">
                                            <select class="form-control" id="basicSelect">
                                                <option>Select Option</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </fieldset>
                                        <h5 class="mt-2">Custom select</h5>
                                        <p>To use custom select add class<code>.custom-select</code> to select.</p>
                                        <fieldset class="form-group">
                                            <select class="custom-select" id="customSelect">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </fieldset>
                                        <h5 class="mt-2">Multiple select</h5>
                                        <p>To use multiple select add an attribute<code> multiple="multiple"</code>.</p>
                                        <fieldset class="form-group">
                                            <select class="form-control" id="countrySelect" multiple="multiple">
                                                <option selected="selected">United States</option>
                                                <option>Canada</option>
                                                <option selected="selected">United Kingdom</option>
                                                <option>Japan</option>
                                                <option>Australia</option>
                                                <option>Germany</option>
                                                <option selected="selected">India</option>
                                                <option>Italy</option>
                                                <option>Sweden</option>
                                                <option>France</option>
                                                <option>New Zealand</option>
                                                <option>Switzerland</option>
                                                <option>Russia</option>
                                                <option>England</option>
                                                <option>Norway</option>
                                                <option>Greece</option>
                                                <option>Philippines</option>
                                                <option>Ireland</option>
                                                <option>China</option>
                                                <option>South Korea</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Textarea end -->
                </section>
            </div>
        </div>
    </div>

@endsection
