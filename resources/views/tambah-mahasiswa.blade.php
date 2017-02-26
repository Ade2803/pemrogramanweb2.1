@extends('templates.index')
@section('content')
<article>
				<form action="{{url('store')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<hr><center><h3> Tambah Data</h3></center><hr>
					<table class="table table-border">
						<tr>
							<td>Nama</td>
						  <td><Input style="text" name="nama" size="80"></td>
						</tr>
						
							<td>NIM</td>
						  <td><input type=" text" name="nim" size="80"></td>
						</tr>
						<tr>
							<td>Alamat</td>
						  <td><input type=" text" name="alamat" size="80"></td>
						</tr>
						<tr>
							<td colspan="2" align="right"><input class='btn btn-primary' name="bt_simpan" type="submit" value="Tambah" /> 
							<a href="{{url('/')}}" class='btn btn-primary' type="button" value="Batal" >Batal</a></td>
						</tr>
					</table>
				</form>
				@if($errors->any())
					<div class="alert alert-danger">
						@foreach($errors->all() as $error)
						<p>{{$error}}</p>
						@endforeach
					</div>
				@endif
			</article>
@stop