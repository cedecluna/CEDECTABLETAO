<!DOCTYPE HTML>
<html>
<head>
<title>CLIENTE</title></head>

<body>

	<h1>cliente</h1>
	{{Form::open(array('url'=> 'cliente/guardarcliente','method'=>'post'));}}
	{{Form::hidden('ideclie','$datos{'idclie'});}}	
	{{Form::label('ideclie','IDE:');}}	
	{{Form::text('ideclie');}}	
	<br/>
	{{Form::label('ciclie','CI:');}}	
	{{Form::text('ciclie');}}	
	<br/>
	{{Form::label('nomclie','NOMBRE:');}}	
	{{Form::text('nomclie');}}	
	<br/>
	{{Form::label('apepclie','APELLIDO PATERNO:');}}	
	{{Form::text('apepclie');}}	
	<br/>
	{{Form::label('apemclie','EPLLIDO MATERNO:');}}	
	{{Form::text('apemclie');}}	
	<br/>
	{{Form::label('nacclie','FECHA NACIMIENTO:');}}	
	{{Form::text('nacclie');}}	
	<br/>
	{{Form::label('genclie','GENERO :');}}	
	{{Form::text('genclie');}}	
	<br/>
	{{Form::label('nick','NICK:');}}	
	{{Form::text('nick');}}	
	<br/>
	{{Form::label('pass','PASSWORD:');}}	
	{{Form::text('pass');}}	
	<br/>
	{{Form::label('estadocivil','ESTADOCIVIL:');}}	
	{{Form::text('estadocivil');}}	
	
{{Form::submit('guardar');}}	
	
	{{Form::close();}}	

	
</body>
</html>