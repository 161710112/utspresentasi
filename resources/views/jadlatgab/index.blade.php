@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Jadlatgab
					<div class="panel-title pull-right"><a href="{{ route('jadlatgabs.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>No Absen</th>
					<th>Lokasi</th>
					<th>Jam</th>
					<th>Hari</th>
					<th>Materi</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($jadlatgabs as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->no_absen }} </td>
		<td><p> {{ $data->lokasi }} </p></td>
		<td><p> {{ $data->jam }} </p></td>
		<td><p> {{ $data->hari }} </p></td>
		<td><p> {{ $data->materi }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('jadlatgabs.edit',$data->id)}} ">Edit </a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('jadlatgabs.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('jadlatgabs.destroy',$data->id) }}">
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