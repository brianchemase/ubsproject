@extends('homepage.inc.master')

@section('title', 'UBS Home')

@section('content')


  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="#">
            <img src="{{asset('userdash/logo/ubs-logo-light.png')}}" alt="" />
            <span>
              UBS
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!--
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-2">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="portfolio.html">Portfolio </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html">Services</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact us</a>
              </li>
            </ul>
            <div class="user_option">
              <div class="login_btn-container">
                <a href="">
                  Login
                </a>
              </div>
              <form class="form-inline my-2 my-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        -->
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <section class="slider_section">
      <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <!--
                <div class="col-md-3 col-lg-2 offset-md-2">
                  <div class="detail-box">
                    <h1>
                      Make Design
                    </h1>
                    <p>
                      There are many variations of passages of Lorem Ipsum
                      available, but the majority
                    </p>
                    <div>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                -->
                <div class="col-md-7 col-lg-8">
                  <div class="img-box">
                    <img src="{{asset('homepage/images/hero.png')}}" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <!--
                <div class="col-md-3 col-lg-2 offset-md-2">
                  <div class="detail-box">
                    <h1>
                      Make Design
                    </h1>
                    <p>
                      There are many variations of passages of Lorem Ipsum
                      available, but the majority
                    </p>
                    <div>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                -->
                <div class="col-md-7 col-lg-8">
                  <div class="img-box">
                    <img src="{{asset('homepage/images/hero.png')}}" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
  </div>

  <!-- custom menu -->
  <div class="custom_menu-container">
    <div class="container">
      <div class="custom_menu">
        <ul class="navbar-nav ">
            <!--
          <li class="nav-item active">
            <a class="nav-link pl-0" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.html">Portfolio </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.html">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact us</a>
          </li>
        -->
        </ul>
        <div class="user_option">
          <div class="login_btn-container">
            <a href="">
              Login
            </a>
          </div>
          <form class="form-inline my-2 my-lg-0">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- custom menu -->

  <!-- about section -->

  <section class="about_section layout_padding mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="img-box">
            <img src="{{asset('homepage/images/about-img.png')}}" alt="" />
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <div class="custom_heading-container">
              <h2>
                About Design
              </h2>
            </div>

            <p>
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout.
              The point of using Lorem Ipsum is that it has a more-or-less
              normal distribution of letters, as opposed to using 'Content
              here , content here', making it
            </p>
            <div>
              <a href="">
                About More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- do section -->
  <section class="do_section layout_padding-bottom">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          What we do
        </h2>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="content-box bg-red">
            <div class="img-box">
              <img src="{{asset('homepage/images/idea.png')}}" alt="" />
            </div>
            <div class="detail-box">
              <h6>
                Original Ideas
              </h6>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="content-box bg-green">
            <div class="img-box">
              <img src="{{asset('homepage/images/controller.png')}}" alt="" />
            </div>
            <div class="detail-box">
              <h6>
                Great apps
              </h6>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="content-box bg-red">
            <div class="img-box">
              <img src="{{asset('homepage/images/monitor.png')}}" alt="" />
            </div>
            <div class="detail-box">
              <h6>
                High Resolution
              </h6>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="content-box bg-green">
            <div class="img-box">
              <img src="{{asset('homepage/images/rocket-ship.png')}}" alt="" />
            </div>
            <div class="detail-box">
              <h6>
                Fast Loading
              </h6>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end do section -->
  <!-- skill section -->

  <section class="skill_section layout_padding2">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Our Skills
        </h2>
      </div>
      <div class="skill_padding">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-1"></div>
              <h6>
                Adobe Photoshop
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-2"></div>
              <h6>
                Adobe Ilustrator
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-3"></div>
              <h6>
                After Effects
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-4"></div>
              <h6>
                Adobe XD
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end skill section -->

  <!-- portfolio section -->
  <section class="portfolio_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Our Portfolio
        </h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6">
              <div class="box b-1">
                <img src="{{asset('homepage/images/p-1.png')}}" alt="" />
                <h4>
                  Logo Design
                </h4>
              </div>
              <div class="box b-2">
                <img src="{{asset('homepage/images/p-2.png')}}" alt="" />
                <h4>
                  Coding
                </h4>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="box b-3">
                <img src="{{asset('homepage/images/p-3.png')}}" alt="" />
                <h4>
                  Bike Design
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6">
              <div class="box b-4">
                <img src="{{asset('homepage/images/p-4.png')}}" alt="" />
                <h4>
                  Flower Design
                </h4>
              </div>
              <div class="box b-5">
                <img src="{{asset('homepage/images/p-5.png')}}" alt="" />
                <h4>
                  Website Design
                </h4>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="box b-6">
                <img src="{{asset('homepage/images/p-6.jpg')}}" alt="" />
                <h4>
                  More Design
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end portfolio section -->

  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>

    <div class="container">
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding2">
              <div class="client_box b-1">
                <div class="client-id">
                  <div class="img-box">
                    <img src="{{asset('homepage/images/client-1.jpg')}}" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth jon
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
              <div class="client_box b-2">
                <div class="client-id">
                  <div class="img-box">
                    <img src="{{asset('homepage/images/client-2.jpg')}}" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth den
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_box b-1">
                <div class="client-id">
                  <div class="img-box">
                    <img src="{{asset('homepage/images/client-1.jpg')}}" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth jon
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
              <div class="client_box b-2">
                <div class="client-id">
                  <div class="img-box">
                    <img src="{{asset('homepage/images/client-2.jpg')}}" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth den
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_box b-1">
                <div class="client-id">
                  <div class="img-box">
                    <img src="{{asset('homepage/images/client-1.jpg')}}" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth jon
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
              <div class="client_box b-2">
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client-2.jpg" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth den
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
          <h2 class="custom_heading">Contact Us</h2>
          <form action="#">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Pone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex  mt-4 ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="{{asset('homepage/images/contact.jpg')}}" alt="" class="w-100" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding-top layout_padding2-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_links pl-lg-5">
            <h4>
              Menu
            </h4>
            <ul>
              <li class="active">
                <a href="index.html">
                  Home
                </a>
              </li>
              <li>
                <a href="about.html">
                  About
                </a>
              </li>
              <li>
                <a class="" href="portfolio.html">Portfolio </a>
              </li>
              <li>
                <a class="" href="service.html">Services</a>
              </li>
              <li>
                <a href="contact.html">
                  Contact Us
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h4>
              Location
            </h4>
            <div>
              <img src="{{asset('homepage/images/location.png')}}" alt="" />
              <p>
                104 loram ipusm
              </p>
            </div>
            <div>
              <img src="{{asset('homepage/images/telephone.png')}}" alt="" />
              <p>
                ( +01 1234567890 )
              </p>
            </div>
            <div>
              <img src="{{asset('homepage/images/envelope.png')}}" alt="" />
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h4>
              Social Link
            </h4>
            <div class="social_container">
              <div>
                <a href="">
                  <img src="{{asset('homepage/images/facebook-logo.png')}}" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="{{asset('homepage/images/twitter-logo.png')}}" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="{{asset('homepage/images/instagram.png"')}} alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="{{asset('homepage/images/linkedin-sign.png')}}" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form">
            <h4>
              Newsletter
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

 @endsection
