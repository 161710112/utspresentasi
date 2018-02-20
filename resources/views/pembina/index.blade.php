@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Pembinas
					<div class="panel-title pull-right"><a href="{{ route('pembinas.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>TTL</th>
					<th>Umur</th>
					<th>Alamat</th>
					<th>Spesialis Materi</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($pembinas as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->nama }} </td>
		<td><p> {{ $data->ttl }} </p></td>
		<td><p> {{ $data->umur }} </p></td>
		<td><p> {{ $data->alamat }} </p></td>
		<td><p> {{ $data->spesialis_materi }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('pembinas.edit',$data->id)}} ">Edit </a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('pembinas.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('pembinas.destroy',$data->id) }}">
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