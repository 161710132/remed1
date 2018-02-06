<!DOCTYPE html>
<html>
	<head>

		<title>Bonus</title>

	</head>
	<body class="container">
			<center><strong>Bonus</strong></h3></center>
			@foreach ($mahasiswa as $saya)
				<h3> <small><strong>Nama Mahasiswa : </strong>{{$saya->nama_mahasiswa}}</small><br>
				<small><strong>Nis :</strong> [{{$saya->nis}}]</small></h3>


					<li><strong>Nama Wali :</strong> {{$saya->wali->nama}}</li>
					<li><strong>Alamat Wali : </strong>{{$saya->wali->alamat}}</li>					

				</h4>
				<hr/>
				<h4>
					<li><strong>Nama Dosen :</strong> {{$saya->dosen->nama}}</li>
					<li><strong>Jurusan : </strong>{{$saya->jurusan->nama_jurusan}}</li>
					<li><strong>Mata Kuliah :</strong> 
					@foreach($saya->matkul as $aku) 
					{{$aku->nama_matkul}},
					@endforeach
					</li>
					

				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>