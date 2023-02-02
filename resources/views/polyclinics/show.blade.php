@extends('layouts.main')

@section('content')
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
</div>
<div class="card mt-3">

<div class="card-header">
   Data Dokter
</div>

<div class="card-body">
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>No. Registrasi</th>
            <th>Nama Dokter</th>
            <th>Nama Poli</th>
        </tr>
        @foreach ($doctors as $doctor)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $doctor->registration_code }}</td>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->polyclinics->name }}</td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection
