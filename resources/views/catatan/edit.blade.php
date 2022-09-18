@extends('template')

@section('container')
<div class="card">
    <div class="card-body">
        <form action="{{ url('catatan/' .$catatan->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" value="{{ $catatan->tanggal }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Waktu</label>
                <input type="time" name="waktu" value="{{ $catatan->waktu }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" value="{{ $catatan->lokasi }}" class="form-control">
            </div>
            <div class="form-group">
                <label>suhu_tubuh</label>
                <input type="text" name="suhu_tubuh" value="{{ $catatan->suhu_tubuh }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection