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
				<h2 class="ml-4"><i class="fas fa-tachometer-alt"></i>  Pegawai</h2>
				<button class="btn btn-primary ml-4 btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Pegawai</button>
			</div>
			<hr>
			<div class="row ml-4">
				<div class="content p-4">
						<table class="table table-hover table-responsive">
						  <thead>
						    <tr>
						      <th scope="col">Kode Pegawai</th>
						      <th scope="col">Nama Pegawai</th>
						      <th scope="col">No HP</th>
						      <th scope="col">Pendidikan</th>
						      <th scope="col">Tanggal Lahir</th>
						      <th colspan="3">Status</th>
						    </tr>
						  </thead>
						  <tbody>
						  @foreach($pegawai as $res)
						    <tr>
						      <th scope="row">{{ $res->kd_pegawai }}</th>
						      <td>{{ $res->nama_pegawai }}</td>
						      <td>{{ $res->telepon }}</td>
						      <td>{{ $res->pendidikan }}</td>
						      <td>{{ $res->tgl_lahir}}</td>
						      <td><a href="/pegawai/{{ $res->id}}" class="btn btn-sm btn-warning">View</a></td>
						      <td> <a href="/pegawai/{{ $res->id}}/edit" class="btn btn-sm btn-primary">Edit</a></td>
						      <td> 
						      
						      	<form action="/pegawai/{{$res->id}}" method="post">
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
		<br>
		<br>
		</div>

	@endsection
</body>
<script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>
</html>


<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/pegawai" method="POST">
      <div class="modal-body">
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nama Pegawai</label>
		    <input type="text" name="nama_pegawai" class="form-control" id="formGroupExampleInput" placeholder="Nama Pegawai">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Nomor Telepon</label>
		    <input type="text" name="telepon" class="form-control" id="formGroupExampleInput2" placeholder="Nomor Telepon">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Pendidikan</label>
		    <input type="text" name="pendidikan" class="form-control" id="formGroupExampleInput2" placeholder="Pendidikan">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Tanggal Lahir</label>
		    <input type="date" name="tgl_lahir" class="form-control" id="formGroupExampleInput2" placeholder="Nomor Telepon">
		  </div>
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <input type="submit" class="btn btn-primary" value="Tambah Pegawai">
      </div>
      </form>
    </div>
  </div>
</div>