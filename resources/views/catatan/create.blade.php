@extends('template')
@section('container')
<div class="card">
    <div class="card-body">
        <form action="{{ url('catatan') }}" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
                @error('tanggal')
                    <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>  
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Waktu</label>
                <input type="time" class="form-control" name="waktu">
                @error('waktu')
                    <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Lokasi</label>
                <input type="text" class="form-control" name="lokasi">
                @error('lokasi')
                    <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Suhu Tubuh</label>
                <input type="text" class="form-control" name="suhu_tubuh">
                @error('suhu_tubuh')
                    <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection