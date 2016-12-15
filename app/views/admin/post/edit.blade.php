@extends('admin.layout.default')

@section('title')
{{ $title='Sửa bài viết' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('PostController@index') }}" class="btn btn-success">Danh sách</a>
		<a href="{{ action('PostController@create') }}" class="btn btn-primary">Thêm bài viết</a>
		<a href="{{ action('PostImageController@index2', $data->id) }}" class="btn btn-primary">Danh sách ảnh</a>
		<a href="{{ action('PostImageController@create2', $data->id) }}" class="btn btn-primary">Thêm ảnh</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => array('PostController@update', $data->id), 'method' => 'PUT', 'files' => true)) }}
				<div class="box-body">
					<div class="form-group">
						<label>Tiêu đề</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name" value="{{ $data->name }}">
							</div>
						</div>
					</div>
					<div class="form-group" style="position: relative;">
						<label>Ngày đăng</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control datetimeformat" name="start_date" value="{{ $data->start_date }}">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Thể loại</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('type', Common::getSelectArray('PostType', 1), $data->type, array('class' =>'form-control')) }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Giá (nếu bài đăng là sản phẩm)</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="price" value="{{ $data->price }}">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Mô tả ngắn</label>
						<div class="row">
							<div class="col-sm-6">
								<textarea class="form-control" name="summary" rows="4">{{ $data->summary }}</textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Nội dung</label>
						<div class="row">
							<div class="col-sm-10">
								<textarea class="form-control" name="description" id="editor1">{{ $data->description }}</textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Ảnh</label>
						<p>Kích cỡ: 390x250</p>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::file('image') }}
								@if($data->image != '')
								<img class="image_fb" src="{{ url($data->image) }}" />
								@endif
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Trạng thái</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('status', Common::selectStatus(), $data->status, array('class' =>'form-control')) }}
							</div>
						</div>
					</div>

					@include('admin.common.meta', array('isEdit'=>1))
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

@include('admin.common.ckeditor')

@stop
