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

<section class="tooltip-validations" id="tooltip-validation">
    <div class="row"> 
        <div class="col-12 mt-3 mb-1">
            <h4 class="content-header-title">Validation Tooltips</h4>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <label class="card-title" for="inputDanger"><strong>Form Title</strong></label>
                </div>
                <div class="card-block">
                    <div class="card-body">
                        <form class="needs-validation" novalidate="">
                          <div class="form-row">
                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip01">First name</label>
                              <input type="text" class="form-control position-relative" placeholder="First name" value="Mark" required="">
                              
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip02">Last name</label>
                              <input type="text" class="form-control position-relative" id="validationTooltip02" placeholder="Last name" value="Otto" required="">
                              
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="validationTooltipUsername">Username</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                </div>
                                <input type="text" class="form-control position-relative" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required="">
                                <div class="invalid-tooltip">
                                  Please choose a unique and valid username.
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip03">City</label>
                              <input type="text" class="form-control position-relative" id="validationTooltip03" placeholder="City" required="">
                              <div class="invalid-tooltip">
                                Please provide a valid city.
                              </div>
                            </div>
                            <div class="col-md-3 mb-3">
                              <label for="validationTooltip04">State</label>
                              <input type="text" class="form-control position-relative" id="validationTooltip04" placeholder="State" required="">
                              <div class="invalid-tooltip">
                                Please provide a valid state.
                              </div>
                            </div>
                            <div class="col-md-3 mb-3">
                              <label for="validationTooltip05">Zip</label>
                              <input type="text" class="form-control position-relative" id="validationTooltip05" placeholder="Zip" required="">
                              <div class="invalid-tooltip">
                                Please provide a valid zip.
                              </div>
                            </div>

                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip05">Date</label>
                              <input type="date" class="form-control position-relative" id="validationTooltip05" placeholder="Zip" required="">
                              
                            </div>

                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip05">Select</label>
                              <!-- <input type="date" class="form-control position-relative" id="validationTooltip05" placeholder="Zip" required="">
                             -->
                             <select class="form-control" id="basicSelect">
                                                <option>Select Option</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                              
                            </div>

                          </div>
                          <button class="btn btn-primary" type="submit">Submit form</button>
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
