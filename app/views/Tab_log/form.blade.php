<!DOCTYPE HTML>
<html>
<head>
<title>tab_log</title></head>

<body>

	<h1> tab_log</h1>
	{{Form::open(array('url'=> 'tab_log/guardartab_log','method'=>'post'));}}
	{{Form::hidden('idelog','$datos{'idlog'});}}	
	{{Form::label('idelog','IDE:');}}	
	{{Form::text('idelog');}}	
	<br/>
	{{Form::label('cliente','CLIENTE:');}}	
	{{Form::text('cliente');}}	
	<br/>
	{{Form::label('tableta','TABLETA:');}}	
	{{Form::text('tableta');}}	
	<br/>
{{Form::submit('guardar');}}	
	
	{{Form::close();}}	

	
</body>
</html>