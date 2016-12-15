<div class="margin-bottom">
	{{ Form::open(array('action' => 'PostController@search', 'method' => 'GET')) }}
		<div class="input-group" style="width: 150px; display:inline-block;">
			<label>Từ khóa</label>
		  	<input type="text" name="keyword" class="form-control" placeholder="Search" />
		</div>
		<div class="input-group" style="width: 150px; display:inline-block;">
			<label>Thể loại</label>
		  	{{ Form::select('type', Common::getSelectArray('PostType', 3), '', array('class' =>'form-control')) }}
		</div>
		<div class="input-group" style="display: inline-block; vertical-align: bottom;">
			<input type="submit" value="Search" class="btn btn-primary" />
		</div>
	{{ Form::close() }}
</div>