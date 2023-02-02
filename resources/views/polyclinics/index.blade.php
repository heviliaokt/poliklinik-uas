@extends('layouts.main')

@section('content')
<a href="{{ route('polyclinics.create') }}" class="btn btn-success mt-3">Tambah Data</a>
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
</div>
<div class="card mt-3">

<div class="card-header">
   Data Poliklinik
</div>

<div class="card-body" >
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Poli</th>
            <th>Aksi</th>
        </tr>
        @foreach ($polyclinics as $polyclinic)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td><a href="{{ route('polyclinics.show', $polyclinic->id) }}" title="Lihat Data Dokter">
                {{ $polyclinic->name }}
            </a></td>
            <td>
                <form action="{{ route('polyclinics.destroy', $polyclinic->id) }}" method="POST">
                    <a href="{{ route('polyclinics.edit', $polyclinic->id) }}" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection
