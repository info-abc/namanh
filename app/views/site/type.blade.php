<?php 
	$page = Input::get('page');
	if(isset($page) && $page > 1) {
		$prefix = '|Trang '.$page;
	} else {
		$prefix = '';
	}
	if(count($type) > 0) {
		$title = ($type->meta_title!='')?$type->meta_title:$type->name;
		$meta_title = ($type->meta_title!='')?$type->meta_title:$type->name;
		$meta_keyword = ($type->meta_keyword!='')?$type->meta_keyword:$type->name;
		$meta_description = ($type->meta_description!='')?$type->meta_description:$type->name;
		$meta_image = $type->meta_image;
	}
	$extendData = array(
			'meta_title' => $meta_title.$prefix,
			'meta_keyword' => $meta_keyword,
			'meta_description' => $meta_description.$prefix,
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
		<h1 class="txt4 color4 marTop9 marBot3">{{ $type->name }}</h1>
		
		@if(count($posts) > 0)

			@if($posts[0]->type == 1)

			<div class="row">
				@foreach($posts as $value)
				<div class="grid_4">
					<div class="post-item">
						<a href="{{ url($value->slug) }}">
							<img src="{{ url($value->image) }}">
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
			</div>

			@else 
			
			<div class="row">
				@foreach($posts as $value)
				<div class="grid_4">
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
			</div>

			@endif

			@if($posts->getTotal() > PAGINATION)
			<div class="row">
				<ul class="pagination">
		    		{{ with(new Paginate($posts))->render() }}
		    	</ul>
			</div>
			@endif

		@endif

	</div>

	@include('site.common.bottom')

</section>

@stop
