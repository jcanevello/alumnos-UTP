<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Alumno extends Controller {

	public function action_index()
	{
		$view = View::factory('alumno');
		
		$this->response->body($view);
	}

} // End Welcome
