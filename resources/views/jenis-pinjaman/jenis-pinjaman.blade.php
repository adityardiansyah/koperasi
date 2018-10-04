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
				<h2 class="ml-4"><i class="fas fa-tachometer-alt"></i>  Jenis Pinjaman</h2>
				<button class="btn btn-primary ml-4 btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Jenis Pinjaman</button>
			</div>
			<hr>
			<div class="row ml-4">
				<div class="content p-4">
						<table class="table table-hover table-responsive">
						  <thead>
						    <tr>
						      <th scope="col">Kode Jenis Pinjaman</th>
						      <th scope="col">Nama Jenis Pinjaman</th>
						      <th scope="col">Bunga Jenis Pinjaman</th>
						      <th colspan="2">Status</th>
						    </tr>
						  </thead>
						  <tbody>
						  @foreach($all as $res)
						    <tr>
						      <th scope="row">{{ $res->kd_jp }}</th>
						      <td>{{ $res->nama_jp }}</td>
						      <td>{{ $res->bunga }}%</td>
						      
						      <td> <a href="/jenis-pinjaman/{{ $res->id}}/edit" class="btn btn-sm btn-primary">Edit</a></td>
						      <td> 
						      
						      	<form action="/jenis-pinjaman/{{$res->id}}" method="post">
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Pinjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/jenis-pinjaman" method="POST">
      <div class="modal-body">
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nama Jenis Pinjaman</label>
		    <input type="text" name="nama_jp" class="form-control" id="formGroupExampleInput" placeholder="Nama Anggota">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Bunga Pinjaman</label>
		    <input type="number" name="bunga" class="form-control" id="formGroupExampleInput2" placeholder="Nomor Telepon">
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