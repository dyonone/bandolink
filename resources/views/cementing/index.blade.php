@extends('layout.main')

  @section('container')

  <div class="row justify-content-center">

    {{-- mesin 1 --}}
    <div class="col-lg-5 mb-3">
      <form method="POST">
        @csrf
      <div class="card shadow-sm">
        <div class="card-header text-center fs-3">MESIN 1</div>
        <div class="card-body bg-light">
          <div class="row">
            <div class="col-lg-9">
              <div class="fs-5 text-center mt-2">Jenis Cord</div>
              <hr style="margin-top: 0">
              <div class="row gap-1 justify-content-center">
                <input type="radio" class="btn-check" name="cord_1" value="212" id="212_1" {{ old('cord_1') == '212' ? 'checked' : "" }} autocomplete="on">
                <label class="btn btn-outline-success mb-1" for="212_1" style="width: 3.4rem" >212</label>
                <input type="radio" class="btn-check" name="cord_1" value="213" id="213_1" {{ old('cord_1') == '213' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="213_1" style="width: 3.4rem">213</label>
                <input type="radio" class="btn-check" name="cord_1" value="223" id="223_1" {{ old('cord_1') == '223' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="223_1" style="width: 3.4rem">223</label>
                <input type="radio" class="btn-check" name="cord_1" value="2x5" id="2x5_1" {{ old('cord_1') == '2x5' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="2x5_1" style="width: 3.4rem">2x5</label>
                <input type="radio" class="btn-check" name="cord_1" value="244" id="244_1" {{ old('cord_1') == '244' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="244_1" style="width: 3.4rem">244</label>
                <input type="radio" class="btn-check" name="cord_1" value="247" id="247_1" {{ old('cord_1') == '247' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="247_1" style="width: 3.4rem">247</label>
                <input type="radio" class="btn-check" name="cord_1" value="401" id="401_1" {{ old('cord_1') == '401' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="401_1" style="width: 3.4rem">401</label>
              </div>
            </div>

            <div class="col">
              <div class="fs-5 text-center mt-2">Jenis Lem</div>
              <hr style="margin-top: 0">
              <div class="row gap-1 justify-content-center">
                <input type="radio" class="btn-check" name="lem_1" value="GJ" id="gj_1" {{ old('lem_1') == 'GJ' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="gj_1" style="width: 3.4rem">GJ</label>
                <input type="radio" class="btn-check" name="lem_1" value="GM" id="gm_1" {{ old('lem_1') == 'GM' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="gm_1" style="width: 3.4rem">GM</label>
              </div>
            </div>
          </div>

          {{-- <div class="d-flex justify-content-center mt-3">
            <div class="card text-center">
              <div class="card-header text-bg-secondary">
                Output
              </div>
              <div class="card-body text-bg-light">
                <div class="fs-4" id="output1">&nbsp;</div>
              </div>
            </div>
          </div> --}}

          <div class="row justify-content-center mt-3">
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-text">Lot Cord</span>
                <input type="text" class="form-control text-center" name="lotCord_1" value="{{ old('lotCord_1') }}" autocomplete="off"  style="width: 5rem">
                <span class="input-group-text">/</span>
                <input type="text" class="form-control text-center" name="lotCordUrut_1" autocomplete="off">
              </div>
            </div>
            <div class="col-lg-5">
              <div class="input-group">
                <span class="input-group-text">Lot Lem</span>
                <input type="text" class="form-control text-center" name="lotLem_1" value="{{ old('lotLem_1') }}" autocomplete="off">
              </div>
            </div>
          </div>
            
          <div class="row justify-content-center mt-3">
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-text">Lot Cementing</span>
                <input type="text" class="form-control" value="{{ '2A1'. date('dmy') . '-3' }}" disabled>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="input-group">
                <input type="text" class="form-control me-1" name="code_1" placeholder="Barcode">
                <button class="btn btn-primary" type="submit" id="button1" name="mesin" value="1">submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    {{-- mesin 2 --}}
    <div class="col-lg-5 mb-3">

      <div class="card shadow-sm">
        <div class="card-header text-center fs-3">MESIN 2</div>
        <div class="card-body bg-light">
          <div class="row">
            <div class="col-lg-9">
              <div class="fs-5 text-center mt-2">Jenis Cord</div>
              <hr style="margin-top: 0">
              <div class="row gap-1 justify-content-center">
                <input type="radio" class="btn-check" name="cord_2" value="212" id="212_2" {{ old('cord_2') == '212' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="212_2" style="width: 3.4rem" >212</label>
                <input type="radio" class="btn-check" name="cord_2" value="213" id="213_2" {{ old('cord_2') == '213' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="213_2" style="width: 3.4rem">213</label>
                <input type="radio" class="btn-check" name="cord_2" value="223" id="223_2" {{ old('cord_2') == '223' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="223_2" style="width: 3.4rem">223</label>
                <input type="radio" class="btn-check" name="cord_2" value="2x5" id="2x5_2" {{ old('cord_2') == '2x5' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="2x5_2" style="width: 3.4rem">2x5</label>
                <input type="radio" class="btn-check" name="cord_2" value="244" id="244_2" {{ old('cord_2') == '244' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="244_2" style="width: 3.4rem">244</label>
                <input type="radio" class="btn-check" name="cord_2" value="247" id="247_2" {{ old('cord_2') == '247' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="247_2" style="width: 3.4rem">247</label>
                <input type="radio" class="btn-check" name="cord_2" value="401" id="401_2" {{ old('cord_2') == '401' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="401_2" style="width: 3.4rem">401</label>
              </div>
            </div>

            <div class="col">
              <div class="fs-5 text-center mt-2">Jenis Lem</div>
              <hr style="margin-top: 0">
              <div class="row gap-1 justify-content-center">
                <input type="radio" class="btn-check" name="lem_2" value="GJ" id="gj_2" {{ old('lem_2') == 'GJ' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="gj_2" style="width: 3.4rem">GJ</label>
                <input type="radio" class="btn-check" name="lem_2" value="GM" id="gm_2" {{ old('lem_2') == 'GM' ? 'checked' : "" }}>
                <label class="btn btn-outline-success mb-1" for="gm_2" style="width: 3.4rem">GM</label>
              </div>
            </div>
          </div>

          {{-- <div class="d-flex justify-content-center mt-3">
            <div class="card text-center">
              <div class="card-header text-bg-secondary">
                Output
              </div>
              <div class="card-body text-bg-light">
                <div class="fs-4" id="output1">&nbsp;</div>
              </div>
            </div>
          </div> --}}

          <div class="row justify-content-center mt-3">
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-text">Lot Cord</span>
                <input type="text" class="form-control text-center" name="lotCord_2" value="{{ old('lotCord_2') }}" autocomplete="off"  style="width: 5rem">
                <span class="input-group-text">/</span>
                <input type="text" class="form-control text-center" name="lotCordUrut_2" autocomplete="off">
              </div>
            </div>
            <div class="col-lg-5">
              <div class="input-group">
                <span class="input-group-text">Lot Lem</span>
                <input type="text" class="form-control text-center" name="lotLem_2" value="{{ old('lotLem_2') }}" autocomplete="off">
              </div>
            </div>
          </div>
            
          <div class="row justify-content-center mt-3">
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-text">Lot Cementing</span>
                <input type="text" class="form-control" value="{{ '2A1'. date('dmy') . '-3' }}" disabled>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="input-group">
                <input type="text" class="form-control me-1" name="code_2" placeholder="Barcode">
                <button class="btn btn-primary" type="submit" id="button1" name="mesin" value="2">submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>

  <div class="row mx-3 p-4 bg-light rounded shadow-sm">
    <div class="row justify-content-between">
      <div class="input-group" style="width: 15rem">
        <span class="input-group-text">Tampilkan Data</span>
        <select class="form-select" id="tampilData">
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="-1">Semua</option>
        </select>
      </div>
      <input type="text" id="cariData" class="form-control" placeholder="cari data..." style="width: 18rem">
    </div>
    <table class="stripe row-border mt-3 mb-2" id="tbLaporan">
      <thead>
        <tr>
          <th class="text-center">No</th>
          <th>Time</th>
          <th>Jenis Cord</th>
          <th>Lot Supplier</th>
          <th>Exp. Date</th>
          <th>Jenis Lem</th>
          <th>Lot Comp. Lem</th>
          <th>Lot Cementing</th>
          <th class="no-sort text-center">Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $no = 1
        ?>
        @foreach ($cementings as $cement)
        <tr>
          <th class="text-center">{{ $no++ }}</th>
          <td>{{ date('H:i', strtotime($cement->created_at)) }}</td>
          <td>{{ $cement->jenisCord }}</td>
          <td>{{ $cement->lotSupplier }}</td>
          <td>{{ $cement->expDate }}</td>
          <td>{{ $cement->jenisLem }}</td>
          <td>{{ $cement->lotLem }}</td>
          <td>{{ $cement->lotCementing }}</td>
          <td class="text-center" style="width: 3rem">
            <span type="button" data-bs-toggle="dropdown"><i class='bx bx-dots-vertical-rounded'></i></span>
            <ul class="dropdown-menu">
              <li><button class="dropdown-item">Edit</button></li>
              <form action="/cementing/{{ $cement->id }}" method="post">
                @csrf
                @method('DELETE')
              <li><button class="dropdown-item" type="submit">Hapus</button></li>
              </form>
            </ul>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

<script>
// const output1 = document.getElementById('output1');
// const output2 = document.getElementById('output2');

// function updateOutput() {
//   const cord1 = document.querySelector('input[name="cord_1"]:checked');
//   const cord2 = document.querySelector('input[name="cord_2"]:checked');
//   const lem1 = document.querySelector('input[name="lem_1"]:checked');
//   const lem2 = document.querySelector('input[name="lem_2"]:checked');

//   output1.innerHTML = cord1&&lem1 ? cord_1.value + " " + lem1.value : null;
//   output2.innerHTML = cord2&&lem2 ? cord2.value + " " + lem2.value : null;
// }
// updateOutput();

// function updateCord(){
//   updateOutput();
// }

$(document).ready(function() {

  var dataTable = $('#tbLaporan').DataTable({
    dom: 'rtip', //hide search and entries
    stateSave: true,
    columnDefs: [
      { targets: 'no-sort', orderable: false } // Disable sorting on the first and third column
    ]
  });

  //make my own search to replace build in search
  $('#cariData').on('keyup', function() {
    dataTable.search($(this).val()).draw();
  });

  $('#tampilData').change(function() {
    var entries = $(this).val();
    $('#tbLaporan').DataTable().page.len(entries).draw();
  });

});

//disable semua autocomplete
const inputTexts = document.querySelectorAll('input[type="text"]');
  inputTexts.forEach(inputText => {
    inputText.autocomplete = 'off'
  });

</script>

  @endsection