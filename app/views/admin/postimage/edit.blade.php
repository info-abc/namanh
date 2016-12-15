<?php 
	$postName = Common::getFieldModel('Post',$postId,'name');
?>
@extends('admin.layout.default')

@section('title')
{{ $title='Sửa ảnh slide bài viết' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('PostImageController@index2', $postId) }}" class="btn btn-success">Danh sách ảnh slide bài viết</a>
		<a href="{{ action('PostImageController@create2', $postId) }}" class="btn btn-primary">Thêm ảnh</a>
		<br>
		<p><a href="{{ action('PostController@edit', $postId) }}">{{ $postName }}</a></p>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => array('PostImageController@update', $data->id), 'method' => 'PUT', 'files' => true)) }}
				<div class="box-body">
					<div class="form-group">
						<label>Ảnh</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::file('image') }}
								@if($data->image != '')
								<img class="image_fb" src="{{ url($data->image) }}" />
								@endif
							</div>
						</div>
					</div>
					
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<input type="submit" class="btn btn-primary" value="Lưu lại" />
					<input type="reset" class="btn btn-default" value="Reset" />
				</div>
			{{ Form::close() }}
		</div>
		<!-- /.box -->
	</div>
</div>

@stop
