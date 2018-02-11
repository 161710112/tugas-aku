@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Post 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $posts->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">kelas</label>	
			  			<input type="text" name="kelas" class="form-control" value="{{ $posts->kelas }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">jurusan</label>	
			  			<input type="text" name="jurusan" class="form-control" value="{{ $posts->jurusan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">wali</label>	
			  			<input type="text" name="wali" class="form-control" value="{{ $posts->wali }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<textarea name="alamat" class="form-control" rows="10" readonly>{{ $posts->alamat }}</textarea>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection
