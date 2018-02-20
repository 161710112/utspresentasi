@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Perlombaan
			  	<div class="panel-title pull-right"><a href="{{ route('perlombaans.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('perlombaans.update',$perlombaans->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('spesialis') ? ' has-error' : '' }}">
			  			<label class="control-label">Spesialis</label>	
			  			<input type="text" name="spesialis" class="form-control" value="{{ $perlombaans->spesialis }}"  required>
			  			@if ($errors->has('spesialis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('spesialis') }}</strong>
                            </span>
                        @endif
			  		</div>warga_negara

			  		<div class="form-group {{ $errors->has('nama_perlombaan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Perlombaan</label>	
			  			<input type="text" name="nama_perlombaan" class="form-control" value="{{ $perlombaans->nama_perlombaan }}"  required>
			  			@if ($errors->has('nama_perlombaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_perlombaan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl_lomba') ? ' has-error' : '' }}">
			  			<label class="control-label">Tgl Lomba</label>	
			  			<input type="text" name="tgl_lomba" class="form-control" value="{{ $perlombaans->tgl_lomba }}"  required>
			  			@if ($errors->has('tgl_lomba'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_lomba') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl_daftar_ulang') ? ' has-error' : '' }}">
			  			<label class="control-label">Tgl Daftar Ulang</label>	
			  			<input type="text" name="tgl_daftar_ulang" class="form-control" value="{{ $perlombaans->tgl_daftar_ulang }}"  required>
			  			@if ($errors->has('tgl_daftar_ulang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_daftar_ulang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempat') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat</label>	
			  			<input type="text" name="tempat" class="form-control" value="{{ $perlombaans->tempat }}"  
			  			required>
			  			@if ($errors->has('tempat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah_peserta') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Peserta</label>	
			  			<input type="text" name="jumlah_peserta" class="form-control" value="{{ $perlombaans->jumlah_peserta }}"  
			  			required>
			  			@if ($errors->has('jumlah_peserta'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_peserta') }}</strong>
                            </span>
                        @endif
			  		</div>jumlah_peserta
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection