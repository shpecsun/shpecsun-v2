@extends('layouts.app')

@section('title')
 Stories | SHPE CSUN
@stop

@section('bodyTag','Stories')

@section('content')
<div class="page-header header-filter header-small" data-parallax="active" style="background-image: url({{ asset('images/blog-banner.png') }});">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2 class="title">SHPE CSUN Provides Life Changing Expirences</h2>
				<h4>Here are a few.</h4>
			</div>
		</div>
	</div>
</div>

<div class="main main-raised">
	<div class="container">
		<div class="section">
			<h2 class="title">Stories</h2>
			<div class="row">
			@foreach($blogs->chunk(3) as $blog)
				<div class="col-md-6">
					<div class="card card-raised card-background" style="background-image: url({{ asset($blog[0]->banner_image->source) }}); background-position:top">
						<div class="content">
							<h6 class="category text-info">{{$blog[0]->type}}</h6>
							<a href="{{ url('stories/'.$blog[0]->slug) }}">
								<h3 class="card-title">{{$blog[0]->title}}</h3>
							</a>
							<p class="card-description">{{$blog[0]->summary}}</p>
							<a href="{{ url('stories/'.$blog[0]->slug) }}" class="btn btn-danger btn-round">
								<i class="material-icons">format_align_left</i> Read {{$blog[0]->type}}
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card card-raised card-background" style="background-image: url({{ asset($blog[1]->banner_image->source) }}); background-position:top">
						<div class="content">
							<h6 class="category text-info">{{$blog[1]->type}}</h6>
							<a href="{{ url('stories/'.$blog[1]->slug) }}">
								<h3 class="card-title">{{$blog[1]->title}}</h3>
							</a>
							<p class="card-description">{{$blog[1]->summary}}</p>
							<a href="{{ url('stories/'.$blog[1]->slug) }}" class="btn btn-danger btn-round">
								<i class="material-icons">format_align_left</i> Read {{$blog[1]->type}}
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card card-raised card-background" style="background-image: url({{ asset($blog[2]->banner_image->source) }}); background-position:top">
						<div class="content">
							<h6 class="category text-info">{{$blog[2]->type}}</h6>
							<a href="{{ url('stories/'.$blog[2]->slug) }}">
								<h3 class="card-title">{{$blog[2]->title}}</h3>
							</a>
							<p class="card-description">{{$blog[2]->summary}}</p>
							<a href="{{ url('stories/'.$blog[2]->slug) }}" class="btn btn-primary btn-round">
								<i class="material-icons">subject</i> Read {{$blog[2]->type}}
							</a>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div>
@endsection