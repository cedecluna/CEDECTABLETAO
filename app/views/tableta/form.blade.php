<!DOCTYPE HTML>
<html>
<head>
<title>TABLETA</title></head>

<body>

	<h1> tableta</h1>
	{{Form::open(array('url'=> 'tableta/guardartableta','method'=>'post'));}}
	{{Form::hidden('idetab','$datos{'idtab'});}}	
	{{Form::label('idetab','IDE:');}}	
	{{Form::text('idetab');}}	
	<br/>
	{{Form::label('imeitab','IMEI:');}}	
	{{Form::text('imeitab');}}	
	<br/>
	{{Form::label('martab','MARCA:');}}	
	{{Form::text('martab');}}	
	<br/>
{{Form::submit('guardar');}}	
	
	{{Form::close();}}	

	
</body>
</html>