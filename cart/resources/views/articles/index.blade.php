@extends('live.layout') 
@section('headerstyles') @endsection
@section('headerscripts') @endsection

@section('submenu') @endsection
@section('slider')   @endsection      
@section('pagetitle')
<!-- Page Title ============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1>Blog</h1>
		<span>Our Latest News</span>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Blog</li>
		</ol>
	</div>

</section><!-- #page-title end -->
@endsection
 
@section('content')
<!-- Content ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Post Content ============================================= -->
                    <div class="postcontent nobottommargin clearfix">
	                    @foreach($articles as $article)
	                        <!-- Posts ============================================= -->
	                        <div id="posts" itemscope="" itemtype="http://schema.org/BlogPosting">
	                            <div class="entry clearfix">
	                               	<div class="entry-image">
									    @if($article->path)
										<img itemprop="image" class="img-responsive img-blog" src="{!! url($article->path . $article->file_name) !!}" width="100%" style="border: 1px solid #bdc3c7;" alt="" />
										@else
										<img itemprop="image" class="img-responsive img-blog" src="{!! url('assets/images/blog_default.png') !!}" width="100%" style="border: 1px solid #bdc3c7; height: 290px;" alt=""/>
										@endif 
									</div>
	                                <div class="entry-title">
	                                    <a href="">
	                                        <h2 itemprop="name headline">{!! $article->title !!}</h2>
	                                    </a>
	                                </div>
	                                <ul class="entry-meta clearfix">
	                                    <li><i class="icon-calendar3" datetime="{!! $article->created_at !!}">{!! $article->created_at !!}</i> </li>
	                                    <li>
	                                        <span class="byline"><i class="icon-user"></i>
	                                        	<span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
	                                            	<span itemprop="name">
	                                                <a href="https://plus.google.com/" itemprop="url" rel="author">
	                                                    The Grace Company
	                                                </a>
	                                                </span>
	                                            </span>
	                                        </span>
	                                    </li>
	                                    <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
	                                 {{--    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li> --}}
	                                  {{--   <li><a href="#"><i class="icon-camera-retro"></i></a></li> --}}
	                                </ul>
	                                <div class="entry-content content" itemprop="articleBody">
	                                   
	                                    <br />
	                                    <br />
	                                    <a href="" class="more-link">Read More</a>
	                                </div>
	                        	</div>
	                    	</div>
	                    	<!-- .posts end -->
	                    @endforeach


          
                    </div><!-- .postcontent end -->
 
            </div>

        </section><!-- #content end -->
<script type="text/javascript">
    !function ($) {
        $(function () {
            window.prettyPrint && prettyPrint()
        })
    }(window.jQuery)
</script>


@endsection

@section('footer') @endsection
@section('footerscripts') @endsection
@stop
