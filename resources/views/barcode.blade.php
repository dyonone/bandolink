@extends('layout.main')

@section('container')

<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/barcodes/JsBarcode.code128.min.js"></script>

<style>
  @media print {
      .no-print {
          display: none;
      }
  }
</style>

@php

// //membuat array dari huruf A-Z
// $huruf   = range('A','Z');
// //inisiasi waktu
// $waktu   = date('ymdHis'); //23 12 31 23 59 59
// //tahun dikurangi 23 (tahun pembuatan aplikasi)
// $tahun   = $huruf[substr($waktu, 0, 2)-23];
// $bulan   = $huruf[(int)substr($waktu, 2, 2)];
// $tanggal = $huruf[(substr($waktu, 4, 1))] . $huruf[(substr($waktu, 5, 1))];
// $jam     = $huruf[(int)substr($waktu, 6, 2)];
// $menit   = $huruf[(substr($waktu, 8, 1))] . $huruf[(substr($waktu, 9, 1))];
// $detik   = $huruf[(substr($waktu, 10, 1))] . $huruf[(substr($waktu, 11, 1))];
// $code    = $tahun . $bulan . $tanggal . $jam . $menit . $detik;



@endphp

<div class="row bg-light mx-auto" id="print" style="width: 40rem">
    @for ($i = 1199865; $i < 1200000; $i++)
    <div class="col-lg-4">
<div class="d-flex justify-content-center"><svg class="barcode" jsbarcode-value="{{ $i }}"></svg></div>
    </div>
    @endfor
</div>

<button class="no-print" onclick="printTable()">Print Table</button>
<script>

JsBarcode(".barcode").init();

function printTable() {
  var printWindow = window.open("", "_blank");
  printWindow.document.write('<html><head><title>Print</title></head><body>');

  printWindow.document.write(document.getElementById('print').innerHTML);
  printWindow.document.write('</body></html>');
  printWindow.document.close();
  printWindow.print();
  printWindow.close();
}
</script>

@endsection