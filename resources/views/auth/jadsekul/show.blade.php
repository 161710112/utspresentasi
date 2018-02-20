@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Jadsekul
			  	<div class="panel-title pull-right"><a href="{{ route('jadsekuls.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Hari</label>
			  			<input type="text" name="hari" class="form-control" value="{{ $jadsekuls->hari }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jam</label>	
			  			<input type="text" name="jam" class="form-control" value="{{ $jadsekuls->jam }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Materi</label>	
			  			<input type="text" name="materi" class="form-control" value="{{ $jadsekuls->materi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Pembina</label>	
			  			<input type="text" name="pembina" class="form-control" value="{{ $jadsekuls->pembina }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tempat</label>	
			  			<input type="text" name="tempat" class="form-control" value="{{ $jadsekuls->tempat }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection