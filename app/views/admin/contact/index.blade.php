@extends('admin.layout.default')

@section('title')
{{ $title='Quản lý liên hệ' }}
@stop

@section('content')

	@include('admin.contact.search')

	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
							<th>ID</th>
							<th>Tên</th>
							<th>Email</th>
							<th>Điện thoại</th>
							<th>Tin nhắn</th>
							<th>Ngày tạo</th>
							<th style="width:100px;">Action</th>
						</tr>
						@foreach($data as $key => $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ $value->email }}</td>
							<td>{{ $value->phone }}</td>
							<td style="word-break: keep-all; width:300px; ">{{ $value->message }}</td>
							<td>{{ $value->created_at }}</td>
							<td>
								{{ Form::open(array('method'=>'DELETE', 'action' => array('ContactController@destroy', $value->id), 'style' => 'display: inline-block;')) }}
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
