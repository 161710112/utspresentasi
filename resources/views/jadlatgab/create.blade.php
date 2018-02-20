@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Jadlatgab 
			  	<div class="panel-title pull-right"><a href="{{ route('jadlatgabs.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('jadlatgabs.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('no_absen') ? ' has-error' : '' }}">
			  			<label class="control-label">No Absen</label>	
			  			<input type="text" name="no_absen" class="form-control"  required>
			  			@if ($errors->has('no_absen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_absen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('lokasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Lokasi</label>	
			  			<input type="text" name="lokasi" class="form-control"  required>
			  			@if ($errors->has('lokasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lokasi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jam') ? ' has-error' : '' }}">
			  			<label class="control-label">Jam</label>	
			  			<input type="text" name="jam" class="form-control"  required>
			  			@if ($errors->has('jam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jam') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('hari') ? ' has-error' : '' }}">
			  			<label class="control-label">Hari</label>	
			  			<input type="text" name="hari" class="form-control"  required>
			  			@if ($errors->has('hari'))
                            <span class="help-block">
                                <strong>{{ $errors->first('hari') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('materi') ? ' has-error' : '' }}">
			  			<label class="control-label">Materi</label>	
			  			<input type="text" name="materi" class="form-control"  required>
			  			@if ($errors->has('materi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('materi') }}</strong>
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