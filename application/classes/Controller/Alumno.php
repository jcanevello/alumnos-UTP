<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Alumno extends Controller {

	public function action_index()
	{
        $aAlumno = ORM::factory('Alumno')
            ->order_by('id', 'DESC')
            ->find_all();
        
		$view = View::factory('alumno')
            ->set('aAlumno', $aAlumno);
		$this->response->body($view);
	}
	
	public function action_save()
	{
		$oAlumno = ORM::factory('Alumno', $this->request->post('id'));
		$oAlumno->values($this->request->post());
		if($oAlumno->save())
            die(json_encode(array('status' => 'OK', 'data' => $oAlumno->as_array())));
        die(json_encode(array('status' => 'ERROR')));
	}
	
	public function action_delete()
	{
		$oAlumno = ORM::factory('Alumno', $this->request->post('id'));
		if($oAlumno->loaded()) $oAlumno->delete();
	}

} // End Welcome
