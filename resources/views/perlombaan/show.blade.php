@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Perlombaan
			  	<div class="panel-title pull-right"><a href="{{ route('perlombaans.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Spesialis</label>
			  			<input type="text" name="spesialis" class="form-control" value="{{ $perlombaans->spesialis }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Peserta</label>	
			  			<input type="text" name="nama_peserta" class="form-control" value="{{ $perlombaans->nama_peserta }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tgl Lomba</label>	
			  			<input type="text" name="tgl_lomba" class="form-control" value="{{ $perlombaans->tgl_lomba }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tgl Daftar Ulang</label>	
			  			<input type="text" name="tgl_daftar_ulang" class="form-control" value="{{ $perlombaans->tgl_daftar_ulang }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Tempat</label>	
			  			<input type="text" name="tempat" class="form-control" value="{{ $perlombaans->tempat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">jumlah_peserta</label>	
			  			<input type="text" name="jumlah_peserta" class="form-control" value="{{ $perlombaans->jumlah_peserta }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection