<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Alumno extends Controller {

	public function action_index()
	{
        $aAlumno = ORM::factory('Alumno')->find_all();
		$view = View::factory('alumno')
            ->set('aAlumno', $aAlumno);
		
		$this->response->body($view);
	}
	
	public function action_registro()
	{
		$oAlumno = ORM::factory('Alumno');
		$oAlumno->values($this->request->post());
		$oAlumno->save();
        
        $aAlumno = ORM::factory('Alumno')
            ->order_by('id', 'DESC')
            ->find_all();
		$view = View::factory('alumno')
            ->set('aAlumno', $aAlumno);
		
		$this->response->body($view);
	}
    
	public function action_editar()
	{
		$oAlumno = ORM::factory('Alumno', $this->request->param('id'));
		$oAlumno->values($this->request->post());
		$oAlumno->save();
        
        $aAlumno = ORM::factory('Alumno')
            ->order_by('id', 'DESC')
            ->find_all();
        
		$view = View::factory('alumno')
            ->set('aAlumno', $aAlumno);
		
		$this->response->body($view);
	}
	
	public function action_delete()
	{
		$oAlumno = ORM::factory('Alumno', $this->request->post('id'));
		if($oAlumno->loaded()) $oAlumno->delete();
	}

} // End Welcome
