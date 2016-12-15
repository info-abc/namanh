<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;

	class SessionUser extends Eloquent
	{
	    protected $table = 'session_user';
	    protected $fillable = ['tel','ip','domain','http_referer','url','create_time'];
	}
?>