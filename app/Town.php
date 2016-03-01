<?php namespace prueb;

use Illuminate\Database\Eloquent\Model;

class Town extends Model {

	protected $table = 'towns';

	protected $fillable = ['name', 'state_id'];

	protected static function towns($id){
		return Town::where('state_id' , '=' , $id)
		->get();
	}

}
