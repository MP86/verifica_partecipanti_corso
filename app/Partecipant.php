<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partecipant extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'partecipants';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'surname', 'email', 'phone number'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
}
