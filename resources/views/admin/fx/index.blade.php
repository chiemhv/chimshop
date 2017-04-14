@extends('admin.admin')
@section('content_admin')
<table class="table table-striped">
  <tbody>
    <tr>
      <td><center>Danh sách FX</center></td>
    </tr>
    <tr>
      <td><a href="{{URL::to('admin/fx/create')}}" title=""><b>Tạo mới FX </b></a></td>
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
        <td>{{$row->idFx}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->detail}}</td>
        <td><a href="{{asset('admin/fx/edit')}}/{{$row->idFx}}" title="">Edit</a></td>
        <td><a href="{{asset('admin/fx/destroy')}}/{{$row->idFx}}" title="">Destroy</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop