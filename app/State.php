<?php namespace prueb;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

	protected $table = 'states';

	protected $fillable = ['name'];

}
