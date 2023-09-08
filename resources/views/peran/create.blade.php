@extends('layout.master')

@section('judul')
Tambah Peran
@endsection

@section('content')

<form action="/peran" method="post">
    @csrf
    <div class="form-group">
        <label>Film</label>
        <input type="text" name="film" value="{{ old('film') }}" class="form-control @error('film') is-invalid @enderror">
        @error('film')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Cast</label>
        <input type="number" name="cast" value="{{ old('cast') }}" class="form-control @error('cast') is-invalid @enderror">
        @error('cast')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Nama</label>
        <textarea type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror"></textarea>
        @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Action</label>
        <textarea type="text" name="action" value="{{ old('action') }}" class="form-control @error('action') is-invalid @enderror"></textarea>
        @error('action')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
