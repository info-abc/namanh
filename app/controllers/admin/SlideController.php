<?php

class SlideController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Slide::orderBy('id', 'desc')->paginate(PAGINATE);
		return View::make('admin.slide.index')->with(compact('data'));
	}

	public function stype($type=SLIDE_BANNER)
	{
		$data = Slide::where('type', $type)->orderBy('id', 'asc')->paginate(PAGINATE);
		return View::make('admin.slide.index')->with(compact('data', 'type'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.slide.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::except('_token');
    	$input['image'] = CommonAdmin::uploadImage(UPLOADIMG_SLIDE, 'image');
    	$id = Slide::create($input)->id;
    	if($id) {
    		// $type = Slide::find($id)->type;
    		Cache::flush();
    		// return Redirect::action('SlideController@stype', $type)->with('success', 'Đã lưu!');
    		return Redirect::action('SlideController@index')->with('success', 'Đã lưu!');
    	} else {
    		return Redirect::action('SlideController@create')->with('warning', 'Chưa lưu!');
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
		$data = Slide::find($id);
        return View::make('admin.slide.edit', array('data'=>$data));
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
    	$data = Slide::find($id);
    	$input['image'] = CommonAdmin::uploadImage(UPLOADIMG_SLIDE, 'image', $data->image);
    	$data->update($input);
    	// $type = Slide::find($id)->type;
    	Cache::flush();
		// return Redirect::action('SlideController@stype', $type)->with('success', 'Đã lưu!');
		return Redirect::action('SlideController@index')->with('success', 'Đã lưu!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = Slide::find($id);
		// $type = $data->type;
		if($data) {
			Cache::flush();
			$data->delete();
		}
        // return Redirect::action('SlideController@stype', $type)->with('success', 'Đã xóa!');
        return Redirect::action('SlideController@index')->with('success', 'Đã xóa!');
	}

}
