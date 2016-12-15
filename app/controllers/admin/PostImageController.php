<?php

class PostImageController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index2($postId)
	{
		$data = PostImage::where('post_id', $postId)->orderBy('id', 'desc')->paginate(PAGINATE);
		return View::make('admin.postimage.index')->with(compact('data', 'postId'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create2($postId)
	{
		return View::make('admin.postimage.create', array('postId'=>$postId));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::except('_token');
    	$input['image'] = CommonAdmin::uploadImage(UPLOADIMG_POST.$input['post_id'].'/', 'image');
    	$id = PostImage::create($input)->id;
    	if($id) {
    		Cache::flush();
    		return Redirect::action('PostImageController@index2', $input['post_id'])->with('success', 'Đã lưu!');
    	} else {
    		return Redirect::action('PostImageController@create2', $input['post_id'])->with('warning', 'Chưa lưu!');
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
		$data = PostImage::find($id);
        return View::make('admin.postimage.edit', array('data'=>$data, 'postId'=>$data->post_id));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::except('_token');
    	$data = PostImage::find($id);
    	$input['image'] = CommonAdmin::uploadImage(UPLOADIMG_POST.$data->post_id.'/', 'image', $data->image);
    	$input['post_id'] = $data->post_id;
    	$data->update($input);
    	Cache::flush();
		return Redirect::action('PostImageController@index2', $data->post_id)->with('success', 'Đã lưu!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = PostImage::find($id);
		$postId = $data->post_id;
		if($data) {
			Cache::flush();
			$data->delete();
		}
        return Redirect::action('PostImageController@index2', $postId)->with('success', 'Đã xóa!');
	}

}
