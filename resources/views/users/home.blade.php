@extends('users.inc.master')

@section('title','Dashboard')

@section('content')

<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Chart -->
        <div class="row match-height">
            <div class="col-12">
                <div class="">
                    <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div>
                </div>
            </div>
        </div>
<!-- Chart -->
<!-- eCommerce statistic -->
        <div class="row">
            <div class="col-8">
                <div class="card pull-up bg-gradient-directional-danger">
                    <div class="card-header bg-hexagons-danger">
                        <h4 class="card-title white">Analytics</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a class="btn btn-sm btn-white success box-shadow-1 round btn-min-width pull-right" href="#" target="_blank">Report <i class="ft-bar-chart pl-1"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show bg-hexagons-danger">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center width-100">
                                    <div id="Analytics-donut-chart" class="height-100 donutShadow"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;"><g class="ct-series ct-series-a"><path d="M50.416,5A45.424,45.424,0,1,0,50.424,5L50.424,10A40.424,40.424,0,1,1,50.417,10Z" class="ct-slice-donut-solid" ct:value="100"></path></g><g><text dx="50.42414474487305" dy="55.1241717338562" text-anchor="middle" class="ct-label" font-family="feather"></text></g><defs><linearGradient id="donutGradient1" x1="0" y1="1" x2="0" y2="0"><stop offset="0%" stop-color="rgba(250,203,205,1)"></stop><stop offset="95%" stop-color="rgba(250,203,205, 0.7)"></stop></linearGradient></defs></svg></div>
                                </div>
                                <div class="media-body text-right mt-1">
                                    <h3 class="font-large-2 white">12,515</h3>
                                    <h6 class="mt-1"><span class="text-muted white">Analytics in the <a href="#" class="darken-2 white">last year.</a></span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="card pull-up border-top-info border-top-3 rounded-0">
                    <div class="card-header">
                        <h4 class="card-title">New Clients <span class="badge badge-pill badge-info float-right m-0">5+</span></h4>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body p-1">
                            <h4 class="font-large-1 text-bold-400">18.5% <i class="ft-users float-right"></i></h4>
                        </div>
                        <div class="card-footer p-1">
                            <span class="text-muted"><i class="la la-arrow-circle-o-up info"></i> 23.67% increase</span>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="row">

              <div class="col-xl-4 col-lg-12">
              <div class="card">
                  <div class="card-header ">
                      <h4 class="card-title">Customer Stats</h4>
                      <a class="heading-elements-toggle">
                          <i class="la la-ellipsis-v font-medium-3"></i>
                      </a>
                      <div class="heading-elements">
                          <ul class="list-inline mb-0">
                              <li>
                                  <a data-action="reload">
                                      <i class="ft-rotate-cw"></i>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-content">
                      <div class="card-body text-center">
                          <div class="card-header pt-0 pb-0">
                              <p class="danger darken-2">Total Customers</p>
                              <h3 class="display-4 blue-grey lighten-2">14,962</h3>
                          </div>
                          <div class="card-content">
                              <div id="new-customers" class="height-150 donutShadow"></div>
                              <ul class="list-inline clearfix mt-2">
                                  <li>
                                      <h1 class="blue-grey lighten-2 text-bold-400">1465</h1>
                                      <span class="danger darken-2">
                                          <i class="ft-user"></i> Average New Customers</span>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>




        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card pull-up ecom-card-1 bg-white">
                    <div class="card-content ecom-card2 height-180">
                        <h5 class="text-muted danger position-absolute p-1">Progress Stats</h5>
                        <div>
                            <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                        </div>
                        <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                            <div id="progress-stats-bar-chart"></div>
                            <div id="progress-stats-line-chart" class="progress-stats-shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card pull-up ecom-card-1 bg-white">
                    <div class="card-content ecom-card2 height-180">
                        <h5 class="text-muted info position-absolute p-1">Activity Stats</h5>
                        <div>
                            <i class="ft-activity info font-large-1 float-right p-1"></i>
                        </div>
                        <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                            <div id="progress-stats-bar-chart1"></div>
                            <div id="progress-stats-line-chart1" class="progress-stats-shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card pull-up ecom-card-1 bg-white">
                    <div class="card-content ecom-card2 height-180">
                        <h5 class="text-muted warning position-absolute p-1">Sales Stats</h5>
                        <div>
                            <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
                        </div>
                        <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                            <div id="progress-stats-bar-chart2"></div>
                            <div id="progress-stats-line-chart2" class="progress-stats-shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ eCommerce statistic -->

        <!-- Statistics -->
        <div class="row match-height">
            <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="heading-multiple-thumbnails">Multiple Thumbnail</h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <span class="avatar">
                                    <img src="{{asset('dash/theme-assets/images/portrait/small/avatar-s-2.png')}}" alt="avatar">
                                </span>
                                <span class="avatar">
                                    <img src="{{asset('dash/theme-assets/images/portrait/small/avatar-s-3.png')}}" alt="avatar">
                                </span>
                                <span class="avatar">
                                    <img src="{{asset('dash/theme-assets/images/portrait/small/avatar-s-4.png')}}" alt="avatar">
                                </span>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Content title</h4>
                                <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie powder.Donut sweet
                                    roll marzipan pastry cookie cake tootsie roll oat cake cookie.Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake sugar plum. </p>
                                <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow lollipop chupa chups donut fruitcake
                                    cake.Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake sugar plum. Marshmallow
                                    wafer tiramisu jelly beans.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Recent products</h4>
                            <h6 class="card-subtitle text-muted">Carousel Card With Header & Footer</h6>
                        </div>
                        <div id="carousel-area" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-area" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-area" data-slide-to="1"></li>
                                <li data-target="#carousel-area" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="{{asset('dash/theme-assets/images/carousel/08.jpg')}}" class="d-block w-100" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('dash/theme-assets/images/carousel/03.jpg')}}" class="d-block w-100" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('dash/theme-assets/images/carousel/01.jpg')}}" class="d-block w-100" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                                    <span class="la la-angle-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                                    <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                        <span class="float-left">2 days ago</span>
                        <span class="tags float-right">
                            <span class="badge badge-pill badge-primary">Branding</span>
                            <span class="badge badge-pill badge-danger">Design</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Buyers</h4>
                        <a class="heading-elements-toggle">
                            <i class="fa fa-ellipsis-v font-medium-3"></i>
                        </a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a data-action="reload">
                                        <i class="ft-rotate-cw"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div id="recent-buyers" class="media-list">
                            <a href="#" class="media border-0">
                                <div class="media-left pr-1">
                                    <span class="avatar avatar-md avatar-online">
                                        <img class="media-object rounded-circle" src="{{asset('dash/theme-assets/images/portrait/small/avatar-s-7.png')}}" alt="Generic placeholder image">
                                        <i></i>
                                    </span>
                                </div>
                                <div class="media-body w-100">
                                    <span class="list-group-item-heading">Kristopher Candy

                                    </span>
                                    <ul class="list-unstyled users-list m-0 float-right">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('dash/theme-assets/images/portfolio/portfolio-1.jpg')}}"
                                                alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('dash/theme-assets/images/portfolio/portfolio-2.jpg')}}"
                                                alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 3" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('dash/theme-assets/images/portfolio/portfolio-4.jpg')}}"
                                                alt="Avatar">
                                        </li>
                                    </ul>
                                    <p class="list-group-item-text mb-0">
                                        <span class="blue-grey lighten-2 font-small-3"> #INV-12332 </span>
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="media border-0">
                                <div class="media-left pr-1">
                                    <span class="avatar avatar-md avatar-away">
                                        <img class="media-object rounded-circle" src="{{asset('dash/theme-assets/images/portrait/small/avatar-s-8.png')}}" alt="Generic placeholder image">
                                        <i></i>
                                    </span>
                                </div>
                                <div class="media-body w-100">
                                    <span class="list-group-item-heading">Lawrence Fowler

                                    </span>
                                    <ul class="list-unstyled users-list m-0 float-right">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('dash/theme-assets/images/portfolio/portfolio-5.jpg')}}"
                                                alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('dash/theme-assets/images/portfolio/portfolio-6.jpg')}}"
                                                alt="Avatar">
                                        </li>
                                    </ul>
                                    <p class="list-group-item-text mb-0">
                                        <span class="blue-grey lighten-2 font-small-3"> #INV-12333 </span>
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="media border-0">
                                <div class="media-left pr-1">
                                    <span class="avatar avatar-md avatar-busy">
                                        <img class="media-object rounded-circle" src="{{asset('dash/theme-assets/images/portrait/small/avatar-s-9.png')}}" alt="Generic placeholder image">
                                        <i></i>
                                    </span>
                                </div>
                                <div class="media-body w-100">
                                    <span class="list-group-item-heading">Linda Olson

                                    </span>
                                    <ul class="list-unstyled users-list m-0 float-right">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('dash/theme-assets/images/portfolio/portfolio-2.jpg')}}"
                                                alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('dash/theme-assets/images/portfolio/portfolio-5.jpg')}}"
                                                alt="Avatar">
                                        </li>
                                    </ul>
                                    <p class="list-group-item-text mb-0">
                                        <span class="blue-grey lighten-2 font-small-3"> #INV-12334 </span>
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="media border-0">
                                <div class="media-left pr-1">
                                    <span class="avatar avatar-md avatar-online">
                                        <img class="media-object rounded-circle" src="theme-assets/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                                        <i></i>
                                    </span>
                                </div>
                                <div class="media-body w-100">
                                    <span class="list-group-item-heading">Roy Clark

                                    </span>
                                    <ul class="list-unstyled users-list m-0 float-right">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="theme-assets/images/portfolio/portfolio-6.jpg"
                                                alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="theme-assets/images/portfolio/portfolio-1.jpg"
                                                alt="Avatar">
                                        </li>
                                    </ul>
                                    <p class="list-group-item-text mb-0">
                                        <span class="blue-grey lighten-2 font-small-3"> #INV-12335 </span>
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="media border-0">
                                <div class="media-left pr-1">
                                    <span class="avatar avatar-md avatar-online">
                                        <img class="media-object rounded-circle" src="theme-assets/images/portrait/small/avatar-s-11.png" alt="Generic placeholder image">
                                        <i></i>
                                    </span>
                                </div>
                                <div class="media-body w-100">
                                    <span class="list-group-item-heading">Kristopher Candy

                                    </span>
                                    <ul class="list-unstyled users-list m-0 float-right">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="theme-assets/images/portfolio/portfolio-5.jpg"
                                                alt="Avatar">
                                        </li>
                                    </ul>
                                    <p class="list-group-item-text mb-0">
                                        <span class="blue-grey lighten-2 font-small-3"> #INV-12336 </span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Statistics -->
                </div>
            </div>
            </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->



@endsection