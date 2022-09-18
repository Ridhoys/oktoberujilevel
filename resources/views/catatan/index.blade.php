@extends('template')

@section('container')
<a href="{{ url('catatan/create') }}" class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus-square mr-1"></i>Add New</a>
<!-- Button trigger modal -->
<div class="card">
    <div class="card-header text-center">
        <h3>Catatan perjalanan</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Suhu Tubuh</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($catatan as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->waktu }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->suhu_tubuh }}</td>


                    <td>
                        <a href="{{ url('/catatan/' .$item->id). '/edit' }}"
                            class="btn btn-light text-primary border border-opacity-10 btn-sm" title="Edit Guru"><i
                                class="fas fa-edit mr-1 "></i>Edit</a>
                        <form method="POST" action="{{ url('/catatan' . '/' . $item->id) }}" accept-charset="UTF-8"
                            style="display: inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-primary btn-sm" title="Delete Guru"><i class="fas fa-trash mr-1"></i>Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection