{{-- meta input for edit form --}}
@if(isset($isEdit))
<h3>Thẻ meta</h3>
<div class="form-group">
	<label>Meta title</label>
	<div class="row">
		<div class="col-sm-6">
			<input type="text" class="form-control" name="meta_title" value="{{ $data->meta_title }}">
		</div>
	</div>
</div>
<div class="form-group">
	<label>Meta description</label>
	<div class="row">
		<div class="col-sm-6">
			<textarea type="text" class="form-control" rows="4" name="meta_description">{{ $data->meta_description }}</textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<label>Meta Keyword</label>
	<div class="row">
		<div class="col-sm-6">
			<textarea type="text" class="form-control" rows="4" name="meta_keyword">{{ $data->meta_keyword }}</textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<label>Upload ảnh facebook share</label>
	<div class="row">
		<div class="col-sm-6">
			{{ Form::file('meta_image') }}
			@if($data->meta_image != '')
			<img class="image_fb" src="{{ url($data->meta_image) }}" />
			@endif
		</div>
	</div>
</div>
@else
{{-- meta input for create form --}}
<h3>Thẻ meta</h3>
<div class="form-group">
	<label>Meta title</label>
	<div class="row">
		<div class="col-sm-6">
			<input type="text" class="form-control" name="meta_title" value="">
		</div>
	</div>
</div>
<div class="form-group">
	<label>Meta description</label>
	<div class="row">
		<div class="col-sm-6">
			<textarea type="text" class="form-control" rows="4" name="meta_description"></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<label>Meta Keyword</label>
	<div class="row">
		<div class="col-sm-6">
			<textarea type="text" class="form-control" rows="4" name="meta_keyword"></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<label>Upload ảnh facebook share</label>
	<div class="row">
		<div class="col-sm-6">
			{{ Form::file('meta_image') }}
		</div>
	</div>
</div>
@endif