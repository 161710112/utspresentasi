@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Pembinas
					<div class="panel-title pull-right"><a href="{{ route('materis.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Pertolongan Pertama</th>
					<th>Pertolongan Keluarga</th>
					<th>Tandu</th>
					<th>Donor Darah Siswa</th>
					<th>Ayo Siaga Bencana</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($materis as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->pp }} </td>
		<td><p> {{ $data->pk }} </p></td>
		<td><p> {{ $data->tandu }} </p></td>
		<td><p> {{ $data->doras }} </p></td>
		<td><p> {{ $data->asican }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('materis.edit',$data->id)}} ">Edit </a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('materis.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('materis.destroy',$data->id) }}">
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