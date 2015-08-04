<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="" />

    <!-- Stylesheets
    ============================================= -->
    {!! HTML::style("//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic") !!}
    {!! Minify::stylesheet(array(
      	'/frontend/css/bootstrap.css', 
      	'/frontend/style.css',
      	'/frontend/css/dark.css',
      	'/frontend/css/font-icons.css',
      	'/frontend/css/animate.css',
      	'/frontend/css/magnific-popup.css' 
      	)) !!}
	 
    
    {!! HTML::style("frontend/custom-css/block.css") !!}
    {!! HTML::style("frontend/custom-css/header.css") !!}
    {!! HTML::style("frontend/custom-css/custom.css") !!}
     
@yield('headerstyles')     
     
    {!! Minify::stylesheet('/frontend/css/responsive.css') !!}

     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
         {!! HTML::script('//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js') !!}
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    {!! HTML::script('frontend/js/jquery.js') !!}
    {!! HTML::script('frontend/js/plugins.js') !!}
@yield('headercripts')

 	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-64291412-1', 'auto');
      ga('send', 'pageview');

    </script>
 <style>#top-cart, #top-search {float: right!important; } #primary-menu ul {float: left!important; }  </style>

    <!-- Document Title ============================================= -->
	<title> </title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

@include('live.header')
@yield('submenu')
@yield('slider')        
@yield('pagetitle')
@yield('content')

@yield('footer')
@include('live.footer')

    </div><!-- #wrapper end -->

    <!-- Go To Top ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
 
    {!! HTML::script('frontend/js/functions.js') !!}
@yield('footerscripts')
</body>
</html>
