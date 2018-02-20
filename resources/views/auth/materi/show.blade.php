@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Materi
			  	<div class="panel-title pull-right"><a href="{{ route('materis.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Pertolongan Pertama</label>
			  			<input type="text" name="pp" class="form-control" value="{{ $materis->pp }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Pertolongan Keluarga</label>	
			  			<input type="text" name="pk" class="form-control" value="{{ $materis->pk }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tandu</label>	
			  			<input type="text" name="tandu" class="form-control" value="{{ $materis->tandu }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Ayo Siaga Bencana</label>	
			  			<input type="text" name="asican" class="form-control" value="{{ $materis->asican }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection