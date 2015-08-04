@extends('live.layout') 
@section('headerstyles') @endsection
@section('headerscripts') @endsection

@section('submenu') @endsection
@section('slider')   @endsection      
@section('pagetitle')
<!-- Page Title ============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('{!! url('frontend/images/about/parallax.jpg') !!}'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
    <div class="container clearfix">
        <h1>About Us</h1>
        <span>Everything you need to know about our Company</span>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>   
            <li class="active">About Us</li>
        </ol>
    </div>
</section><!-- #page-title end -->
@endsection
 
@section('content')

   <!-- Content ============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="col_one_third">
                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>Why choose <span>Us</span>.</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>
                    </div>
                    <div class="col_one_third">
                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>Our <span>Mission</span>.</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>
                    </div>
                    <div class="col_one_third col_last">
                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>What we <span>Do</span>.</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>
                    </div>
                </div>
            </div>
        </section><!-- #content end -->
@endsection

@section('footer') @endsection
@section('footerscripts') @endsection
@stop
