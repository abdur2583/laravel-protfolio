<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Website Title -->
      <title>John Doe - Professional web designer and photographer</title>
      <!-- Bootstrap -->
      <link href="{{ asset('assets') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome -->
      <link href="{{ asset('assets') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Lightbox -->
    <link href="{{ asset('assets') }}/lightbox/css/lightbox.css" rel="stylesheet">
      <!-- Text Rotator-->
    <link href="{{ asset('assets') }}/textrotator/simpletextrotator.css" rel="stylesheet">
    <!-- FlexSlider -->
      <link href="{{ asset('assets') }}/flexslider/flexslider.css" rel="stylesheet">
    <!-- Theme Style -->
      <link href="{{ asset('css') }}/style.css" rel="stylesheet">
    <!-- Animations -->
      <link href="{{ asset('css') }}/animate.css" rel="stylesheet">
    <!-- Custom Favicon -->
    <link href="{{ asset('img') }}/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
</head>

<body id="top">
		
  @include('layout.header')
		
 
		<!-- ==========================
        ABOUT SECTION  
        =========================== -->
        <section class="intro text-center section-padding color-bg" id="about">
          <div class="container">
		    <!-- WELCOME TEXT -->
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">A little <span>about</span> me</h1><!-- Headline -->
				<!-- about / welcome text -->
                <p>I am enough of an artist to draw freely upon my imagination. The point is that when I see a sunset or a <a href="#">waterfall</a> or something, for a split second it's so great, because for a little bit I'm out of my brain, and it's got nothing to do with me. I'm not trying to figure it out, you know what I mean? And I wonder if I can somehow find a way to maintain that mind stillness.</p>
              </div>
            </div>
          </div>
        </section>



        @yield('content')



			
		<!-- ==========================
        CUSTOM SPACER
        =========================== -->
		<div class="spacer-cta text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="index.html#contact" class="outline-btn">hire john doe</a>
              </div>
            </div>
          </div>
        </div>
		<!-- ==========================
        CUSTOM SPACER END
        =========================== -->
		

		
		
		@include('layout.footer')