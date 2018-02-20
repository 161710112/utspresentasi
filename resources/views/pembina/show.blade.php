@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Pembinaumur
			  	<div class="panel-title pull-right"><a href="{{ route('pembinas.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>
			  			<input type="text" name="nama" class="form-control" value="{{ $pembinas->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">TTL</label>	
			  			<input type="date" name="ttl" class="form-control" value="{{ $pembinas->ttl }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Umur</label>	
			  			<input type="text" name="umur" class="form-control" value="{{ $pembinas->umur }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $pembinas->alamat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Spesialis Materi</label>	
			  			<input type="text" name="spesialis_materi" class="form-control" value="{{ $pembinas->spesialis_materi }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection