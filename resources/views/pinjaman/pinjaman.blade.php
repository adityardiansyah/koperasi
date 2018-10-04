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
				<h2 class="ml-4"><i class="fas fa-tachometer-alt"></i>  Pinjaman</h2>
				<button class="btn btn-primary ml-4 btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Pinjaman</button>
			</div>
			<hr>
			<div class="row ml-4">
				<div class="content p-4">
						<table class="table table-hover table-responsive">
						  <thead>
						    <tr>
						      <th scope="col">No Kuitansi</th>
						      <th scope="col">Tanggal Pinjam</th>
						      <th scope="col">Tanggal Tempo</th>
						      <th scope="col">Nama Pegawai</th>
						      <th scope="col">Nama Anggota</th>
						      <th scope="col">Total Pinjaman</th>
						      <th colspan="3">Status</th>
						    </tr>
						  </thead>
						  <tbody>
						  @foreach($all as $res)
						    <tr>
						      <th scope="row">{{ $res->no_kwitansip }}</th>
						      <td>{{ $res->tgl_pinjam }}</td>
						      <td>{{ $res->tgl_tempo }}</td>
						      <td>
						      <?php
						      	$cek = $res->kd_pegawai;
						      	$p = App\Pegawai::where('kd_pegawai', '=', $cek)->first();
						      ?>

						      {{ $p->nama_pegawai }}
						      </td>
						      <td>
						      <?php
						      	$cek = $res->id_anggota;
						      	$a = App\Anggota::where('id', '=', $cek)->first();
						      ?>
						      {{ $a->nama_anggota}}
						      </td>
						      <td>{{ $res->total_pinjaman}}</td>
						      <td><a href="/pinjaman/{{ $res->id}}" class="btn btn-sm btn-warning">View</a></td>
						      <td> <a href="/pinjaman/{{ $res->id}}/edit" class="btn btn-sm btn-primary">Edit</a></td>
						      <td> 
						      
						      	<form action="/pinjaman/{{$res->id}}" method="post">
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pinjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/pinjaman" method="POST">
      <div class="modal-body">
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Tanggal Pinjam</label>
		    <input type="date" name="tgl_pinjam" class="form-control" id="formGroupExampleInput2">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Tanggal Tempo</label>
		    <input type="date" name="tgl_tempo" class="form-control" id="formGroupExampleInput2">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Nama Pegawai</label>
		    <select id="inputState" class="form-control" name="kd_pegawai">

		    	<option selected="none">Pilih Pegawai</option>
		    	@foreach($peg as $p)
		    		<option value="{{ $p->kd_pegawai }}">{{ $p->nama_pegawai }}</option>
				@endforeach
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Nama Anggota</label>
		    <select id="inputState" class="form-control" name="id_anggota">
		    	<option selected="none">Pilih Anggota</option>
		    	@foreach($ang as $p)
		    		<option value="{{ $p->id }}">{{ $p->nama_anggota }}</option>
				@endforeach
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Jenis Pinjaman</label>
		    <select id="inputState" class="form-control" name="kd_jp">
		    	<option selected="none">Pilih Jenis Penjaman</option>
		    	@foreach($jp as $p)
		    		<option value="{{ $p->kd_jp}}">{{ $p->nama_jp }}</option>
				@endforeach
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Jumlah Pinjaman</label>
		    <input type="text" name="pinjaman_pokok" class="form-control" id="formGroupExampleInput" placeholder="Jumlah Pinjaman">
		  </div>
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <input type="submit" class="btn btn-primary" value="Tambah Pinjaman">
      </div>
      </form>
    </div>
  </div>
</div>