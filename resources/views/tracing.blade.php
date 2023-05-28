@extends('layout.main')

@section('container')

<div class="row p-3 justify-content-center" style="height: 80vh">
  <div class="d-flex col-lg-5 h-75 bg-white rounded justify-content-center">
    <div class="col-lg-6 mt-5">
      <div class="input-group">
        <input type="text" class="form-control me-1" placeholder="code material">
        <button class="btn btn-primary" type="button" id="button1">trace</button>
      </div>
      <div class="fs-4 mt-5 text-secondary text-center">masukan material code cord atau ADR untuk pelacakan material</div>
    </div>
  </div>
</div>

@endsection