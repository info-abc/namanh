<?php 
	if(isset($configSite)) {
		$title = ($configSite->meta_title)?$configSite->meta_title:'Trang chủ';
		$meta_title = $configSite->meta_title;
		$meta_keyword = $configSite->meta_keyword;
		$meta_description = $configSite->meta_description;
		$meta_image = $configSite->meta_image;
	}
	$extendData = array(
			'pageHome'=>1,
			'meta_title' => $meta_title,
			'meta_keyword' => $meta_keyword,
			'meta_description' => $meta_description,
			'meta_image' => $meta_image,
		);
?>
@extends('site.layout.default', $extendData)

@section('title', 'Trang chủ')

@section('content')
	
<!--========================================================
													CONTENT 
=========================================================-->
<section id="content">        

	@if(count($banners) > 0)
	<!-- start Camera -->
	<div class="camera_main_container  wow fadeIn">
		<div class="slider_wrapper">
			<div class="" id="camera_wrap">
				@foreach($banners as $value)
				<div data-src="{{ url($value->image) }}">
					<div class="caption fadeIn">
						<div class="caption_bg">
							<span class="slider_txt1">{{ $value->name }} </span>
							<span class="slider_txt2 color4">{{ $value->name2 }} </span>
							<span class="slider_txt3 color4">{{ $value->summary }}</span>
							@if(isset($value->url) && $value->url != '' && $value->url != '#')
							<a href="{{ $value->url }}" class="camera_more_btn v2">Xem thêm</a>
							@endif
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end Camera -->
	@endif


	<div class="box-2 custom-box-2">
		<h3 class="box-title-center">Sản phẩm nổi bật</h3>
		<div class="container">
			<div class="row">
				@if(count($posts) > 0)
				@foreach($posts as $value)
				@if(count($posts) == 2)
				<div class="grid_2"></div>
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
				<div class="grid_2"></div>
				@else
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
				@endif
				@endforeach
				@endif
			</div>
			<div class="pj-seemore"><a href="/san-pham">Xem thêm sản phẩm</a></div>
		</div>
	</div>

	<div class="box-4 custom-box-4">
		<h3 class="box-title-center">Tin mới nhất</h3>
		<div class="container">
			<div class="row">
				@if(count($article) > 0)
				@foreach($article as $value)
				<div class="grid_4 wow fadeInUp">
					<div class="post-item article-item">
						<a href="{{ url($value->slug) }}">
							<img src="{{ url($value->image) }}" alt="{{ $value->name }}">
						</a>
						<div class="post-title article-title">
							<a href="{{ url($value->slug) }}">
								<span>{{ $value->name }}</span>
							</a>
						</div>
						<div class="post-summary article-summary">
							<span>{{ limit_text($value->summary,350) }}</span>
						</div>
					</div>
				</div>
				@endforeach
				@endif
			</div>
		</div>
	</div>


	@include('site.common.bottom')

</section>

@stop
