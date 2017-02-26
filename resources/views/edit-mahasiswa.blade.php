@extends('templates.index')
@section('content')
<article>
				<form action="{{url('update/'.$d->id)}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						
						<hr><CENTER><h3>Tambah data</h3></CENTER><hr>
						<table class="table table-bordered table-hover" border="1" width="60%" align="center">
						<tr>
							<td>Nama</td>
						  <td><Input style="text" name="nama" size="80" value="{{$d->nama}}"></td>
						</tr>
						<tr>
							<td>NIM</td>
						  <td><input type=" text" name="nim" size="80" value="{{$d->nim}}"></td>
						</tr>
						<tr>
							<td>Alamat</td>
						  <td><input type=" text" name="alamat" size="80" value="{{$d->alamat}}"></td>
						</tr>
						<tr>
							<td colspan="2" align="right"><input class='btn btn-primary' name="bt_simpan" type="submit" value="Update" /> 
							<a href="{{url('/')}}" class='btn btn-primary' type="button" value="Batal" >Batal</a></td>
						</tr>
					</table>
				</form>
			</article>
@stop