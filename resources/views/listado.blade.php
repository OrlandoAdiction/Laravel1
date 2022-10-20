<h1>Listado de los Alumnos</h1>
<table width ="100%" border="1">
  <tr>
    <th>Nombre</th>
    <th>Edad</th>
    <th>DNI</th>
  </tr>
  @foreach($alumnos as $alumno)
  <tr>
    <td>{{$alumno->nombre}}</td>
    <td>{{$alumno->edad}}</td>
    <td>{{$alumno->dni}}</td>
  </tr>
  @endforeach
</table>