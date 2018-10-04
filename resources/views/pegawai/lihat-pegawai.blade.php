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
				        <h5 class="modal-title" id="exampleModalLabel">Data Pegawai</h5>
				        
				      </div>
				      
				      <div class="modal-body">
				      	<div class="form-group">
						    <label for="formGroupExampleInput"><b>Kode Pegawai</b></label><br>
						    <label >{{ $show->kd_pegawai}}</label>
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput"><b>Nama Pegawai</b></label><br>
						    <label >{{ $show->nama_pegawai}}</label>
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput"><b>Telepon Pegawai</b></label><br>
						    <label >{{ $show->telepon}}</label>
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput"><b>Pendidikan</b></label><br>
						    <label >{{ $show->pendidikan}}</label>
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput"><b>Tanggal Lahir</b></label><br>
						    <label >{{ $show->tgl_lahir}}</label>
						  </div>
						  
				      </div>
				    </div>
				  </div>
				</div>
			</div>
@endsection
</body>
</html>