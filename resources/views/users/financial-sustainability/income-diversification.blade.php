@extends('users.inc.master')

@section('title', 'User Forms')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Income Diversification</h3>
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
            <h4 class="content-header-title">Income Diversification</h4>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <label class="card-title" for="inputDanger"><strong>Income Diversification</strong></label>
                </div>
                <div class="card-block">
                    <div class="card-body">
                        <form class="needs-validation" novalidate="">
                          <div class="form-row">
                            
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01">Physical Channel Sales</label>
                                <input type="text" class="form-control position-relative" placeholder="holder"  required="">
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="validationTooltip02">Bible Society Ecommerce</label>
                              <input type="text" class="form-control position-relative" placeholder="holder"  required="">
                            </div>

                            <div class="col-md-4 mb-3">
                              <label for="validationTooltip02">Other Online Marketplace Sales</label>
                              <input type="text" class="form-control position-relative" placeholder="holder"  required="">
                            </div>
                           
                          </div>
                           
                             <h4 class="form-section"><i class="ft-clipboard"></i> Membership Fees</h4>
                          <div class="form-row">

                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip02">Individual Membership</label>
                              <input type="text" class="form-control position-relative" placeholder="holder"  required="">
                            </div>

                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip02">Church and Corporate Membership</label>
                              <input type="text" class="form-control position-relative" placeholder="holder"  required="">
                            </div>

                        
                          </div>

                        
                        <h4 class="form-section"><i class="ft-clipboard"></i> Fundraising</h4>
                          <div class="form-row">
                        
                            <div class="col-md-4 mb-3">
                              <label for="validationTooltip02">Physical Fundraising</label>
                              <input type="text" class="form-control position-relative" placeholder="holder"  required="">
                            </div>

                            <div class="col-md-4 mb-3">
                              <label for="validationTooltip02">International Support Programme (UBSA ISP)</label>
                              <input type="text" class="form-control position-relative" placeholder="holder"  required="">
                            </div>

                            <div class="col-md-4 mb-3">
                              <label for="validationTooltip02">Grants from Online Campaigns</label>
                              <input type="text" class="form-control position-relative" placeholder="holder"  required="">
                            </div>

                          </div>

                          <h4 class="form-section"><i class="ft-clipboard"></i> Copyrights and Royalties</h4>
                          <div class="form-row">
                        
                            <div class="col-md-8 mb-3">
                              <label for="validationTooltip02">Copyright and Royalty income</label>
                              <input type="text" class="form-control position-relative" placeholder="holder"  required="">
                            </div>

                          </div>

                          <h4 class="form-section"><i class="ft-clipboard"></i> Business and Rental Income</h4>
                          <div class="form-row">
                        
                            <div class="col-md-8 mb-3">
                              <label for="validationTooltip02">Business and Rental Income</label>
                              <input type="text" class="form-control position-relative" placeholder="holder"  required="">
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
