@extends('layout.main')

@section('container')
@php
    $cuts = ['A', 'B', 'C', 'AA', 'BB', 'SPZ', '3V', '5V'];
    $mandrels = ['0', '0.5', '1', '1.5', '2', '2.5', '3', '3.5', '4', '4.5', '5', '5.5', '6', '6.5', '7', '8', '9']
@endphp

<div class="row m-5 px-5 py-3 bg-light rounded">

<div class="nav nav-underline justify-content-center">
  <button class="nav-link text-dark active" id="navMandrel">Mandrel</button>
  <button class="nav-link text-dark" id="navPisau">Pisau</button>
</div>

<table class="table table-bordered bg-light mt-3 text-center" id="tbMandrel">
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
    <td class="text-danger">50</td>
    <td>
      <div class="input-group mx-auto" style="width: 8rem">
        <input type="text" class="form-control me-1" style="height: 1.8rem"><button class="btn btn-sm btn-primary" onclick="confirm('yakin?')">input</button>
      </div>
    </td>
    <td><button class="btn btn-sm btn-primary">Bongkar</button></td>
    <td>Supandang</td>
    <td>{{ date('D, d M Y') }}</td>
  </tr>
@endforeach
  </tbody>
</div>
</table>

<table class="table table-striped mt-3 text-center" id="tbPisau" style="display: none">
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
</table>

</div>

<script>
    //tab untuk switch table mandrel dan table pisau
    let tbMandrel = document.getElementById('tbMandrel');
    let tbPisau = document.getElementById('tbPisau');
    let navMandrel = document.getElementById('navMandrel');
    let navPisau = document.getElementById('navPisau');

    navMandrel.addEventListener('click', () => {
    tbMandrel.style.display = 'table';
    tbPisau.style.display = 'none';
    navMandrel.classList.add('active');
    navPisau.classList.remove('active');
  });
    navPisau.addEventListener('click', () => {
    tbPisau.style.display = 'table';
    tbMandrel.style.display = 'none';
    navPisau.classList.add('active');
    navMandrel.classList.remove('active');
  });
</script>

@endsection