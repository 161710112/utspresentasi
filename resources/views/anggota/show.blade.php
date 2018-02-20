@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Anggota
			  	<div class="panel-title pull-right"><a href="{{ route('anggotas.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>
			  			<input type="text" name="nama" class="form-control" value="{{ $anggotas->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" class="form-control" value="{{ $anggotas->kelas }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $anggotas->alamat }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Spesialis</label>	
			  			<input type="text" name="spesialis" class="form-control" value="{{ $anggotas->spesialis }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tanggal Pelantikan</label>	
			  			<input type="text" name="tgl_pelantikan" class="form-control" value="{{ $anggotas->tgl_pelantikan }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection