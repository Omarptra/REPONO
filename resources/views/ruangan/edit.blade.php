@extends('layouts.layout')
@section('content')
<title>Edit Data Ruangan</title>
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-dark">Edit Data</h6>
</div>
<div class="card-body">
    <div class="x_content">
            <form action="/ruangan/update" method="post">
                    {{ csrf_field() }}
                  <div class="form-group">
                    <label for="">ruangan</label>
                    <input type="text" name="ruangan" class="form-control" value="{{$ruangan->ruangan}}" required placeholder="Masukan ruangan">
                    <input type="hidden" name="id_ruangan" class="form-control" value="{{$ruangan->id_ruangan}}" required placeholder="Masukan Jenis">
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
            </form>
    </div>
@endsection
