<?php

class ClienteController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function listacliente()
	{
		$_cliente= DB::Table('cliente')-> get();
		return View::make('cliente.lista', array('cliente' -> $_cliente));
	}
	public function nuevocliente()
	{
		$_datos =  array();
		$_datos ['idclie']='';
         $_datos ['ciclie']='';
          $_datos ['nomclie']='';
          $_datos ['apepclie']='';
         $_datos ['apemclie']='';
          $_datos ['nacclie']='';
          $_datos ['genclie']='';
         $_datos ['nick']='';
          $_datos ['pass']='';
          $_datos ['estadocivil']='';
         
          return view::make('cliente.form', array('datos' => $_datos ));
		
	}
	public function guardarcliente()
	{
		$idclie=(int) input::get('idclie');
		$_datos = array();
		$_datos ['idclie']= Input:: get('idtclie');
		$_datos ['ciclie']= Input:: get('ciclie');
		$_datos ['nomclie']= Input:: get('nomclie');
		$_datos ['apepclie']= Input:: get('apeplie');
		$_datos ['apemclie']= Input:: get('apemclie');
		$_datos ['nacclie']= Input:: get('nacclie');
		$_datos ['genclie']= Input:: get('gentclie');
		$_datos ['nick']= Input:: get('nick');
		$_datos ['pass']= Input:: get('pass');
		$_datos ['estadocivil']= Input:: get('estadocivil');
		
		if($idclie>0)
		{
         DB::Table('cliente')->where('idclie', $idclie)->update($_datos);
		}
		else
		{
			 DB::Table('cliente')->insert($_datos);
		}
		return Redirect::to('cliente');
	}
	public function editarcliente($idclie){
		$_cliente = bd:: Table('cliente') where ('idclie',$idclie)-> first ();
		$_datos =  array();
		$_datos ['idclie']=$idclie;
         $_datos ['ciclie']=$_ciclie->ciclie;
          $_datos ['nomclie']=$_nomclie->nomclie;
          $_datos ['apepclie']=$_apepclie->apepclie;
         $_datos ['apemclie']=$_apemclie->apemclie;
          $_datos ['nacclie']=$_nacclie->nacclie;
          $_datos ['genclie']=$_genclie->genclie;
         $_datos ['nick']=$_nick->nick;
          $_datos ['pass']=$_pass->pass;
          $_datos ['estadocivil']=$_estadocivil->estadocivil;
         
          return view::make('cliente.formclie', array('datos' => $_datos ));

	}
	public function eliminarcliente($idtab)
	{
		db:: Table('cliente')->where('ideclie',$idcli)->delete();
		return Redirect::to('cliente');
	}

}
