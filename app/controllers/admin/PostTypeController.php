<?php

class PostTypeController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = PostType::orderBy('id', 'desc')->paginate(PAGINATE);
		return View::make('admin.posttype.index')->with(compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.posttype.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'name'   => 'required|unique:post_types|unique:posts',
			'slug'   => 'unique:post_types|unique:posts',
		);
		$input = Input::except('_token');
		$input['slug'] = convertToSlug($input['name']);
		$validator = Validator::make($input,$rules);
		if($validator->fails()) {
			return Redirect::action('PostTypeController@create')
	            ->withErrors($validator)
	            ->withInput($input);
        } else {
        	$input['meta_image'] = CommonAdmin::uploadImage(UPLOADIMG_TYPE, 'meta_image');
        	$id = PostType::create($input)->id;
        	if($id) {
        		Cache::flush();
        		return Redirect::action('PostTypeController@index')->with('success', 'Đã lưu!');
        	} else {
        		dd('Error');
        	}
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = PostType::find($id);
        return View::make('admin.posttype.edit', array('data'=>$data));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'name'   => 'required|unique:post_types,name,'.$id.'|unique:posts',
			'slug'   => 'unique:post_types,slug,'.$id.'|unique:posts',
		);
		$input = Input::except('_token');
		$input['slug'] = convertToSlug($input['name']);
		$validator = Validator::make($input,$rules);
		if($validator->fails()) {
			return Redirect::action('PostTypeController@edit', $id)
	            ->withErrors($validator)
	            ->withInput($input);
        } else {
        	$data = PostType::find($id);
        	$input['meta_image'] = CommonAdmin::uploadImage(UPLOADIMG_TYPE, 'meta_image', $data->meta_image);
        	$data->update($input);
        	Cache::flush();
    		return Redirect::action('PostTypeController@index')->with('success', 'Đã lưu!');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$checkPost = Post::where('type', $id)->count();
		if($checkPost > 0) {
			return Redirect::action('PostTypeController@index')->with('warning', 'Không thể xóa do có bài viết');
		}
		$data = PostType::find($id);
		if($data) {
			Cache::flush();
			$data->delete();
		}
        return Redirect::action('PostTypeController@index')->with('success', 'Đã xóa!');
	}

}
