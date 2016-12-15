<?php 
	$postName = Common::getFieldModel('Post',$postId,'name');
?>
@extends('admin.layout.default')

@section('title')
{{ $title='Quản lý ảnh slide bài viết' }}
@stop

@section('content')

	<div class="row margin-bottom">
		<div class="col-xs-12">
			<a href="{{ action('PostImageController@create2', $postId) }}" class="btn btn-primary">Thêm ảnh</a>
			<br>
			<p><a href="{{ action('PostController@edit', $postId) }}">{{ $postName }}</a></p>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách ảnh bài viết</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
							<th>ID</th>
							<th>Ảnh</th>
							<th>Ngày sửa</th>
							<th style="width:300px;">Action</th>
						</tr>
						@foreach($data as $key => $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td><img src="{{ $value->image }}" style="width:70px; max-height: 70px;" /></td>
							<td>{{ $value->updated_at }}</td>
							<td>
								<a href="{{ action('PostImageController@edit', $value->id) }}" class="btn btn-primary">Sửa</a>
								{{ Form::open(array('method'=>'DELETE', 'action' => array('PostImageController@destroy', $value->id), 'style' => 'display: inline-block;')) }}
								<button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</button>
								{{ Form::close() }}
							</td>
						</tr>
						@endforeach
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			{{ $data->appends(Request::except('page'))->links() }}
		</div>
	</div>

@stop
