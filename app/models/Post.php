<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;

	class Post extends Eloquent
	{
	    protected $table = 'posts';
	    protected $fillable = ['name','slug','summary','description','price','image','meta_title','meta_description','meta_keyword','meta_image','type','home','gallery_id','start_date','status'];
	}
?>