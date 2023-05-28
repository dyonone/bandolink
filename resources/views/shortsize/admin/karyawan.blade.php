@extends('layout.main')

@section('container')

<div class="container">
  <div class="row bg-light rounded shadow pt-2 justify-content-between">
    <div class="col-lg-2 mt-2">
    <button type="button" id="tambah" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKaryawan"><i class='bx bx-user-plus'></i> Tambah Karyawan</button>
  </div>
    <div class="col-lg-3 mt-2">
      <input type="text" class="form-control me-1" id="cariData" placeholder="Cari karyawan...">
    </div>

    <div class="d-flex">
      <table class="table table-striped mt-3 text-center" id="tbKaryawan">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIK</th>
            <th>Jabatan</th>
            <th>Group</th>
            <th>Line</th>
            <th>Bagian</th>
            <th>No. Mesin</th>
            <th>Opsi</th>
          </tr>
        </thead>
        @php
            $i = 1
        @endphp
        <tbody class="table-group-divider">
          @foreach ($karyawan as $user)
          <tr>
          <th>{{ $i++ }}</th>
          <td>{{ $user->nama }}</td>
          <td>{{ $user->nik }}</td>
          <td>{{ $user->jabatan }}</td>
          <td>{{ $user->grup }}</td>
          <td>{{ $user->line }}</td>
          <td>{{ $user->bagian }}</td>
          <td>{{ $user->noMesin }}</td>
          <td style="width: 3rem">
            <span type="button" data-bs-toggle="dropdown"><i class='bx bx-dots-vertical-rounded'></i></span>
            <ul class="dropdown-menu">
              <li><button class="dropdown-item" href="#">Edit</button></li>
              <form action="/shortsize/admin/karyawan/{{ $user->id }}" method="post">
              @csrf
              @method('DELETE')
                <li><button class="dropdown-item" type="submit">Delete</button></li>
              </form>
            </ul>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal -->
<form method="POST">
  @csrf
  <div class="modal fade" id="tambahKaryawan" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-light">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Tambah karyawan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row justify-content-center gap-3">
            <div class="col-md-5">
              <div class="fw-bold ms-1 mb-1">Nama Lengkap</div>
              <input type="text" name="nama" class="form-control mb-3" id="nama" placeholder="fullname">

              <div class="fw-bold ms-1 mb-1">NIK</div>
              <input type="text" name="nik" class="form-control mb-3" id="nik" placeholder="NIK">

              <div class="fw-bold ms-1 mb-1">Kata Sandi</div>
              <input type="password" name="password" class="form-control mb-3" id="password" placeholder="password">

              <div class="fw-bold ms-1 mb-1">Jabatan</div>
              <select class="form-select mb-3" name="jabatan" id="jabatan">
                <option value="operator">Operator</option>
                <option value="supervisor">Supervisor</option>
                <option value="manager">Manager</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            
            <div class="col-md-5">
                <div class="fw-bold ms-1 mb-1">Grup</div>
                  <select class="form-select mb-3" name="grup" id="grup">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                  </select>

                <div id="line">
                  <div class="fw-bold ms-1 mb-1">Line</div>
                  @for ($i = 1; $i <= 5; $i++)
                  <input type="radio" class="btn-check" name="line" value="{{ $i }}" id="line{{ $i }}">
                  <label class="btn btn-outline-success mb-3" for="line{{ $i }}" style="width: 3rem">{{ $i }}</label>  
                  @endfor
                </div>

                <div class="fw-bold ms-1 mb-1">Bagian</div>
                <select class="form-select mb-3" name="bagian" id="bagian">
                  <option value="1">Splicer</option>
                  <option value="2">Building</option>
                  <option value="3">Covering</option>
                  <option value="4">Curing</option>
                </select>
              
                <div class="fw-bold ms-1 mb-1">Nomor Mesin</div>
                <input type="number" class="form-control" name="noMesin" id="noMesin" min="1" max="20" value="0" style="width: 5rem">
              </div>
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</form>

<script>
  $(document).ready(function(){
  $("#cariData").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tbKaryawan tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

  let nama = document.getElementById('nama');
  let nik = document.getElementById('nik');
  let pass = document.getElementById('password');
  let pass2 = document.getElementById('password2');
  let jabatan = document.getElementById('jabatan');
  let grup = document.getElementById('grup');
  let line = document.getElementsByName('line');
  let bagian = document.getElementById('bagian');
  let noMesin = document.getElementById('noMesin');

  function clearLine() {
    for (var i = 0; i < line.length; i++) {
      line[i].checked = false;
    }
  }

  function disableLine(){
    for (var i = 0; i < line.length; i++) {
      line[i].disabled = true;
    }
  }

  function enableLine() {
    for (var i = 0; i < line.length; i++) {
      line[i].disabled = false;
    }
  }

  function disableAll() {
    grup.disabled = true;
    bagian.disabled = true;
    noMesin.disabled = true;
    disableLine()
  }

  function enableAll() {
    grup.disabled = false;
    bagian.disabled = false;
    noMesin.disabled = false;
    enableLine()
  }

  document.getElementById('tambah').addEventListener('click', () => {
    nama.value = null;
    nik.value = null;
    pass.value = null;
    noMesin.value = null;
    jabatan.selectedIndex = -1;
    grup.selectedIndex = -1;
    bagian.selectedIndex = -1;
    clearLine();
    disableAll()
  });

  jabatan.addEventListener('change', () => {
    switch (jabatan.value) {
      case 'manager':
      case 'admin':
        disableAll();
      break;
      case 'supervisor':
        disableAll();
        grup.disabled = false;
      break;
      default:
        enableAll();
      break;
}
  });
</script>

@endsection