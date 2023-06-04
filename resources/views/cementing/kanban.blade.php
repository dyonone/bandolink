@extends('layout.main')

@section('container')

<div class="container">

<div class="row gap-4 py-5 px-3 justify-content-center bg-light rounded shadow-sm">
  <div class="text-center fs-1">KANBAN CEMENTING</div>
  <hr>
  @for ($i=0; $i <= count($cord)-1; $i++)
  <div class="col-lg-2 mb-3">
    <div class="card text-center shadow-sm">
        {{-- <div class="card-header">
          kartu kanban
        </div> --}}
        <div class="card-body" style="background-color: {{ $color[$i] }}">
          <p class="card-text fs-3 py-3">{{ $cord[$i] }}</p>
        </div>
        <div class="card-footer text-body-secondary">
          <div class="d-flex justify-content-between">
            <div>rop : {{ $rop[$i] }}</div>
            <div>qty : {{ $qty[$i] }}</div>
          </div>
        </div>
      </div>
    </div>
    @endfor

</div>
</div>


@endsection