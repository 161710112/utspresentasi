@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Kegiatan
			  	<div class="panel-title pull-right"><a href="{{ route('kegiatans.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>
			  			<input type="text" name="nama_kegiatan" class="form-control" value="{{ $kegiatans->nama_kegiatan }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">kegiatan</label>	
			  			<input type="text" name="kegiatan" class="form-control" value="{{ $kegiatans->kegiatan }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">hari_kegiatan</label>	
			  			<input type="text" name="hari_kegiatan" class="form-control" value="{{ $kegiatans->hari_kegiatan }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">waktu_kegiatan</label>	
			  			<input type="text" name="waktu_kegiatan" class="form-control" value="{{ $kegiatans->waktu_kegiatan }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tempat Kegiatan</label>	
			  			<input type="text" name="tempat_kegiatan" class="form-control" value="{{ $kegiatans->tempat_kegiatan }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection