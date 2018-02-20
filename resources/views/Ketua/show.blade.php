@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Ketua
			  	<div class="panel-title pull-right"><a href="{{ route('ketuas.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>
			  			<input type="text" name="nama" class="form-control" value="{{ $ketuas->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" class="form-control" value="{{ $ketuas->kelas }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">TTL</label>	
			  			<input type="date" name="ttl" class="form-control" value="{{ $ketuas->ttl }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $ketuas->alamat }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Spesialis</label>	
			  			<input type="text" name="spesialis" class="form-control" value="{{ $ketuas->spesialis }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection