@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Perlombaan
					<div class="panel-title pull-right"><a href="{{ route('perlombaans.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Spesialis</th>
					<th>Nama Perlombaan</th>
					<th>Tgl Lomba</th>
					<th>Tgl Daftar Ulang</th>
					<th>Tempat</th>
					<th>Jumlah Peserta</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($perlombaans as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->spesialis }} </td>
		<td><p> {{ $data->nama_perlombaan }} </p></td>
		<td><p> {{ $data->tgl_lomba }} </p></td>
		<td><p> {{ $data->tgl_daftar_ulang }} </p></td>
		<td><p> {{ $data->tempat }} </p></td>
		<td><p> {{ $data->jumlah_peserta }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('perlombaans.edit',$data->id)}} ">Edit </a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('perlombaans.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('perlombaans.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection