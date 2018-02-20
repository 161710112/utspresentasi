@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Anggota 
			  	<div class="panel-title pull-right"><a href="{{ route('anggotas.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('anggotas.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" class="form-control"  required>
			  			@if ($errors->has('kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kelas') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('spesialis') ? ' has-error' : '' }}">
			  			<label class="control-label">Spesialis</label>	
			  			<input type="text" name="spesialis" class="form-control"  required>
			  			@if ($errors->has('spesialis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('spesialis') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		<div class="form-group {{ $errors->has('tgl_pelantikan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pelantikan</label>	
			  			<input type="text" name="tgl_pelantikan" class="form-control"  required>
			  			@if ($errors->has('tgl_pelantikan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pelantikan') }}</strong>
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