@extends('layout.main')

@section('container')

<div class="row p-3 justify-content-center align-items-center" style="height: 80vh">
  <div class="d-flex col-sm-6 col-md-4 col-xl-3 h-75 bg-white rounded justify-content-center align-items-center">
  <div class="col-lg-10">
    <div class="">USERNAME</div>
      <input type="text" class="form-control mt-1" placeholder="username">
      <div class="mt-4">PASSWORD</div>
      <input type="text" class="form-control mt-1" placeholder="password">
      <button class="btn btn-primary mt-3 w-100">login</button>
  </div>
</div></div>

@endsection