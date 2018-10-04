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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
@section('content')
		<div class="offset-md-2 col-md-10 side-right">
			<div class="row p-4">
				<h2 class="ml-4"><i class="fas fa-tachometer-alt"></i>  Anggota</h2>
				<button class="btn btn-primary ml-4 btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Anggota</button>
			</div>
			<hr>
			<div class="row ml-4">
				<div class="content p-4">
						<table class="table table-hover table-responsive">
						  <thead>
						    <tr>
						      <th scope="col">Kode Anggota</th>
						      <th scope="col">Nama Anggota</th>
						      <th scope="col">No HP</th>
						      <th scope="col">Pekerjaan</th>
						      <th scope="col">Tanggal Bergabung</th>
						      <th colspan="3">Status</th>
						    </tr>
						  </thead>
						  <tbody>
						  @foreach($all as $res)
						    <tr>
						      <th scope="row">{{ $res->kd_anggota }}</th>
						      <td>{{ $res->nama_anggota }}</td>
						      <td>{{ $res->telepon }}</td>
						      <td>{{ $res->pekerjaan }}</td>
						      <td>{{ $res->tgl_masuk}}</td>
						      <td><a href="/anggota/{{ $res->id}}" class="btn btn-sm btn-warning">View</a></td>
						      <td> <a href="/anggota/{{ $res->id}}/edit" class="btn btn-sm btn-primary">Edit</a></td>
						      <td> 
						      
						      	<form action="/anggota/{{$res->id}}" method="post">
						      		<input type="submit" class="btn btn-sm btn-danger" value="Delete" name="">
						      		{{ csrf_field() }}
						      		<input type="hidden" name="_method" value="DELETE">
						      	</form>
						      
						      </td>

						    </tr>
						    </tr>
						   @endforeach
						  </tbody>
						</table>
				</div>
			</div>
		</div>
	@endsection
</body>
<script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>
</html>


<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/anggota" method="POST">
      <div class="modal-body">
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nama Anggota</label>
		    <input type="text" name="nama_anggota" class="form-control" id="formGroupExampleInput" placeholder="Nama Anggota">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Nomor Telepon</label>
		    <input type="text" name="telepon" class="form-control" id="formGroupExampleInput2" placeholder="Nomor Telepon">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nama Anggota</label>
		    <select id="inputState" class="form-control" name="jenis_kelamin">
		    	<option selected="none">Pilih Jenis Kelamin</option>
		    	<option value="Laki-Laki">Laki Laki</option>
		    	<option value="Perempuan">Perempuan</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Pekerjaan</label>
		    <input type="text" name="pekerjaan" class="form-control" id="formGroupExampleInput2" placeholder="Nomor Telepon">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Tanggal Bergabung</label>
		    <input type="date" name="tgl_masuk" class="form-control" id="formGroupExampleInput2" placeholder="Nomor Telepon">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Alamat</label>
		    <textarea class="form-control" name="alamat"></textarea>
		  </div>
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <input type="submit" class="btn btn-primary" value="Tambah Anggota">
      </div>
      </form>
    </div>
  </div>
</div>