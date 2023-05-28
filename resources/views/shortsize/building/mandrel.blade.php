@extends('layout.main')

@section('container')
@php
    $cuts = ['A', 'B', 'C', 'AA', 'BB', 'SPZ', '3V', '5V'];
    $mandrels = ['0', '0.5', '1', '1.5', '2', '2.5', '3', '3.5', '4', '4.5', '5', '5.5', '6', '6.5', '7', '8', '9']
@endphp

<div class="container">
<table class="table table-striped mt-3 text-center">
  <thead>
    <tr>
      <th>Tipe Pisau</th>
      <th>Total Pemakaian</th>
      <th>Input Pemakaian</th>
      <th>Ganti Pisau</th>
      <th>Pengganti Terakir</th>
      <th>Tanggal Pergantian</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
@foreach ($cuts as $cut)
<tr>
    <th>{{ $cut }}</th>
    <td class="text-success">50</td>
    <td><input type="text" style="width: 3rem"><button onclick="confirm('yakin?')">input</button></td>
    <td><button>ganti</button></td>
    <td>Supandang</td>
    <td>{{ date('D, d M Y') }}</td>
@endforeach
    </tr>
  </tbody>
</div>
</table>

<table class="table table-striped mt-3 text-center">
  <thead>
    <tr>
      <th>Mandrel</th>
      <th>Total Pemakaian</th>
      <th>Input Pemakaian</th>
      <th>Bongkar Mandrel</th>
      <th>Pembongkar Terakir</th>
      <th>Tanggal Pembongkaran</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
@foreach ($mandrels as $mandrel)
<tr>
    <th>{{ $mandrel }}</th>
    <td class="text-success">50</td>
    <td><input type="text" style="width: 3rem"><button onclick="confirm('yakin?')">input</button></td>
    <td><button>ganti</button></td>
    <td>Supandang</td>
    <td>{{ date('D, d M Y') }}</td>
@endforeach
    </tr>
  </tbody>
</div>
</table>
@endsection