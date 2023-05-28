@extends('layout.main')

@section('container')
 
<div class="row px-3 gap-3">
  <div class="col-lg-3 p-2 bg-light shadow-sm rounded">

    <div class="text-center"><b>UCR</b></div>
    <hr style="margin-top: 0">

    <input type="radio" class="btn-check" name="ucr" value="GM25" id="gm25">
    <label class="btn btn-outline-success mb-1" style="width: 5.3rem" for="gm25">GM25</label>
    <input type="radio" class="btn-check" name="ucr" value="GM27" id="gm27">
    <label class="btn btn-outline-success mb-1" style="width: 5.3rem" for="gm27">GM27</label>
    <input type="radio" class="btn-check" name="ucr" value="GR95" id="gr95">
    <label class="btn btn-outline-success mb-1" style="width: 5.3rem" for="gr95">GR95</label>
    <input type="radio" class="btn-check" name="ucr" value="UN111" id="un111">
    <label class="btn btn-outline-success mb-1" style="width: 5.3rem" for="un111">UN111</label>

    <div class="input-group rounded mt-2" style="width: 16rem">
      <span class="input-group-text">No. Lot</span>
      <input type="text" id="ucrLot" class="form-control" value="" disabled>
    </div>

    <div class="input-group rounded mt-2" style="width: 16rem">
      <span class="input-group-text">Operator splicer</span>
      <select class="form-select" id="splicerOperator">
        <option value="1A1230323">Marjikun</option>
        <option value="1B2150323">Santoso</option>
        <option value="1C3161723">Group C</option>
      </select>
    </div>
  </div>

  <div class="col-lg-5 p-2 bg-light shadow-sm rounded">
    <div class="row">
      <div class="col">

        <div class="text-center"><b>ADR</b></div>
        <hr style="margin-top: 0">
    
        <input type="radio" class="btn-check" name="adr" value="2A1130323-4" id="an220">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="an220">AN220</label>

        <input type="radio" class="btn-check" name="adr" value="1B2210323-5" id="gm70">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="gm70">GM70</label>

        <input type="radio" class="btn-check" name="adr" value="1B2210323-5" id="gm868">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="gm868">GM868</label>

        <input type="radio" class="btn-check" name="adr" value="2C3240323-2" id="gr41">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="gr41">GR41</label>

        <div class="input-group rounded mt-2">
          <span class="input-group-text">No. Lot</span>
          <input type="text" id="lotadr" class="form-control" value="" disabled>
          <i class="bx bx-repost bx-sm btn btn-secondary"></i>
        </div>

        <div class="input-group rounded mt-2 mb-3" style="width: 11rem">
          <span class="input-group-text">Cek Tebal</span>
          <input type="number" class="form-control" step=".1" min="0" max="2" value="0.6">
        </div>
      </div>

      <div class="col">
        <div class="text-center"><b>OCR/GM829</b></div>
        <hr style="margin-top: 0">

        <input type="radio" class="btn-check" name="ocr" value="2A1130323-4" id="ocr">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="ocr">OCR</label>
        <input type="radio" class="btn-check" name="ocr" value="1B2210323-5" id="gm829">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="gm829">GM829</label>
        <input type="radio" class="btn-check" name="ocr" id="gapake">
        <label class="btn btn-outline-danger mb-1" for="gapake">tidak pakai</label>

        <div class="input-group rounded mt-2">
          <span class="input-group-text">No. Lot</span>
          <input type="text" id="lotocr" class="form-control" value="2A2300323-20" disabled>
          <i class="bx bx-repost bx-sm btn btn-secondary"></i>
        </div>

        <div class="input-group rounded mt-2" style="width: 11rem">
          <span class="input-group-text">Cek Tebal</span>
          <input type="number" class="form-control" step=".1" min="0" max="2" value="1.4">
        </div>
      </div>
    </div>   
  </div>

  <div class="col p-2 bg-light shadow-sm rounded">
    <div class="text-center"><b>CORD</b></div>
    <hr style="margin-top: 0">

      <div>
        <input type="radio" class="btn-check" name="cord" value="212gj" id="212gj">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="212gj">212 GJ</label>
        <input type="radio" class="btn-check" name="cord" value="212gj" id="213gj">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="213gj">213 GJ</label>
        <input type="radio" class="btn-check" name="cord" value="212gj" id="223gj">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="223gj">223 GJ</label>
        <input type="radio" class="btn-check" name="cord" value="212gj" id="2x5gj">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="2x5gj">2x5 GJ</label>
        <input type="radio" class="btn-check" name="cord" value="212gj" id="401gj">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="401gj">401 GJ</label>
      </div>

      <div>
        <input type="radio" class="btn-check" name="cord" value="212gj" id="212gm">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="212gm">212 GM</label>
        <input type="radio" class="btn-check" name="cord" value="212gj" id="213gm">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="213gm">213 GM</label>
        <input type="radio" class="btn-check" name="cord" value="212gj" id="223gm">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="223gm">223 GM</label>
        <input type="radio" class="btn-check" name="cord" value="212gj" id="244gm">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="244gm">244 GM</label>
        <input type="radio" class="btn-check" name="cord" value="212gj" id="247gm">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="247gm">247 GM</label>
      </div>

      <div class="col-md-9">
        <div class="input-group rounded mt-2">
          <span class="input-group-text">No. Lot</span>
          <input type="text" id="lotcord" class="form-control" value="" disabled>
          <i class="bx bx-repost bx-sm btn btn-secondary"></i>
        </div>

        <div class="d-flex gap-2 mt-2">
          <div class="input-group rounded">
            <span class="input-group-text">Pitch</span>
            <select class="form-select">
              <option value="1">1.12</option>
              <option value="2">1.43</option>
              <option value="3">1.72</option>
              <option value="3">2.01</option>
            </select>
            {{-- <input type="radio" class="btn-check" name="pitch" value="1.12" id="112">
            <label class="btn btn-outline-secondary" for="112" style="width: 3.2rem">1.12</label>
            <input type="radio" class="btn-check" name="pitch" value="1.43" id="143">
            <label class="btn btn-outline-secondary" for="143" style="width: 3.2rem">1.43</label>
            <input type="radio" class="btn-check" name="pitch" value="1.72" id="172">
            <label class="btn btn-outline-secondary" for="172" style="width: 3.2rem">1.72</label>
            <input type="radio" class="btn-check" name="pitch" value="2.01" id="201">
            <label class="btn btn-outline-secondary" for="201" style="width: 3.2rem">2.01</label> --}}
          </div>

        <div class="input-group rounded">
          <span class="input-group-text">Tension</span>
          <input type="number" class="form-control" step=".1" min="0" max="3" value="1.5">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-light p-2 shadow-sm rounded mt-3">

  <div class="d-flex gap-1 justify-content-between">
    <div class="input-group" style="width: 20rem">
      <input type="text" id="ppcInput" class="form-control me-1" placeholder="Input no. PPC" autofocus>
      <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalInput" id="buttonInput" onclick="clearModal()">Input</button>
    </div>
    <div class="nav nav-underline justify-content-center">
      <button class="nav-link text-dark active" id="navLaporan">Laporan</button>
      <button class="nav-link text-dark" id="navInspeksi">Inspeksi</button>
      <button class="nav-link text-dark" id="navCatatan">Catatan</button>
    </div>
    <input type="text" id="cariData" class="form-control" placeholder="cari data..." style="width: 20rem">
  </div>

  <table class="table bg-white table-striped table-bordered border-dark-subtle mt-3" id="tbLaporan">
    <thead class="bg-secondary-subtle text-center">
      <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Time</th>
        <th rowspan="2">PPC no.</th>
        <th rowspan="2">Spec</th>
        <th rowspan="2">Type<br>Size</th>
        <th rowspan="2">UCR<br>lot</th>
        <th rowspan="2">Cord<br>lot</th>
        <th rowspan="2">ADR<br>lot</th>
        <th rowspan="2">OCR<br>lot</th>
        <th colspan="6">Pcs Slab</th>
        <th colspan="2">Total</th>
      </tr>
      <tr>
        <th>1</th> <th>2</th> <th>3</th> <th>4</th> <th>5</th> <th>6</th> <th>pcs</th> <th>Slab</th>
      </tr>
    </thead>
    <tbody class="align-middle bg-white text-center">
      <tr class="align-middle">
        <td>1</td> <td>2:30</td> <td>2321244312</td> <td>AJGG</td> <td>B<br>65</td>
        <td>GR95</td> <td>212 GJ<br><a href="#">2C1240433-2<a></td> <td>GR41<br><a href="#">2C1240433-2</a></td> <td>GR41<br><a href="#">2C1240433-2</a></td>
        <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>400</td> <td>5</td>
      </tr>
    </tbody>
  </table>

  <table class="table bg-white table-striped table-bordered border-dark-subtle mt-3" id="tbInspeksi" style="display: none">
    <thead class="bg-secondary-subtle text-center">
      <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Spec</th>
        <th rowspan="2">Type<br>Size</th>
        <th rowspan="2">UCR</th>
        <th rowspan="2">Cord</th>
        <th rowspan="2">ADR</th>
        <th rowspan="2">OCR</th>
        <th colspan="4">Tebal Cores</th>
        <th colspan="4">Lebar Cores</th>
        <th colspan="4">Panjang Cores</th>
      </tr>
      <tr>
        <th>std</th> <th>n1</th> <th>n2</th> <th>n3</th> <th>std</th> <th>n1</th> <th>n2</th> <th>n3</th> <th>std</th> <th>n1</th> <th>n2</th> <th>n3</th>
      </tr>
    </thead>
    <tbody class="align-middle bg-white text-center">
      <tr>
        <td>1</td> <td>AJGG</td> <td>B<br>65</td>
        <td>GR95<br>5.9</td> <td>212 GJ</td> <td>GR41</td> <td>-</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td></td> <td>400</td> <td>5</td>
      </tr>
    </tbody>
  </table>

  <div class="d-flex justify-content-end">
      <div class="input-group rounded me-3" style="width: 10rem">
        <span class="input-group-text">total pcs</span>
        <input type="text" class="form-control bg-body-secondary" value="1000">
      </div>
      <div class="input-group rounded" style="width: 10rem">
        <span class="input-group-text">total slab</span>
        <input type="text" class="form-control bg-body-secondary" value="34">
      </div>
  </div>
    <div class="d-flex justify-content-end mt-3"><button class="btn btn-primary" type="button" id="button" style="width: 10rem"><b>Kumpulkan laporan</b></button></div>
</div>

      <!-- MODAL -->
<div class="modal" id="modalInput" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row px-5">
          <table class="table table-bordered border-dark">
            <thead class="text-center bg-success-subtle">
              <th>spec</th><th>type</th><th>size</th><th>Prod Req</th>
            </thead>
            <tbody class="text-center">
            <td>AJGG</td><td>B</td><td>65</td><td>40</td>
            </tbody>
          </table>
        </div>

        <div class="row">
          <div class="col py-2">
            <div class="fw-bold text-center">jumlah kartu</div>
            <div class="d-flex justify-content-center gap-2">
              <div class="input-group" style="width: 12rem">
                <input type="text" class="form-control">
                <span class="input-group-text">-</span>
                <input type="text" class="form-control">
                <span class="input-group-text">/</span>
                <input type="text" class="form-control">
              </div>
            </div>

            <div class="fw-bold text-center mt-3">Ukur Mandrel</div>
            <div class="d-flex justify-content-center gap-2 mt-1">
              <div class="input-group" style="width: 8rem">
                <span class="input-group-text">std</span>
                <input type="text" class="form-control" value="123" disabled>
              </div>
                <input type="text" class="form-control text-center" placeholder="hasil ukur" style="width: 6rem">
            </div>

            <div class="fw-bold text-center mt-3">Slab</div>
            <div class="d-flex justify-content-center gap-2 mt-1">
              <input type="radio" class="btn-check" name="slab" value="1" id="slab1">
              <label class="btn btn-outline-primary" for="slab1" style="width: 3.2rem">1</label>
              <input type="radio" class="btn-check" name="slab" value="2" id="slab2">
              <label class="btn btn-outline-primary" for="slab2" style="width: 3.2rem">2</label>
              <input type="radio" class="btn-check" name="slab" value="3" id="slab3">
              <label class="btn btn-outline-primary" for="slab3" style="width: 3.2rem">3</label>
              <input type="radio" class="btn-check" name="slab" value="4" id="slab4">
              <label class="btn btn-outline-primary" for="slab4" style="width: 3.2rem">4</label>
              <input type="radio" class="btn-check" name="slab" value="5" id="slab5">
              <label class="btn btn-outline-primary" for="slab5" style="width: 3.2rem">5</label>
              <input type="radio" class="btn-check" name="slab" value="6" id="slab6">
              <label class="btn btn-outline-primary" for="slab6" style="width: 3.2rem">6</label>
            </div>
            
            <div class="fw-bold text-center mt-3">Pcs Per Slab</div>
            <div class="d-flex justify-content-center gap-2 mt-1">
              <input type="text" class="form-control" id="pcs1" value="" style="width: 3.2rem">
              <input type="text" class="form-control" id="pcs2" value="" style="width: 3.2rem">
              <input type="text" class="form-control" id="pcs3" value="" style="width: 3.2rem">
              <input type="text" class="form-control" id="pcs4" value="" style="width: 3.2rem">
              <input type="text" class="form-control" id="pcs5" value="" style="width: 3.2rem">
              <input type="text" class="form-control" id="pcs6" value="" style="width: 3.2rem">
            </div>

          </div>
          <div class="col py-2">
            <div class="fw-bold text-center">Tebal cores</div>
            <div class="d-flex justify-content-center gap-2 mt-1">
              <div class="input-group" style="width: 7rem">
                <span class="input-group-text">std</span>
                <input type="text" class="form-control" value="123" disabled>
              </div>
              <input type="text" id="tebal1" class="form-control text-center" value="" placeholder="n1" style="width: 4rem">
              <input type="text" id="tebal2" class="form-control text-center" value="" placeholder="n2" style="width: 4rem">
              <input type="text" id="tebal3" class="form-control text-center" value="" placeholder="n3" style="width: 4rem">
            </div>
            <div class="fw-bold text-center mt-3">Lebar potong</div>
            <div class="d-flex justify-content-center gap-2 mt-1">
              <div class="input-group" style="width: 7rem">
                <span class="input-group-text">std</span>
                <input type="text" class="form-control" value="1234" disabled>
              </div>
              <input type="text" id="lebar1" class="form-control text-center" value="" placeholder="n1" style="width: 4rem">
              <input type="text" id="lebar2" class="form-control text-center" value="" placeholder="n2" style="width: 4rem">
              <input type="text" id="lebar3" class="form-control text-center" value="" placeholder="n3" style="width: 4rem">
            </div>
            <div class="fw-bold text-center mt-3">Panjang cores</div>
            <div class="d-flex justify-content-center gap-2 mt-1">
              <div class="input-group" style="width: 7rem">
                <span class="input-group-text">std</span>
                <input type="text" class="form-control" value="123" disabled>
              </div>
              <input type="text" id="panjang1" class="form-control text-center" value="" placeholder="n1" style="width: 4rem">
              <input type="text" id="panjang2" class="form-control text-center" value="" placeholder="n2" style="width: 4rem">
              <input type="text" id="panjang3" class="form-control text-center" value="" placeholder="n3" style="width: 4rem">
            </div>
            <div class="fw-bold text-center mt-3">Afkir</div>
            <div class="d-flex justify-content-center gap-2 mt-1">
              <input type="text" class="form-control text-center" id="afkir" value="" placeholder="pcs" style="width: 4rem">
              <select class="form-select" style="width: 12rem">
                <option selected>keterangan afkir</option>
                <option value="1">UCR pendek</option>
                <option value="2">joint cord</option>
                <option value="3">ADR melipat</option>
                <option value="4">joint UCR lepas</option>
                <option value="5">lain-lain</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $("#cariData").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tbLaporan tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
  
  // function untuk fokus ke ppc
  function ppcFocus() {
    document.getElementById('ppcInput').focus()
  }

  // setiap radio button di klik, fokus ke ppc input
  const radioButtons = document.querySelectorAll('input[type="radio"]');
  radioButtons.forEach(radioButton => {
    radioButton.addEventListener('click', () => {
      ppcFocus();
    });
  });
  
  //tampilkan no lot UCR
  document.getElementById("splicerOperator").addEventListener("change", () => {
    document.getElementById("ucrLot").value = document.getElementById("splicerOperator").value;
  });
  //tampilkan no lot ADR
  function lotAdr() {
  let selectedRadio = document.querySelector('input[name="adr"]:checked').value;
  document.getElementById("lotadr").value = selectedRadio;
  }
  //tampilkan no lot OCR/GM829
  function lotOcr() {

  }
  //tampilkan no lot CORD
  function lotCord() {
    let selectedRadio = document.querySelector('input[name="cord"]:checked').value;
    document.getElementById("lotcord").value = selectedRadio;
  }
  
  //tab untuk switch table laporan dan table inspeksi
  document.getElementById('navLaporan').addEventListener('click', () => {
    document.getElementById('tbLaporan').style.display = 'table';
    document.getElementById('tbInspeksi').style.display = 'none';
    document.getElementById('navLaporan').classList.add('active');
    document.getElementById('navInspeksi').classList.remove('active');
  });
  document.getElementById('navInspeksi').addEventListener('click', () => {
    document.getElementById('tbInspeksi').style.display = 'table';
    document.getElementById('tbLaporan').style.display = 'none';
    document.getElementById('navInspeksi').classList.add('active');
    document.getElementById('navLaporan').classList.remove('active');
  });
  
  // MODALS
  const slabs = 6
  //setiap jumlah slab di klik, pcs slab otomatis terisi
  for (let i = 1; i <= slabs; i++) {
    document.getElementById('slab' + i).addEventListener('click', () => {
      for (let x = 1; x <= slabs; x++) {
        document.getElementById('pcs' + x).value = x <= i ? 80 : null;
      };
      document.getElementById('pcs' + i).focus();
    });
  }
  //hapus radio button slab dan pcs value
  function clearModal() {
    for (let i = 1; i <= slabs; i++) {
      document.getElementById('slab' + i).checked = false;
      document.getElementById('pcs' + i).value = null;
    }
    for (let i = 1; i <= 3; i++) {
      document.getElementById('tebal' + i).value = null;   
      document.getElementById('lebar' + i).value = null;   
      document.getElementById('panjang' + i).value = null;   
    }
  }
  </script>
          
@endsection