@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Anggota
					<div class="panel-title pull-right"><a href="{{ route('anggotas.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Alamat</th>
					<th>Spesialis</th>
					<th>Tanggal Pelantikan</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($anggotas as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->nama }} </td>
		<td><p> {{ $data->kelas }} </p></td>
		<td><p> {{ $data->alamat }} </p></td>
		<td><p> {{ $data->spesialis }} </p></td>
		<td><p> {{ $data->tgl_pelantikan }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('anggotas.edit',$data->id)}} ">Edit </a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('anggotas.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('anggotas.destroy',$data->id) }}">
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