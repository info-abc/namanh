@extends('admin.layout.default')

@section('title')
{{ $title='Sửa slide' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('SlideController@index') }}" class="btn btn-success">Danh sách</a>
		<a href="{{ action('SlideController@create') }}" class="btn btn-primary">Thêm slide</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => array('SlideController@update', $data->id), 'method' => 'PUT', 'files' => true)) }}
				<div class="box-body">
					<div class="form-group">
						<label>Ảnh</label>
						<p>Ảnh banner: 1920x711</p>
						<!-- <p>Ảnh Logo đối tác: 200x100</p> -->
						<div class="row">
							<div class="col-sm-6">
								{{ Form::file('image') }}
								@if($data->image != '')
								<img class="image_fb" src="{{ url($data->image) }}" />
								@endif
							</div>
						</div>
					</div>
					<div class="form-group" style="display: none;">
						<label>Loại slide</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('type', Common::selectSlide(), $data->type, array('class' =>'form-control')) }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Đường dẫn</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="url" value="{{ $data->url }}">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Tiêu đề 1</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name" value="{{ $data->name }}">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Tiêu đề 2</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name2" value="{{ $data->name2 }}">
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
