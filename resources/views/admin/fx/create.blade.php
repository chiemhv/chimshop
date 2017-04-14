@extends('admin.admin')
@section('content_admin')
<form action="store" method="POST" accept-charset="utf-8" class="form-horizontal">
  <div class="form-group">
  <h2><center>Thêm mới FX</center></h2>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="inputEmail3" class="col-sm-2 control-label">Tên Fx</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="...">
    </div>
  </div>
  <div class="form-group">
    <label for="comment" class="col-sm-2 control-label">Comment:</label>
    <div class="col-sm-10">
      <textarea name="detail" class="form-control" id="comment" rows="5" placeholder="..."></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="reset" class="btn btn-default">reset</button>
      <button type="submit" class="btn btn-default">submit</button>
    </div>
  </div>
</form>
@stop