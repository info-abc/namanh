@extends('admin.layout.default')

@section('title')
{{ $title='Sửa mục nổi bật' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('BlockController@btype', $type) }}" class="btn btn-success">Danh sách</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => array('BlockController@update', $data->id), 'method' => 'PUT')) }}
				<div class="box-body">
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
						<label>Đường dẫn</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="url" value="{{ $data->url }}">
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
