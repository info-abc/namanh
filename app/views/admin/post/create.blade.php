@extends('admin.layout.default')

@section('title')
{{ $title='Thêm bài viết' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('PostController@index') }}" class="btn btn-success">Danh sách</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => 'PostController@store', 'files' => true)) }}
				<div class="box-body">
					<div class="form-group">
						<label>Tiêu đề</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name" value="">
							</div>
						</div>
					</div>
					<div class="form-group" style="position: relative;">
						<label>Ngày đăng</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control datetimeformat" name="start_date" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Thể loại</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('type', Common::getSelectArray('PostType', 1), '', array('class' =>'form-control')) }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Giá (nếu bài đăng là sản phẩm)</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="price" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Mô tả ngắn</label>
						<div class="row">
							<div class="col-sm-6">
								<textarea class="form-control" name="summary" rows="4"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Nội dung</label>
						<div class="row">
							<div class="col-sm-10">
								<textarea class="form-control" name="description" id="editor1"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Ảnh</label>
						<p>Kích cỡ: 390x250</p>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::file('image') }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Trạng thái</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('status', Common::selectStatus(), ACTIVE, array('class' =>'form-control')) }}
							</div>
						</div>
					</div>

					@include('admin.common.meta')
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

@include('admin.common.ckeditor')

@stop
