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
				        <h5 class="modal-title" id="exampleModalLabel">Data Anggota</h5>
				        
				      </div>
				      
				      <div class="modal-body">
				      	<div class="form-group">
						    <label for="formGroupExampleInput"><b>Kode Anggota</b></label><br>
						    <label >{{ $show->kd_anggota}}</label>
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput"><b>Nama Anggota</b></label><br>
						    <label >{{ $show->nama_anggota}}</label>
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput"><b>Telepon Anggota</b></label><br>
						    <label >{{ $show->telepon}}</label>
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput"><b>Jenis Kelamin</b></label><br>
						    <label >{{ $show->jenis_kelamin}}</label>
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput"><b>Pekerjaan</b></label><br>
						    <label >{{ $show->pekerjaan}}</label>
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput"><b>Alamat</b></label><br>
						    <label >{{ $show->alamat}}</label>
						  </div>
						  
				    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
				    		<input type="hidden" name="_method" value="PUT">
				      </div>
				    </div>
				  </div>
				</div>
			</div>
@endsection
</body>
</html>