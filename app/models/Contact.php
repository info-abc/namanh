<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;
	use Illuminate\Database\Eloquent\SoftDeletingTrait;

	class Contact extends Eloquent
	{
		use SoftDeletingTrait;
	    protected $table = 'contacts';
	    protected $fillable = ['name','email','phone','message','address','title','ip'];
	    protected $dates = ['deleted_at'];
	}
?>