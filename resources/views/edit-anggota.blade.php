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
<div class="container-fluid" >
	<div class="row">
		<div class="col-md-2 side-left">
			<h1 class="text-center text-white">KOPERASI</h1>
			<hr>
			<div class="menu">
				<ul>
				<a href="/anggota" class="link"><li>Tambah Anggota</li></a>
				<a href=""><li>Pinjaman</li></a>
				<a href=""><li>Pegawai</li></a>
			</ul>
			</div>
			
		</div>
		<div class="offset-md-2 col-md-10 side-right">
			<div class="row">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content" style="width: 600px;">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <form action="/anggota/{{$edit->id}}" method="POST">
				      
				      <div class="modal-body">
						  <div class="form-group">
						    <label for="formGroupExampleInput">Nama Anggota</label>
						    <input type="text" name="nama_anggota" class="form-control" id="formGroupExampleInput" value="{{ $edit->nama_anggota}}">
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput2">Nomor Telepon</label>
						    <input type="text" name="telepon" class="form-control" id="formGroupExampleInput2" value="{{ $edit->telepon}}">
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput">Jenis Kelamin</label>
						    <select id="inputState" class="form-control" name="jenis_kelamin">
						    	<option selected value="{{ $edit->jenis_kelamin}}">{{ $edit->jenis_kelamin}}</option>
						    	<option value="Laki-Laki">Laki Laki</option>
						    	<option value="Perempuan">Perempuan</option>
						    </select>
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput2">Pekerjaan</label>
						    <input type="text" name="pekerjaan" class="form-control" id="formGroupExampleInput2" value="{{ $edit->pekerjaan}}">
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput2">Tanggal Bergabung</label>
						    <input type="date" name="tgl_masuk" class="form-control" id="formGroupExampleInput2" value="{{ $edit->tgl_masuk}}">
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput2">Alamat</label>
						    <textarea class="form-control" name="alamat">{{ $edit->alamat}}</textarea>
						  </div>
				    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
				    		<input type="hidden" name="_method" value="PUT">
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				        <input type="submit" class="btn btn-primary" value="Tambah Anggota">
				      </div>
				      </form>
				    </div>
				  </div>
				</div>
			</div>
		</div>
</div>
</body>
</html>