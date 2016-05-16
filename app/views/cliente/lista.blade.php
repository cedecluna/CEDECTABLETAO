<!DOCTYPE HTML>
<html>
<head>
<title>CLIENTES</title></head>

<body>
<table>
	<tr>
		<th>ID_cliente</th>
		<th>ci_cliente</th>
		<th>nom_cliente</th>
		<th>apep_cliente</th>
		<th>apem_cliente</th>
		<th>nac_cliente</th>
		<th>gen_cliente</th>
		<th>nick_cliente</th>
		<th>pass_cliente</th>
		<th>estadocivil</th>
		
	</tr>
	@foreach($cliente as $cliente)
	<tr>
		<td> {{$cliente ->  idclie}} </td>
		<td> {{$cliente -> ciclie}} </td>
		<td> {{$cliente ->  nomclie}} </td>
		<td> {{$cliente ->  apepclie}} </td>
		<td> {{$cliente -> apemclie}} </td>
		<td> {{$cliente ->  nacclie}} </td>
		<td> {{$cliente ->  genclie}} </td>
		<td> {{$cliente -> nick}} </td>
		<td> {{$cliente ->  pass}} </td>
		<td> {{$cliente ->  estadocivil}} </td>
		
			
<td><a href="{{ url('cliente/editarcliente/.$cliente->idclie)}}">Editar</a></td>
<td><a href="{{ url('cliente/eliminarcliente/.$cliente->idclie)}}">Eliminar</a></td>
</tr>
@endforeach
</table>
<a href= "{{ url('cliente/nuevacliente')}}"> agregar nuevo cliente.</a>
</body>
</html>