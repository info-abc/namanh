@extends('admin.layout.default')

@section('title')
{{ $title='Thêm thể loại' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('PostTypeController@index') }}" class="btn btn-success">Danh sách</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => 'PostTypeController@store', 'files' => true)) }}
				<div class="box-body">
					<div class="form-group">
						<label>Tiêu đề</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name" value="">
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

@stop
