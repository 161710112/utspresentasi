@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Fasilitas
			  	<div class="panel-title pull-right"><a href="{{ route('fasilitas.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Anggota</label>
			  			<input type="text" name="anggota" class="form-control" value="{{ $fasilitas->anggota }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Anggota</label>	
			  			<input type="text" name="nama_anggota" class="form-control" value="{{ $fasilitas->nama_anggota }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jumlah Anggota</label>	
			  			<input type="text" name="jumlah_anggota" class="form-control" value="{{ $fasilitas->jumlah_anggota }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Visi</label>	
			  			<input type="textarea" name="visi" class="form-control" value="{{ $fasilitas->visi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Misi</label>	
			  			<input type="textarea" name="misi" class="form-control" value="{{ $fasilitas->misi }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection