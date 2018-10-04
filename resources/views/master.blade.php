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
<div class="container-fluid" >
	<div class="row">
		<div class="col-md-2 side-left">
			<h1 class="text-center text-white">KOPERASI</h1>
			<hr>
			<div class="menu">
				<ul>
				<a href="/anggota"><li>Anggota</li></a>
				<a href="/pegawai"><li>Pegawai</li></a>
				<a href="/pinjaman"><li>Pinjaman</li></a>
				<a href="/jenis-pinjaman"><li>Jenis Pinjaman</li></a>
				
			</ul>
			</div>
			
		</div>
		@yield('content')
		<br>
		</div>
	</div>
</div>
</body>
<script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>
</html>