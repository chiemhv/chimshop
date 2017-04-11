@extends('admin.admin')
@section('content_admin')
<table class="table table-striped">
	<tbody>
		<tr>
			<td><center>CATALOG TABLE</center></td>
		</tr>
		<tr>
			<td><a href="{{URL::to('admin/catalog/create')}}" title=""><b>Create new Catalog </b></a></td>
		</tr>
	</tbody>
</table>
<table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Detail</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
      <tr>
        <td>{{$row->idCatalog}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->detail}}</td>
        <td><a href="" title="">Edit</a></td>
        <td><a href="" title="">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop