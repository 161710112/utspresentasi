@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Materi 
			  	<div class="panel-title pull-right"><a href="{{ route('materis.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('materis.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('pp') ? ' has-error' : '' }}">
			  			<label class="control-label">Pertolongan Pertama</label>	
			  			<input type="textarea" name="pp" class="form-control"  required>
			  			@if ($errors->has('pp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pp') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('pk') ? ' has-error' : '' }}">
			  			<label class="control-label">Pertolongan Keluarga</label>	
			  			<input type="textarea" name="pk" class="form-control"  required>
			  			@if ($errors->has('pk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tandu') ? ' has-error' : '' }}">
			  			<label class="control-label">Tandu</label>	
			  			<input type="textarea" name="tandu" class="form-control"  required>
			  			@if ($errors->has('tandu'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tandu') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('doras') ? ' has-error' : '' }}">
			  			<label class="control-label">Donor Darah Siswa</label>	
			  			<input type="textarea" name="doras" class="form-control"  required>
			  			@if ($errors->has('doras'))
                            <span class="help-block">
                                <strong>{{ $errors->first('doras') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('asican') ? ' has-error' : '' }}">
			  			<label class="control-label">Ayo Siaga Bencana</label>	
			  			<input type="textarea" name="asican" class="form-control"  required>
			  			@if ($errors->has('asican'))
                            <span class="help-block">
                                <strong>{{ $errors->first('asican') }}</strong>
                            </span>
                        @endif
			  		</div>
					<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection