<?php
class Common {
	
	public static function selectRoleId()
	{
		return array(
			// '' => '-- Lựa chọn',
			ADMIN => 'ADMIN',
			// EDITOR => 'EDITOR',
			// SEO => 'SEO',
		);
	}
	public static function getRole($roleId) {
		$role = array(
			ADMIN => 'ADMIN',
			EDITOR => 'EDITOR',
			SEO => 'SEO',
		);
		return $role[$roleId];
	}

	public static function selectStatus()
	{
		return array(
			ACTIVE => 'Kích hoạt',
			INACTIVE => 'Không kích hoạt'
		);
	}
	public static function labelStatus($status)
	{
		$arr = self::selectStatus();
		if(in_array($status, [ACTIVE,INACTIVE])) {
			return $arr[$status];
		}
		return '';
	}

	public static function selectBlock()
	{
		return array(
			BLOCK_1 => 'Box nổi bật trên',
			BLOCK_2 => 'Box nổi bật dưới'
		);
	}
	public static function labelBlock($type)
	{
		$arr = self::selectBlock();
		if(in_array($type, [BLOCK_1,BLOCK_2])) {
			return $arr[$type];
		}
		return '';
	}

	public static function selectSlide()
	{
		return array(
			SLIDE_BANNER => 'Banner slide',
			// SLIDE_PARTNER => 'Logo đối tác'
		);
	}
	public static function labelSlide($type)
	{
		$arr = self::selectSlide();
		// if(in_array($type, [SLIDE_BANNER,SLIDE_PARTNER])) {
		if(in_array($type, [SLIDE_BANNER])) {
			return $arr[$type];
		}
		return '';
	}

	public static function getFieldModel($model,$id,$field)
	{
		$data = $model::find($id);
		if($data) {
			return $data->$field;
		}
		return '';
	}
	public static function getArrayModel($model)
	{
		$data = $model::lists('name', 'id');
		if($data) {
			return $data;
		}
		return [];
	}
	public static function getSelectArray($model, $selectKind=null)
	{
		$data = self::getArrayModel($model);
		if($selectKind == 1) {
			return [0=>'Không chọn'] + $data;
		}
		if($selectKind == 2) {
			return [''=>'Tất cả'] + $data;
		}
		if($selectKind == 3) {
			return [''=>'Tất cả', 0=>'Không chọn'] + $data;
		}
		return $data;
	}

}