@extends('templates.index')

@section('content')
<article>
<table class="table table-bordered table-hover">
			<a href="{{url('tambah')}}" class="btn btn-link  btn-sm"> TAMBAH DATA</a>
		<tr align="center">
				<td><b>No</b></td>
				<td><b>Nim</b></td>
				<td><b>Name</b></td>
				<td><b>Address</b></td>
				<td><b>Action</b></td>
			</tr>
			@foreach($d as $mhs)
			<tr>
				<td align="center">{{$mhs->id}}</td>
				<td align="center">{{$mhs->nim}}</td>
				<td>{{$mhs->nama}}</td>
				<td>{{$mhs->alamat}}</td>
				<td><a href="{{url('edit/'.$mhs->id)}}">Edit</a> | <a href="{{url('hapus/'.$mhs->id)}}">Hapus</a></td>
			@endforeach
			</tr>
		</table>
	</article>
@endsection
