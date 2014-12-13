<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Alumno extends Controller {

	public function action_index()
	{
		$view = View::factory('alumno');
		
		$this->response->body($view);
	}
	
	public function action_save()
	{
		$oAlumno = ORM::factory('Alumno', $this->request->post('id'));
		$oAlumno->values($this->request->post());
		if($oAlumno->save())
		{
			echo 'bien';
		}
		else
		{
			echo 'mal';
		}
		
	}
	
	public function action_delete()
	{
		$oAlumno = ORM::factory('Alumno', $this->request->post('id'));
		if($oAlumno->loaded()) $oAlumno->delete();
	}

} // End Welcome
