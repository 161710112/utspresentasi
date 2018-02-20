@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Jadsekul 
			  	<div class="panel-title pull-right"><a href="{{ route('jadsekuls.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('jadsekuls.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('hari') ? ' has-error' : '' }}">
			  			<label class="control-label">Hari</label>	
			  			<input type="text" name="hari" class="form-control"  required>
			  			@if ($errors->has('hari'))
                            <span class="help-block">
                                <strong>{{ $errors->first('hari') }}</strong>
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

			  		<div class="form-group {{ $errors->has('materi') ? ' has-error' : '' }}">
			  			<label class="control-label">Materi</label>	
			  			<input type="text" name="materi" class="form-control"  required>
			  			@if ($errors->has('materi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('materi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('pembina') ? ' has-error' : '' }}">
			  			<label class="control-label">Pembina</label>	
			  			<input type="text" name="pembina" class="form-control"  required>
			  			@if ($errors->has('pembina'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pembina') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempat') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat</label>	
			  			<input type="text" name="tempat" class="form-control"  required>
			  			@if ($errors->has('tempat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat') }}</strong>
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