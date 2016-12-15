<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;
	use Illuminate\Database\Eloquent\SoftDeletingTrait;

	class Slide extends Eloquent
	{
		use SoftDeletingTrait;
	    protected $table = 'slides';
	    protected $fillable = ['name','name2','summary','url','image','type','status'];
	    protected $dates = ['deleted_at'];
	}
?>