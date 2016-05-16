<!DOCTYPE HTML>
<html>
<head>
<title>TAB_LOG</title></head>

<body>
<table>
	<tr>
		<th>ID_LOG/th>
		<th>CLIENTE</th>
		<th>TABLETA</th>
		<th>FECHA</th>
	</tr>
	@foreach($tab_log as $Tab_log)
	<tr>
		<td> {{$Tab_log ->  idlog}} </td>
		<td> {{$Tab_log->  cliente}} </td>
		<td> {{$Tab_log->  tableta}} </td>
		<td> {{$Tab_log->  fecha}} </td>
			
<td><a href="{{ url('Tab_log/editarTab_log/.$Tab_log->idlog)}}">Editar</a></td>
<td><a href="{{ url('Tab_log/eliminarTab_log/.$Tab_log->idlog)}}">Eliminar</a></td>
</tr>
@endforeach
</table>
<a href= "{{ url('Tab_log/nuevaTab_log')}}"> agregar nueva Tab_log.</a>
</body>
</html>