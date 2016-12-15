<?php

class BlockController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Block::orderBy('id', 'asc')->paginate(PAGINATE);
		return View::make('admin.block.index')->with(compact('data'));
	}

	public function btype($type=BLOCK_1)
	{
		$data = Block::where('type', $type)->orderBy('id', 'asc')->paginate(PAGINATE);
		return View::make('admin.block.index')->with(compact('data', 'type'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		$data = Block::find($id);
		$type = $data->type;
        return View::make('admin.block.edit', array('data'=>$data, 'type'=>$type));
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
        $data = Block::find($id);
    	$data->update($input);
    	$type = $data->type;
    	Cache::flush();
		return Redirect::action('BlockController@btype', $type)->with('success', 'Đã lưu!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
