@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Sejarah
			  	<div class="panel-title pull-right"><a href="{{ route('sejarahs.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>
			  			<input type="text" name="nama" class="form-control" value="{{ $sejarahs->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">TTL</label>	
			  			<input type="text" name="ttl" class="form-control" value="{{ $sejarahs->ttl }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Warga Negara</label>	
			  			<input type="text" name="warga_negara" class="form-control" value="{{ $sejarahs->warga_negara }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Sejarah</label>	
			  			<input type="text" name="sejarah" class="form-control" value="{{ $sejarahs->sejarah }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Semenjak</label>	
			  			<input type="text" name="semenjak" class="form-control" value="{{ $sejarahs->semenjak }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection