@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Kegiatan
					<div class="panel-title pull-right"><a href="{{ route('kegiatans.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Kegiatan</th>
					<th>Hari Kegiatan</th>
					<th>Waktu Kegiatan</th>
					<th>Tempat Kegiatan</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($kegiatans as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->nama }} </td>
		<td><p> {{ $data->kegiatan }} </p></td>
		<td><p> {{ $data->hari_kegiatan }} </p></td>
		<td><p> {{ $data->waktu_kegiatan }} </p></td>
		<td><p> {{ $data->tempat_kegiatan }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('kegiatans.edit',$data->id)}} ">Edit </a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('kegiatans.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('kegiatans.destroy',$data->id) }}">
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