@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ubah Data Siswa</h3>
                        </div>
                        <div class="panel-body">
                        <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group{{$errors->has('nama_depan') ? ' has-error' : ''}}">
                                <label for="exampleInputEmail1">Nama Depan</label>
                                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
                                @if($errors->has('nama_depan'))
                                    <span class="help-block">{{$errors->first('nama_depan')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Belakang</label>
                                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
                            </div>
                            <div class="form-group{{$errors->has('jenis_kelamin') ? ' has-error' : ''}}">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                    <option value="L" @if (old('jenis_kelamin') == "L") {{ 'selected' }} @endif>Laki-Laki</option>
                                    <option value="P" @if (old('jenis_kelamin') == "P") {{ 'selected' }} @endif>Perempuan</option>
                                </select>
                                @if($errors->has('jenis_kelamin'))
                                    <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                                @endif
                            </div>
                            <div class="form-group{{$errors->has('agama') ? ' has-error' : ''}}">
                                <label for="exampleInputEmail1">Agama</label>
                                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
                                @if($errors->has('agama'))
                                    <span class="help-block">{{$errors->first('agama')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
                            </div>
                            <div class="form-group{{$errors->has('avatar') ? ' has-error' : ''}}">
                                <label for="exampleFormControlTextarea1">Avatar</label>
                                <input type="file" name="avatar" class="form-control">
                                @if($errors->has('avatar'))
                                    <span class="help-block">{{$errors->first('avatar')}}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
