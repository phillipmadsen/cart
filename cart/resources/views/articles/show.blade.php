@extends('live.layout') 
@section('headerstyles') @endsection
@section('headerscripts') @endsection

@section('submenu') @endsection
@section('slider')   @endsection      
@section('pagetitle') 
<!-- Page Title ============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h2>Blog Article</h2>
        <ol class="breadcrumb">
            <li><a href="{!! url('/') !!}">Home</a></li>
            <li><a href="{!! url('/') !!}/articles/">Blog</a></li>
            <li class="active">{!! $article->title !!}</li>
        </ol>
    </div>

</section><!-- #page-title end -->

@endsection
 
@section('content')
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<!-- Post Content ============================================= -->
			<div class="postcontent nobottommargin clearfix">
				<div class="single-post nobottommargin">
					<!-- Single Post ============================================= -->
					<div class="entry clearfix">
						<!-- Entry Title ============================================= -->
						<div class="entry-title">
							<h1 itemprop="headline">{!! $article->title !!}</h1>
						</div>
						<!-- .entry-title end -->
						<span itemprop="description">A most wonderful article</span>
						<!-- Entry Meta ============================================= -->
						<ul class="entry-meta clearfix">
							<li> <i class="icon-calendar3" datetime="{!! $article->created_at !!}"></i>
								{!! $article->created_at !!}
							</li>
							<li>
								<span class="byline"> <i class="icon-user"></i>
									<span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
										<span itemprop="name">
											<a href="https://plus.google.com/" itemprop="url" rel="author">The Grace Company</a>
										</span>
									</span>
								</span>
							</li>
							<li>
								<i class="icon-folder-open"></i>
								<a href="#">General</a>
								,
								<a href="#">Media</a>
							</li>
							{{-- <li> <a href="blog-single.html#comments"> <i class="icon-comments"></i> 13 Comments </a> </li> --}}
							{{-- <li> <a href="#"> <i class="icon-camera-retro"></i> </a> </li> --}}
							<meta itemprop="datePublished" content="{!! $article->created_at !!}"/>
						</ul>
						{{--
						<ul class="entry-meta clearfix">
							<li> <i class="icon-calendar3"></i> 10th July 2014 </li> 
							<li> <a href="#"> <i class="icon-user"></i> admin </a> </li> 
							<li> <i class="icon-folder-open"></i> <a href="#">General</a> , <a href="#">Media</a> </li>  
							<li> <a href="#"> <i class="icon-comments"></i> 43 Comments </a> </li> 
							<li> <a href="#"> <i class="icon-camera-retro"></i> </a> </li> 
							</ul>
						--}}
						<!-- .entry-meta end -->
						<!-- Entry Image ============================================= -->
						<div class="entry-image">
						    @if($article->path)
							<img itemprop="image" class="img-responsive img-blog" src="{!! url($article->path . $article->file_name) !!}" width="100%" style="border: 1px solid #bdc3c7;" alt="" />
							@else
							<img itemprop="image" class="img-responsive img-blog" src="{!! url('assets/images/blog_default.png') !!}" width="100%" style="border: 1px solid #bdc3c7; height: 290px;" alt=""/>
							@endif 
						</div>
						<!-- .entry-image end -->
						<!-- Entry Content ============================================= -->
						<div class="entry-content notopmargin" itemprop="articleBody">
							{!! $article->articlebody !!}
							<!-- Post Single - Content End -->
							<!-- Tag Cloud ============================================= -->
							<i class="icon-tags"></i>
							Tags
							<div class="tagcloud clearfix bottommargin">
							 
							</div>
							<!-- .tagcloud end -->
							<div class="clear"></div>
							<!-- Post Single - Share ============================================= -->
							<div class="si-share noborder clearfix">
								<span>Share this Post:</span>
								<div>
									<a href="#" class="social-icon si-borderless si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-rss">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-email3">
										<i class="icon-email3"></i>
										<i class="icon-email3"></i>
									</a>
								</div>
							</div>
							<!-- Post Single - Share End -->
						</div>
					</div>
					<!-- .entry end -->
					{{--
					<div class="line"></div>
					--}}
					<!-- Post Author Info ============================================= -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Posted by
								<span>
									<a href="#">The Grace Company</a>
								</span>
							</h3>
						</div>
						<div class="panel-body">
							<div class="author-image">
								<img src="{!! url('frontend/images/author/1.jpg') !!}" alt="" class="img-circle"></div>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
						</div>
					</div>
					<!-- Post Single - Author End -->
					<div class="line"></div>
					<h4>Related Posts:</h4>
					<div class="related-posts clearfix">
						<div class="col_half nobottommargin">
							{{-- @foreach($articles->slice(0, round($categories->count()/4)) as $article) --}}
							<div class="mpost clearfix">
								{{--     @if($article->path)
								<div class="entry-image">
									<a href="{!! URL::route('dashboard.article.show', array('slug'=>
										$article->slug)) !!}">
										<img src="{!! url($article->
										path . $article->file_name) !!}" alt="Blog - {!! $article->title !!}">
									</a>
								</div>
								@else
								<div class="entry-image">
									<a href="{!! URL::route('dashboard.article.show', array('slug'=>
										$article->slug)) !!}">
										<img src="{!! url('frontendimages/blog/small/20.jpg') !!}" alt="Blog - {!! $article->title !!}"></a>
								</div>
								@endif
								<div class="entry-c">
									<div class="entry-title">
										<h4>
											<a href="{!! URL::route('dashboard.article.show', array('slug'=>
												$article->slug)) !!}">
{!! $article->title !!}
											</a>
										</h4>
									</div>
									<ul class="entry-meta clearfix">
										<li>
											<i class="icon-calendar3"></i>
											{!! $article->created_at !!}
										</li>
										<li>
											<a href="#">
												<i class="icon-comments"></i>
												12
											</a>
										</li>
									</ul>
									<div class="entry-content">{!! $article->summary !!}</div>
								</div>
								--}}
							</div>
							{{-- @endforeach --}}
{{--
							<div class="mpost clearfix">
								@if($article->path)
								<div class="entry-image">
									<a href="#">
										<img src="{!! url($article->path . $article->file_name) !!}" alt="Blog Single"></a>
								</div>
								@else
								<div class="entry-image">
									<a href="#">
										<img src="{!! url('frontendimages/blog/small/20.jpg') !!}" alt="Blog Single"></a>
								</div>
								@endif
								<div class="entry-c">
									<div class="entry-title">
										<h4>
											<a href="#">This is a Video Post</a>
										</h4>
									</div>
									<ul class="entry-meta clearfix">
										<li>
											<i class="icon-calendar3"></i>
											24th July 2014
										</li>
										<li>
											<a href="#">
												<i class="icon-comments"></i>
												16
											</a>
										</li>
									</ul>
									<div class="entry-content">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.
									</div>
								</div>
							</div>
							--}}










{{-- 
@foreach($article as $article)
<div class="spost clearfix">
    <div class="entry-c">
            <div class="pull-left recent-post-image ">
            
           
                <a class="nobg" href="" itemprop="url">
                    <img itemprop="image" src="{!! url('frontend/images/blog_s.png') !!}" alt="{!! $article->title !!} image">
                </a>
           
            </div>
        <div class="entry-title">
            <h4><a href="" itemprop="url">
                <span itemprop="name">{!! $article->title !!}</span>
                </a>
            </h4>
        </div>
        <ul class="entry-meta">
            <li><small class="muted">{!! $article->created_at !!}</small></li>
        </ul>
    </div>
</div>
@endforeach
 --}}














						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- .postcontent end -->
		<!-- Sidebar ============================================= -->
	</div>
</div>
</section>
<!-- #content end -->


@endsection

@section('footer') @endsection
@section('footerscripts') @endsection
@stop
