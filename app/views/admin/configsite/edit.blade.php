@extends('admin.layout.default')

@section('title')
{{ $title='Chỉnh sửa cài đặt' }}
@stop

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => array('ConfigsiteController@update', $data->id), 'method' => 'PUT')) }}
				<div class="box-body">
					<div class="form-group">
						<label>meta_title</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="meta_title" value="{{ $data->meta_title }}">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>meta_description</label>
						<div class="row">
							<div class="col-sm-6">
								<textarea class="form-control" name="meta_description" rows="6">{{ $data->meta_description }}</textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>meta_keyword</label>
						<div class="row">
							<div class="col-sm-6">
								<textarea class="form-control" name="meta_keyword" rows="6">{{ $data->meta_keyword }}</textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Google Analytics Code</label>
						<div class="row">
							<div class="col-sm-6">
								<textarea class="form-control" name="code" rows="6">{{ $data->code }}</textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Địa chỉ</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="address" value="{{ $data->address }}">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Điện thoại</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="phone" value="{{ $data->phone }}">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Email</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="email" class="form-control" name="email" value="{{ $data->email }}" >
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Thông tin công ty cuối trang</label>
						<div class="row">
							<div class="col-sm-6">
								<textarea class="form-control" name="company_information" rows="6">{{ $data->company_information }}</textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Thông tin liên hệ trang liên hệ</label>
						<div class="row">
							<div class="col-sm-10">
								<textarea class="form-control" name="company_contact" id="editor1">{{ $data->company_contact }}</textarea>
							</div>
						</div>
					</div>
					<!-- <div class="form-group">
						<label>Google Map code</label>
						<div class="row">
							<div class="col-sm-6">
								<textarea class="form-control" name="map" rows="6">{{-- $data->map --}}</textarea>
							</div>
						</div>
					</div> -->
					
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
