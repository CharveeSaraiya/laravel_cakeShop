@extends('user.userheader2')
@section('content2')
<div class="parallax-container breadcrumbs_section">
      <div class="breadcrumbs-custom-body parallax-content context-dark">
        <div class="container">
          <h1 class="breadcrumbs-custom-title">About Us</h1>
        </div>
      </div>
    </div>
    <div class="breadcrumbs-custom-footer">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">About Us</li>
        </ul>
      </div>
    </div>
    @endsection
@section('content')
  <!-- Section About-->
       <div class="row row-40 row-md-60 justify-content-center align-items-xl-center">
        <div class="col-md-11 col-lg-6 col-xl-5"> 
          <!-- Quote Classic Big-->
          <article class="quote-classic-big inset-xl-right-30">
            <div class="heading-2 quote-classic-big-text">
              <div class="q">America’s Best Wedding Cakes</div>
            </div>
          </article>
          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1"> 
            <!-- Nav tabs-->
            <div class="nav-tabs-wrap">
              <ul class="nav nav-tabs">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">About</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Our mission</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Our goals</a></li>
              </ul>
            </div>
            <!-- Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-1-1">
                <p> delicious cake is simply dummy text of the printing and typesetting industry. delicious cakes has been the industry's fav.</p>
                <p>delicious cakes is simply dummy text of the printing and typesetting industry. delicious cakes has been the industry's  fav ever since the 1500s,</p>
              </div>
              
            </div>
          </div>
          <a class="button button-sm button-primary button-zakaria" href="grid-shop.html">shop now</a> </div>
        <div class="col-md-11 col-lg-6 col-xl-7">
          <div class="slick-slider-1 inset-xl-left-35"> 
            <!-- Slick Carousel-->
            <div class="slick-slider carousel-parent slick-nav-1 slick-nav-2" id="carousel-parent" data-items="1" data-autoplay="true" data-slide-effect="true" data-child="#child-carousel" data-for="#child-carousel" data-arrows="true">
              <div class="item"><img src="{{url('images/about/about-big-1.jpg')}}" alt="" width="634" height="373"/> </div>
              <div class="item"><img src="{{url('images/about/about-big-2.jpg')}}" alt="" width="634" height="373"/> </div>
              <div class="item"><img src="{{url('images/about/about-big-3.jpg')}}" alt="" width="634" height="373"/> </div>
              <div class="item"><img src="{{url('images/about/about-big-4.jpg')}}" alt="" width="634" height="373"/> </div>
            </div>
            <div class="slick-slider child-carousel" id="child-carousel" data-items="3" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-xxl-items="4" data-for="#carousel-parent">
              <div class="item"><img src="{{url('images/about/about-mini-1.jpg')}}" alt="" width="143" height="114"/> </div>
              <div class="item"><img src="{{url('images/about/about-mini-2.jpg')}}" alt="" width="143" height="114"/> </div>
              <div class="item"><img src="{{url('images/about/about-mini-3.jpg')}}" alt="" width="143" height="114"/> </div>
              <div class="item"><img src="{{url('images/about/about-mini-4.jpg')}}" alt="" width="143" height="114"/> </div>
            </div>
          </div>
        </div>
      </div>
     
  @endsection