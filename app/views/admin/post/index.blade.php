@extends('admin.layout.default')

@section('title')
{{ $title='Quản lý bài viết' }}
@stop

@section('content')

	@include('admin.post.search')

	<div class="row margin-bottom">
		<div class="col-xs-12">
			<a href="{{ action('PostController@create') }}" class="btn btn-primary">Thêm</a>
		</div>
	</div>

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
							<th>Tiêu đề</th>
							<th>Thể loại</th>
							<th>Ngày đăng</th>
							<th>Ngày sửa</th>
							<th style="width:260px;">Action</th>
						</tr>
						@foreach($data as $key => $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ Common::getFieldModel('PostType',$value->type,'name') }}</td>
							<td>{{ $value->start_date }}</td>
							<td>{{ $value->updated_at }}</td>
							<td>
								<a href="{{ action('PostController@edit', $value->id) }}" class="btn btn-primary">Sửa</a>
								{{ Form::open(array('method'=>'DELETE', 'action' => array('PostController@destroy', $value->id), 'style' => 'display: inline-block;')) }}
								<button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</button>
								{{ Form::close() }}
								<!-- <a href="{{-- action('PostImageController@index2', $value->id) --}}" class="btn btn-primary">Ảnh</a>
								<a href="{{-- action('PostImageController@create2', $value->id) --}}" class="btn btn-primary">Thêm ảnh</a> -->
								@if($value->type == 1)
									@if($value->home == INACTIVE)
									<a href="{{ action('PostController@doHighlight', $value->id) }}" class="btn btn-success" title="Đưa vào mục nổi bật">sp nổi bật</a>
									@else 
									<a href="{{ action('PostController@doHighlight', $value->id) }}" class="btn btn-default" title="Bỏ khỏi mục nổi bật">bỏ sp nổi bật</a>
									@endif
								@endif
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
