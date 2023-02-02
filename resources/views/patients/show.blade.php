@extends('layouts.main')

@section('content')
 
<div><h1>Detail Pasien</h1></div>
<div class="card">
  <div class="card-header">Nama Pasien</div>
  <div class="card-body">{{$patients->name}}</div>
  <div class="card-header">Tanggal Lahir  </div>
  <div class="card-body">{{$patients->birthdate}}</div>
  <div class="card-header">Jenis Kelamin</div>
  <div class="card-body">{{$patients->gender}}</div>
  <div class="card-header">Nama Poli</div>
  <div class="card-body">{{$patients->polyclinics->name}}</div>
  <div class="card-header">Nama Dokter</div>
  <div class="card-body">{{$patients->doctors->name}}</div>
  <div class="card-header">Waktu Daftar</div>
  <div class="card-body">{{$patients->doctors->created_at}}</div>
  
  
</div>
<php?>
</php>
@endsection
