@extends('admin.layout.default')

@section('title')
{{ $title='Quản lý mục nổi bật trang chủ' }}
@stop

@section('content')

	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách @if(isset($type)){{ Common::labelBlock($type) }}@endif</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
							<th>ID</th>
							<th>Tiêu đề 1</th>
							<th>Tiêu đề 2</th>
							<th>Đường dẫn</th>
							<th>&nbsp;</th>
							<th style="width:200px;">Action</th>
						</tr>
						@foreach($data as $key => $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ $value->name2 }}</td>
							<td>{{ $value->url }}</td>
							<td>{{ Common::labelBlock($value->type) }}</td>
							<td>
								<a href="{{ action('BlockController@edit', $value->id) }}" class="btn btn-primary">Sửa</a>
								{{ Form::open(array('method'=>'DELETE', 'action' => array('BlockController@destroy', $value->id), 'style' => 'display: inline-block;')) }}
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
