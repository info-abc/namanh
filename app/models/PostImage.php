<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;

	class PostImage extends Eloquent
	{
	    protected $table = 'post_images';
	    protected $fillable = ['name','summary','url','image','post_id','status'];
	}
?>