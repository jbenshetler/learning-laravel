<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    protected $fillable = ['username','password'];

    public static $rules = ['username'=>'required', 'password'=>'required'];

    public static $messages;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public static function isValid($input)
    {
        $validation = Validator::make($input, static::$rules);
        $result = $validation->passes();
        if (!$result)
            static::$messages = $validation->messages();

        return $result;
    }

}
