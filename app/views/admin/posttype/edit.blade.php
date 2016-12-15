@extends('admin.layout.default')

@section('title')
{{ $title='Sửa thể loại' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('PostTypeController@index') }}" class="btn btn-success">Danh sách</a>
		<a href="{{ action('PostTypeController@create') }}" class="btn btn-primary">Thêm thể loại</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => array('PostTypeController@update', $data->id), 'method' => 'PUT', 'files' => true)) }}
				<div class="box-body">
					<div class="form-group">
						<label>Tiêu đề</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name" value="{{ $data->name }}">
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

@stop
