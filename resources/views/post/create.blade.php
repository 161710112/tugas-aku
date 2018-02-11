@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Post 
			   	<div class="panel-title pull-right"><a href="{{ route('posts.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('posts.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" class="form-control"  required>
			  			@if ($errors->has('kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kelas') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jurusan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jurusan</label>	
			  			<input type="text" name="jurusan" class="form-control"  required>
			  			@if ($errors->has('jurusan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jurusan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('wali') ? ' has-error' : '' }}">
			  			<label class="control-label">Wali</label>	
			  			<input type="text" name="wali" class="form-control"  required>
			  			@if ($errors->has('wali'))
                            <span class="help-block">
                                <strong>{{ $errors->first('wali') }}</strong>
                            </span>
                        @endif
			  		</div>

                        <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="cotrol-label">Alamat</label>	
			  			<textarea name="alamat" class="form-control" rows="10" required></textarea>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
							<button type="submit" class="btn btn-primary">Tambah</button>
</div></form></div></div></div></div></div>

@endsection