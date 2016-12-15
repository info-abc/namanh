<?php 
	$postName = Common::getFieldModel('Post',$postId,'name');
?>
@extends('admin.layout.default')

@section('title')
{{ $title='Thêm ảnh slide bài viết' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('PostImageController@index2', $postId) }}" class="btn btn-success">Danh sách ảnh slide bài viết</a>
		<br>
		<p><a href="{{ action('PostController@edit', $postId) }}">{{ $postName }}</a></p>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => 'PostImageController@store', 'files' => true)) }}
				<div class="box-body">
					<div class="form-group">
						<label>Ảnh</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::file('image') }}
							</div>
						</div>
					</div>
					{{ Form::hidden('post_id', $postId) }}
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<input type="submit" class="btn btn-primary" value="Lưu lại" />
					<input type="reset" class="btn btn-default" value="Nhập lại" />
				</div>
			{{ Form::close() }}
		</div>
		<!-- /.box -->
	</div>
</div>

@stop
