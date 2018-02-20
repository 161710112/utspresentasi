@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Fasilitas
					<div class="panel-title pull-right"><a href="{{ route('fasilitas.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Anggota</th>
					<th>Nama Anggota</th>
					<th>Jumlah Anggota</th>
					<th>Visi</th>
					<th>Misi</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($fasilitas as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->anggota }} </td>
		<td><p> {{ $data->nama_anggota }} </p></td>
		<td><p> {{ $data->jumlah_anggota }} </p></td>
		<td><p> {{ $data->visi }} </p></td>
		<td><p> {{ $data->misi }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('fasilitas.edit',$data->id)}} ">Edit </a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('fasilitas.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('fasilitas.destroy',$data->id) }}">
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