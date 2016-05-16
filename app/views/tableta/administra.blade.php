<!DOCTYPE HTML>
<html>
<head>
<title>TABLETA</title></head>

<body>
<table>
	<tr>
		<th>ID_TABLETA</th>
		<th>IMEI_TABLETA</th>
		<th>MARCA_TABLETA</th>
	</tr>
	@foreach($Tableta as $Tableta)
	<tr>
		<td> {{$Tableta ->  idtab}} </td>
		<td> {{$Tableta ->  imeitab}} </td>
		<td> {{$Tableta ->  martab}} </td>
			
<td><a href="{{ url('tableta/editartableta/.$tableta->idtab)}}">Editar</a></td>
<td><a href="{{ url('tableta/eliminartableta/.$tableta->idtab)}}">Eliminar</a></td>
</tr>
@endforeach
</table>
<a href= "{{ url('tableta/nuevatableta')}}"> agregar nueva tableta.</a>
</body>
</html>