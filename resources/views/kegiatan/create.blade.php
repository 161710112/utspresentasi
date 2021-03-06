@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Kegiatan 
			  	<div class="panel-title pull-right"><a href="{{ route('kegiatans.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('kegiatans.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_kegiatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Kegiatan</label>	
			  			<input type="text" name="nama_kegiatan" class="form-control"  required>
			  			@if ($errors->has('nama_kegiatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_kegiatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kegiatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Kegiatan</label>	
			  			<input type="text" name="kegiatan" class="form-control"  required>
			  			@if ($errors->has('kegiatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kegiatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('hari_kegiatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Hari Kegiatan</label>	
			  			<input type="text" name="hari_kegiatan" class="form-control"  required>
			  			@if ($errors->has('hari_kegiatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('hari_kegiatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('waktu_kegiatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Waktu Kegiatan</label>	
			  			<input type="text" name="waktu_kegiatan" class="form-control"  required>
			  			@if ($errors->has('waktu_kegiatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('waktu_kegiatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempat_kegiatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Kegiatan</label>	
			  			<input type="text" name="tempat_kegiatan" class="form-control"  required>
			  			@if ($errors->has('tempat_kegiatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_kegiatan') }}</strong>
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