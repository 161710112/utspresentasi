@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Jadlatgab
			  	<div class="panel-title pull-right"><a href="{{ route('jadlatgabs.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">No Absen</label>
			  			<input type="text" name="no_absen" class="form-control" value="{{ $jadlatgabs->no_absen }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Lokasi</label>	
			  			<input type="text" name="lokasi" class="form-control" value="{{ $jadlatgabs->lokasi }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jam</label>	
			  			<input type="text" name="jam" class="form-control" value="{{ $jadlatgabs->jam }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Hari</label>	
			  			<input type="text" name="hari" class="form-control" value="{{ $jadlatgabs->hari }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Materi </label>	
			  			<input type="text" name="materi" class="form-control" value="{{ $jadlatgabs->materi }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection