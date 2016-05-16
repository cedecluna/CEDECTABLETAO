<?php

class Tbb_llogController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function administrarTab_log()
	{
		$_Tab_log= DB::Table('Tab_log')-> get();
		return View::make('Tab_log.administra', array('Tab_log' -> $_Tab_log));
	}
	public function nuevatableta()
	{
		$_datos =  array();
		$_datos ['idllog']='';
         $_datos ['cliente']='';
          $_datos ['tableta']='';
          $_datos ['fecha']='';
          return view::make('Tab_log.form', array('datos' => $_datos ));
		
	}
	public function guardarTab_log()
	{
		$idlog=(int) input::get('idlog');
		$_datos = array();
		$_datos ['idlog']= Input:: get('idlog');
		$_datos ['clinte']= Input:: get('cliente');
		$_datos ['tableta']= Input:: get('tableta');
		$_datos ['fecha']= Input:: get('fecha');
		if($idlog>0)
		{
         DB::Tab_log('Tab_log')->where('Tab_log', $Tab_log)->update($_datos);
		}
		else
		{
			 DB::Tab_log('Tab_log')->insert($_datos);
		}
		return Redirect::to('Tab_log');
	}
	public function editartableta($idlog){
		$_Tab_log = bd:: Table('Tab_log') where ('idtab',$idlog)-> first ();
		$_datos =  array();
		$_datos ['idlog']=$idlog;
         $_datos ['cliente']=$_cliente->cliente;
          $_datos ['tableta']=$_tableta->tableta;
           $_datos ['fecha']=$_fecha->fecha;
          return view::make('Tab_log.form', array('datos' => $_datos ));

	}
	public function eliminarTab_log($idlog)
	{
		db:: Table('Tab_log')->where('idelog',$idlog)->delete();
		return Redirect::to('Tab_log');
	}

}