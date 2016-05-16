<?php

class TabletaController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function administrarTableta()
	{
		$_tableta= DB::Table('tableta')-> get();
		return View::make('tableta.administra', array('tableta' -> $_tableta));
	}
	public function nuevatableta()
	{
		$_datos =  array();
		$_datos ['id']='';
         $_datos ['imeitab']='';
          $_datos ['martab']='';
          return view::make('tableta.form', array('datos' => $_datos ));
		
	}
	public function guardartableta()
	{
		$idtab=(int) input::get('idtab');
		$_datos = array();
		$_datos ['idtab']= Input:: get('idtab');
		$_datos ['imeitab']= Input:: get('imeitab');
		$_datos ['martab']= Input:: get('martab');
		if($idtab>0)
		{
         DB::Table('tableta')->where('idtab', $idetab)->update($_datos);
		}
		else
		{
			 DB::Table('tableta')->insert($_datos);
		}
		return Redirect::to('tableta');
	}
	public function editartableta($idtab){
		$_tableta = bd:: Table('tableta') where ('idtab',$idtab)-> first ();
		$_datos =  array();
		$_datos ['idtab']=$idtab;
         $_datos ['imeitab']=$_idtab->idtab;
          $_datos ['martab']=$_martab->martab;
          return view::make('tableta.form', array('datos' => $_datos ));

	}
	public function eliminartableta($idtab)
	{
		db:: Table('tableta')->where('idetab',$idtab)->delete();
		return Redirect::to('tableta');
	}

}