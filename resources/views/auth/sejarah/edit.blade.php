@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Sejarah
			  	<div class="panel-title pull-right"><a href="{{ route('sejarahs.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('sejarahs.update',$sejarahs->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $sejarahs->eks }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>warga_negara

			  		<div class="form-group {{ $errors->has('ttl') ? ' has-error' : '' }}">
			  			<label class="control-label">TTL</label>	
			  			<input type="text" name="ttl" class="form-control" value="{{ $sejarahs->ttl }}"  required>
			  			@if ($errors->has('ttl'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ttl') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('warga_negara') ? ' has-error' : '' }}">
			  			<label class="control-label">Warga Negara</label>	
			  			<input type="text" name="warga_negara" class="form-control" value="{{ $sejarahs->warga_negara }}"  required>
			  			@if ($errors->has('warga_negara'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warga_negara') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('sejarah') ? ' has-error' : '' }}">
			  			<label class="control-label">Sejarah</label>	
			  			<input type="text" name="sejarah" class="form-control" value="{{ $sejarahs->sejarah }}"  required>
			  			@if ($errors->has('sejarah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sejarah') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('semenjak') ? ' has-error' : '' }}">
			  			<label class="control-label">Semenjak</label>	
			  			<input type="text" name="semenjak" class="form-control" value="{{ $sejarahs->semenjak }}"  
			  			required>
			  			@if ($errors->has('semenjak'))
                            <span class="help-block">
                                <strong>{{ $errors->first('semenjak') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsectionsejarahs