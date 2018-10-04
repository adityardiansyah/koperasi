@extends('master')
<!DOCTYPE html>
<html>
<head>
	<title>Koperasi Si Dul</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>
<body>
@section('content')
		<div class="offset-md-2 col-md-10 side-right">
			<div class="row">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content" style="width: 600px;">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Jenis Peminjaman</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <form action="/jenis-pinjaman/{{$edit->id}}" method="POST">
				      
				      <div class="modal-body">
						  <div class="form-group">
						    <label for="formGroupExampleInput">Nama Jenis Peminjaman</label>
						    <input type="text" name="nama_jp" class="form-control" id="formGroupExampleInput" value="{{ $edit->nama_jp}}">
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput2">Bunga Peminjaman</label>
						    <input type="text" name="bunga" class="form-control" id="formGroupExampleInput2" value="{{ $edit->bunga}}">
						  </div>
						  <input type="hidden" name="_token" value="{{ csrf_token() }}">
				    		<input type="hidden" name="_method" value="PUT">
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				        <input type="submit" class="btn btn-primary" value="Edit Anggota">
				      </div>
				      </form>
				    </div>
				  </div>
				</div>
			</div>
@endsection
</body>
</html>