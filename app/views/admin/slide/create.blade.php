@extends('admin.layout.default')

@section('title')
{{ $title='Thêm slide' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('SlideController@index') }}" class="btn btn-success">Danh sách</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => 'SlideController@store', 'files' => true)) }}
				<div class="box-body">
					<div class="form-group">
						<label>Ảnh</label>
						<p>Ảnh banner: 1920x711</p>
						<!-- <p>Ảnh Logo đối tác: 200x100</p> -->
						<div class="row">
							<div class="col-sm-6">
								{{ Form::file('image') }}
							</div>
						</div>
					</div>
					<div class="form-group" style="display: none;">
						<label>Loại slide</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('type', Common::selectSlide(), SLIDE_BANNER, array('class' =>'form-control')) }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Đường dẫn</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="url" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Tiêu đề 1</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Tiêu đề 2</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name2" value="">
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
