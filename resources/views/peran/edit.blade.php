@extends('layout.master')

@section('judul')
Tambah Peran
@endsection

@section('content')

<form action="/peran/{{ $cast ->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Film</label>
        <input type="text" name="film" value="{{ $peran->film }}" class="form-control">
        @error('film')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Cast</label>
        <input type="number" name="cast" value="{{ $peran->cast }}" class="form-control">
        @error('cast')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Nama</label>
        <textarea name="nama" class="form-control">{{ $peran->nama }}</textarea>
        @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Action</label>
        <textarea name="action" class="form-control">{{ $peran->action }}</textarea>
        @error('action')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
