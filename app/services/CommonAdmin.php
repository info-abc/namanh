<?php 
class CommonAdmin 
{
	public static function uploadImage($path, $image, $currentImage = NULL)
	{
		$destinationPath = public_path().'/'.$path.'/';
		if(Input::hasFile($image)){
			$file = Input::file($image);
			$filename = $file->getClientOriginalName();
			$uploadSuccess = $file->move($destinationPath, changeFileNameImage($filename));
			return $path.changeFileNameImage($filename);
		}
		if($currentImage) {
			return $currentImage;
		}
		return '';
	}

	public static function searchAdmin($input)
	{
		$data = Admin::where(function ($query) use ($input){
			if ($input['role_id'] != '') {
				$query = $query->where('role_id', $input['role_id']);
			}
			if ($input['keyword'] != '') {
				$query = $query->where('email', 'like', '%'.$input['keyword'].'%')
								->orWhere('username', 'like', '%'.$input['keyword'].'%');
			}
			// if ($input['start_date'] != '') {
			// 	$query = $query->where('updated_at', '>=' ,$input['start_date'].' 00:00:00');
			// }
			// if ($input['end_date'] != '') {
			// 	$query = $query->where('updated_at', '<=' ,$input['end_date'].' 23:59:59');
			// }
		})->orderBy('id', 'asc')->paginate(PAGINATE);
		return $data;
	}

	public static function searchContact()
	{
		$input = Input::all();
		$data = Contact::where(function ($query) use ($input){
			if ($input['keyword'] != '') {
				$query = $query->where('name', 'like', '%'.$input['keyword'].'%')
								->orWhere('email', 'like', '%'.$input['keyword'].'%')
								->orWhere('phone', 'like', '%'.$input['keyword'].'%')
								->orWhere('message', 'like', '%'.$input['keyword'].'%');
			}
		})->orderBy('id', 'asc')->paginate(PAGINATE);
		return $data;
	}

	public static function searchPost()
	{
		$input = Input::all();
		$data = Post::where(function ($query) use ($input){
			if($input['keyword'] != '') {
				$query = $query->where('name', 'like', '%'.$input['keyword'].'%');
			}
			if($input['type'] != '') {
				$query = $query->where('type', $input['type']);
			}
		})->orderBy('id', 'asc')->paginate(PAGINATE);
		return $data;
	}

}