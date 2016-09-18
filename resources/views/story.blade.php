
@extends('layouts.app')

@section('title')
{{$blog->title}} | SHPE CSUN
@stop

@section('bodyTag','Story')

@section('content')
	<div class="page-header header-filter" data-parallax="active" style="background-image: url({{ asset($blog->banner_image->source) }}); background-position: top; ">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h1 class="title">{{$blog->title}}</h1>
					<h4>{{str_limit($blog->summary,95)}}</h4>
					<br />
					<a href="#story" class="btn btn-primary btn-round btn-lg">
						<i class="material-icons">format_align_left</i> Read story
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="main main-raised">
		<div class="container">
            <div class="section section-text">
            <a name="story"></a>
                <div class="row" >
    				<div class="col-md-8 col-md-offset-2">
    					<p class="blog-p">{{nl2br($blog->content)}}</p>
					</div>
				</div>
                <div class="row">
					<div class="col-md-8 col-md-offset-2">
						<hr/>
						<div class="card card-profile card-plain">
							<div class="row">
								<div class="col-xs-2">
									<div class="card-avatar">
			                        	@if(str_contains($blog->author_image->source,'http'))
			                                <img class="img" src="{{$blog->author_image->source}}">
			                            @else
			                                <img class="img" src="{{ asset("images/".$blog->author_image->source) }}">
			                            @endif									
			                            <div class="ripple-container"></div></div>
								</div>
								<div class="col-xs-6">
									<h4 class="card-title text-left">{{$blog->author}}</h4>
									<p class="description text-left">{{$blog->status}}</p>
								</div>
								<div class="col-xs-4">
									<a href="#pablo" class="btn btn-twitter btn-round pull-right">
										<i class="fa fa-twitter"></i> 910
									</a>
									<a href="#pablo" class="btn btn-facebook btn-round pull-right">
										<i class="fa fa-facebook-square"></i> 872
									</a>
							</div>
							</div>
						</div>
					</div>
    			</div>
			</div>
        </div>
    </div>
@endsection