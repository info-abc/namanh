<?php 
	if(isset($post)) {
		$title = ($post->meta_title!='')?$post->meta_title:$post->name;
		$meta_title = ($post->meta_title!='')?$post->meta_title:$post->name;
		$meta_keyword = ($post->meta_keyword!='')?$post->meta_keyword:$post->name;
		$meta_description = ($post->meta_description!='')?$post->meta_description:$post->name;
		$meta_image = $post->meta_image;
	}
	$extendData = array(
			'pagePost' => 1,
			'meta_title' => $meta_title,
			'meta_keyword' => $meta_keyword,
			'meta_description' => $meta_description,
			'meta_image' => $meta_image,
		);
?>
@extends('site.layout.default', $extendData)

@section('title', $title)

@section('content')
	
<!--========================================================
													CONTENT 
=========================================================-->
<section id="content">

	<div class="container">
		<h1 class="txt3 color4 marTop9 marBot3">{{ $post->name }}</h1>
		
		@if(count($images) > 0)
		<div class="post-images">
			<div class="row">
				@foreach($images as $value)
				<div class="grid_2">
					<a class="fancybox-button" rel="fancybox-button" href="{{ $value->image }}">
						<img src="{{ $value->image }}" alt="" />
					</a>
				</div>
				@endforeach
			</div>
		</div>
		@endif

		<p class="marBot3 summary">{{ $post->summary }}</p>

		<div class="marBot3 description">
			{{ $post->description }}	
		</div>

		@if(count($related) > 0)
		<div class="marBot3 related">
			@if($type == 2)
				<strong>Bài viết liên quan</strong>
			@else
				<strong>Sản phẩm liên quan</strong>
			@endif
			<div class="container">
			<div class="row">
			@if($type == 2)
				@foreach($related as $value)
				<div class="grid_4 wow fadeInUp">
					<div class="post-item">
						<a href="{{ url($value->slug) }}">
							<img src="{{ url($value->image) }}" alt="{{ $value->name }}">
						</a>
						<div class="post-title">
							<a href="{{ url($value->slug) }}">
								<span>{{ $value->name }}</span>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			@else
				@foreach($related as $value)
				<div class="grid_4 wow fadeIn">
					<div class="post-item">
						<a href="{{ url($value->slug) }}">
							<img src="{{ url($value->image) }}" alt="{{ $value->name }}">
						</a>
						<div class="post-title">
							<a href="{{ url($value->slug) }}">
								<span>{{ $value->name }}</span>
							</a>
						</div>
						<div class="post-price">
							<span>{{ $value->price }}</span>
						</div>
					</div>
				</div>
				@endforeach
			@endif
			</div>
			</div>
		</div>
		@endif


	</div>

	@include('site.common.bottom')

</section>

@stop
