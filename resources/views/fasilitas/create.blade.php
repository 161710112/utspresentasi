@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Fasilitas
			  	<div class="panel-title pull-right"><a href="{{ route('fasilitas.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('fasilitas.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('anggota') ? ' has-error' : '' }}">
			  			<label class="control-label">Anggota</label>	
			  			<input type="text" name="anggota" class="form-control"  required>
			  			@if ($errors->has('anggota'))
                            <span class="help-block">
                                <strong>{{ $errors->first('anggota') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_anggota') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Anggota</label>	
			  			<input type="text" name="nama_anggota" class="form-control"  required>
			  			@if ($errors->has('nama_anggota'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_anggota') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah_anggota') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Anggota</label>	
			  			<input type="text" name="jumlah_anggota" class="form-control"  required>
			  			@if ($errors->has('jumlah_anggota'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_anggota') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('visi') ? ' has-error' : '' }}">
			  			<label class="control-label">Visi</label>	
			  			<input type="textarea" name="visi" class="form-control"  required>
			  			@if ($errors->has('visi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('visi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('misi') ? ' has-error' : '' }}">
			  			<label class="control-label">Misi</label>	
			  			<input type="textarea" name="misi" class="form-control"  required>
			  			@if ($errors->has('misi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('misi') }}</strong>
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