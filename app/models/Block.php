<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;
	use Illuminate\Database\Eloquent\SoftDeletingTrait;

	class Block extends Eloquent
	{
		use SoftDeletingTrait;
	    protected $table = 'blocks';
	    protected $fillable = ['name','name2','description','url','type','status'];
	    protected $dates = ['deleted_at'];

	}
?>