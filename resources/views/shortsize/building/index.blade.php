@extends('layout.main')

@section('container')
 
<form action="{{ route('building') }}" method="POST">
  @csrf
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
    
    <div class="input-group mt-2" style="width: 16rem">
      <span class="input-group-text">Operator splicer</span>
      <select class="form-select" id="splicerOperator">
        <option value="1A1230323">Marjikun</option>
        <option value="1B2150323">Santoso</option>
        <option value="1C3161723">Nurwanto</option>
      </select>
    </div>
    
    <div class="input-group mt-2" style="width: 16rem">
      <span class="input-group-text">No. Lot</span>
      <input type="text" name="ucrLot" id="ucrLot" class="form-control">
    </div>
  </div>

  <div class="col-lg-5 p-2 bg-light shadow-sm rounded">
    <div class="row">
      <div class="col">

        <div class="text-center"><b>ADR</b></div>
        <hr style="margin-top: 0">
    
        <input type="radio" class="btn-check" name="adr" value="{{ $material[0]->lot }}AN220" id="an220">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="an220">AN220</label>
        <input type="radio" class="btn-check" name="adr" value="{{ $material[1]->lot }}GM70" id="gm70">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="gm70">GM70</label>
        <input type="radio" class="btn-check" name="adr" value="{{ $material[2]->lot }}GM868" id="gm868">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="gm868">GM868</label>
        <input type="radio" class="btn-check" name="adr" value="{{ $material[3]->lot }}GR41" id="gr41">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="gr41">GR41</label>

        <div class="input-group mt-2">
          <span class="input-group-text">No. Lot</span>
          <input type="text" name="adrLot" id="adrLot" class="form-control">
          <i class="bx bx-repost bx-sm btn btn-secondary"></i>
        </div>

        <div class="input-group mt-2 mb-3" style="width: 11rem">
          <span class="input-group-text">Cek Tebal</span>
          <input type="number" name="adrTebal" class="form-control" step=".1" min="0" max="2" value="0.6">
        </div>
      </div>

      <div class="col">
        <div class="text-center"><b>OCR/GM829</b></div>
        <hr style="margin-top: 0">

        <input type="radio" class="btn-check" name="ocr" value="{{ $material[4]->lot }}" id="ocr">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="ocr">OCR</label>
        <input type="radio" class="btn-check" name="ocr" value="{{ $material[5]->lot }}" id="gm829">
        <label class="btn btn-outline-success mb-1" style="width: 4.6rem" for="gm829">GM829</label>
        <input type="radio" class="btn-check" name="ocr" value="" id="gapake">
        <label class="btn btn-outline-danger mb-1" for="gapake">tidak pakai</label>

        <div class="input-group mt-2">
          <span class="input-group-text">No. Lot</span>
          <input type="text" name="ocrLot" id="ocrLot" class="form-control">
          <i class="bx bx-repost bx-sm btn btn-secondary"></i>
        </div>

        <div class="input-group mt-2" style="width: 11rem">
          <span class="input-group-text">Cek Tebal</span>
          <input type="number" name="ocrTebal" class="form-control" step=".1" min="0" max="2" value="1.4">
        </div>
      </div>
    </div>   
  </div>

  <div class="col p-2 bg-light shadow-sm rounded">
    <div class="text-center"><b>CORD</b></div>
    <hr style="margin-top: 0">

      <div>
        <input type="radio" class="btn-check" name="cord" value="{{ $material[6]->lot }}212GJ" id="212gj">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="212gj">212 GJ</label>
        <input type="radio" class="btn-check" name="cord" value="{{ $material[7]->lot }}213GJ" id="213gj">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="213gj">213 GJ</label>
        <input type="radio" class="btn-check" name="cord" value="{{ $material[8]->lot }}223GJ" id="223gj">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="223gj">223 GJ</label>
        <input type="radio" class="btn-check" name="cord" value="{{ $material[9]->lot }}2x5GJ" id="2x5gj">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="2x5gj">2x5 GJ</label>
        <input type="radio" class="btn-check" name="cord" value="{{ $material[10]->lot }}401GJ" id="401gj">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="401gj">401 GJ</label>
        <input type="radio" class="btn-check" name="cord" value="{{ $material[11]->lot }}212GM" id="212gm">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="212gm">212 GM</label>
        <input type="radio" class="btn-check" name="cord" value="{{ $material[12]->lot }}213GM" id="213gm">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="213gm">213 GM</label>
        <input type="radio" class="btn-check" name="cord" value="{{ $material[13]->lot }}223GM" id="223gm">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="223gm">223 GM</label>
        <input type="radio" class="btn-check" name="cord" value="{{ $material[14]->lot }}244GM" id="244gm">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="244gm">244 GM</label>
        <input type="radio" class="btn-check" name="cord" value="{{ $material[15]->lot }}247GM" id="247gm">
        <label class="btn btn-outline-success mb-1" style="width: 5.5rem" for="247gm">247 GM</label>
      </div>

      <div class="col-md-9">
        <div class="input-group mt-2">
          <span class="input-group-text">No. Lot</span>
          <input type="text" name="cordLot" id="cordLot" class="form-control" readonly>
          <i class="bx bx-repost bx-sm btn btn-secondary" id="gantiCord" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
        </div>

        <div class="d-flex gap-2 mt-2">
          <div class="input-group">
            <span class="input-group-text">Pitch</span>
            <select class="form-select" name="cordPitch">
              <option value="1.12">1.12</option>
              <option value="1.43">1.43</option>
              <option value="1.72">1.72</option>
              <option value="2.01">2.01</option>
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

        <div class="input-group">
          <span class="input-group-text">Tension</span>
          <input type="number" class="form-control" name="cordTension" step=".1" min="0" max="3" value="1.5">
        </div>
      </div>
    </div>
  </div>
</div>

{{-- MODAL --}}
<div class="modal fade" id="modalInput" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h1 class="modal-title fs-5 mx-auto" id="modalTitle">Modal title</h1>
      </div>
      <div class="modal-body">
        <div class="row px-5">
          <table class="table table-bordered">
            <thead class="text-center table-success">
              <th>spec</th><th>type</th><th>size</th><th>Prod Req</th>
            </thead>
            <tbody class="text-center">
            <td>AJGG</td><td>B</td><td>65</td><td>40</td>
            </tbody>
          </table>
        </div>

        <div class="row" id="modalInput">
          <div class="col border-end">
            <div class="fw-bold text-center">jumlah kartu</div>
            <div class="d-flex justify-content-center gap-2">
              <div class="input-group" style="width: 12rem">
                <input type="text" name="kartu1" class="form-control">
                <span class="input-group-text">-</span>
                <input type="text" name="kartu2" class="form-control">
                <span class="input-group-text">/</span>
                <input type="text" name="kartu3" class="form-control">
              </div>
            </div>

            <div class="fw-bold text-center mt-3">Ukur Mandrel</div>
            <div class="d-flex justify-content-center gap-2 mt-1">
              <div class="input-group" style="width: 8rem">
                <span class="input-group-text">std</span>
                <input type="text" class="form-control" value="123" disabled>
              </div>
                <input type="text" class="form-control text-center" name="ukurMandrel" placeholder="hasil ukur" style="width: 6rem">
            </div>

            <div class="fw-bold text-center mt-3">Slab</div>
            <div class="d-flex gap-2 mt-1">
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
              <input type="radio" class="btn-check" name="slab" value="0" id="slab0">
              <label class="btn btn-outline-primary" for="slab0" style="width: 3.2rem">0</label>
            </div>
            
            <div class="fw-bold text-center mt-3">Pcs Per Slab</div>
            <div class="d-flex gap-2 mt-1">
              <input type="text" class="form-control" name="pcs1" id="pcs1" style="width: 3.2rem">
              <input type="text" class="form-control" name="pcs2" id="pcs2" style="width: 3.2rem">
              <input type="text" class="form-control" name="pcs3" id="pcs3" style="width: 3.2rem">
              <input type="text" class="form-control" name="pcs4" id="pcs4" style="width: 3.2rem">
              <input type="text" class="form-control" name="pcs5" id="pcs5" style="width: 3.2rem">
              <input type="text" class="form-control" name="pcs6" id="pcs6" style="width: 3.2rem">
            </div>

          </div>
          <div class="col">
            <div class="fw-bold text-center">Tebal cores</div>
            <div class="d-flex justify-content-center gap-2 mt-1">
              <div class="input-group" style="width: 7rem">
                <span class="input-group-text">std</span>
                <input type="text" class="form-control" value="123" disabled>
              </div>
              <input type="text" name="tebal1" id="tebal1" class="form-control text-center" placeholder="n1" style="width: 4rem">
              <input type="text" name="tebal2" id="tebal2" class="form-control text-center" placeholder="n2" style="width: 4rem">
              <input type="text" name="tebal3" id="tebal3" class="form-control text-center" placeholder="n3" style="width: 4rem">
            </div>
            <div class="fw-bold text-center mt-3">Lebar potong</div>
            <div class="d-flex justify-content-center gap-2 mt-1">
              <div class="input-group" style="width: 7rem">
                <span class="input-group-text">std</span>
                <input type="text" class="form-control" value="1234" disabled>
              </div>
              <input type="text" name="lebar1" id="lebar1" class="form-control text-center" placeholder="n1" style="width: 4rem">
              <input type="text" name="lebar2" id="lebar2" class="form-control text-center" placeholder="n2" style="width: 4rem">
              <input type="text" name="lebar3" id="lebar3" class="form-control text-center" placeholder="n3" style="width: 4rem">
            </div>
            <div class="fw-bold text-center mt-3">Panjang cores</div>
            <div class="d-flex justify-content-center gap-2 mt-1">
              <div class="input-group" style="width: 7rem">
                <span class="input-group-text">std</span>
                <input type="text" class="form-control" value="123" disabled>
              </div>
              <input type="text" name="panjang1" id="panjang1" class="form-control text-center" placeholder="n1" style="width: 4rem">
              <input type="text" name="panjang2" id="panjang2" class="form-control text-center" placeholder="n2" style="width: 4rem">
              <input type="text" name="panjang3" id="panjang3" class="form-control text-center" placeholder="n3" style="width: 4rem">
            </div>
            <div class="d-flex justify-content-center">
              <button class="btn btn-sm btn-secondary mt-5" type="button" data-bs-toggle="collapse" href="#collapseExample" style="width: 15rem">Afkir</button>
            </div>
          </div>
          <div class="row collapse mt-3 ms-4" id="collapseExample">
            <div class="input-group mt-2" style="width: 15rem">
              <span class="input-group-text" style="width: 10rem">UCR pendek</span>
              <input type="text" class="form-control text-center" name="afkir1" placeholder="pcs">
            </div>
            <div class="input-group mt-2" style="width: 15rem">
              <span class="input-group-text" style="width: 10rem">Joint Cord</span>
              <input type="text" class="form-control text-center" name="afkir2" placeholder="pcs">
            </div>
            <div class="input-group mt-2" style="width: 15rem">
              <span class="input-group-text" style="width: 10rem">ADR melipat</span>
              <input type="text" class="form-control text-center" name="afkir3" placeholder="pcs">
            </div>
            <div class="input-group mt-2" style="width: 15rem">
              <span class="input-group-text" style="width: 10rem">Joint UCR lepas</span>
              <input type="text" class="form-control text-center" name="afkir4" placeholder="pcs">
            </div>
            <div class="input-group mt-2" style="width: 15rem">
              <span class="input-group-text" style="width: 10rem">Tebal/tipis</span>
              <input type="text" class="form-control text-center" name="afkir5" placeholder="pcs">
            </div>
            <div class="input-group mt-2" style="width: 15rem">
              <span class="input-group-text" style="width: 10rem">Longgar/sempit</span>
              <input type="text" class="form-control text-center" name="afkir6" placeholder="pcs">
            </div>
            <div class="input-group mt-2" style="width: 15rem">
              <span class="input-group-text" style="width: 10rem">Lainnya</span>
              <input type="text" class="form-control text-center" name="afkir7" placeholder="pcs">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>

<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body rounded bg-light">
        <form action="{{ route('gantiCord') }}" method="post">
          @csrf
          <div class="input-group">
            <input type="text" class="form-control me-1" id="inputCord" name="code" placeholder="masukan barcode">
            <button class="btn btn-primary" type="submit">Ganti Lot</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- table --}}
<div class="bg-light p-2 shadow-sm rounded mt-3">

  <div class="d-flex gap-1 justify-content-between">
    <div class="input-group" style="width: 20rem">
      <input type="text" id="inputPpc" class="form-control me-1" placeholder="Input no. PPC" autofocus>
      <button class="btn btn-primary" type="button" id="buttonInput" data-bs-toggle="modal" data-bs-target="#modalInput" onclick="clearModal()">Input</button>
    </div>
    <div class="nav nav-underline justify-content-center">
      <button class="nav-link text-dark active" id="navLaporan">Laporan</button>
      <button class="nav-link text-dark" id="navInspeksi">Inspeksi</button>
      <button class="nav-link text-dark" id="navCatatan">Catatan</button>
    </div>
    <input type="text" id="cariData" class="form-control" placeholder="cari data..." style="width: 20rem">
  </div>

  <table class="table table-striped table-bordered border-dark-subtle mt-3" id="tbLaporan">
    <thead class="text-center">
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
    <tbody class="align-middle bg-white text-center table-group-divider">
      <tr class="align-middle">
        <td>1</td> <td>2:30</td> <td>2321244312</td> <td>AJGG</td> <td>B<br>65</td>
        <td>GR95</td> <td>212 GJ<br><a href="#">2C1240433-2<a></td> <td>GR41<br><a href="#">2C1240433-2</a></td> <td>GR41<br><a href="#">2C1240433-2</a></td>
        <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>400</td> <td>5</td>
      </tr>
      <tr class="align-middle">
        <td>2</td> <td>2:30</td> <td>2321244312</td> <td>AJGG</td> <td>B<br>65</td>
        <td>GR95</td> <td>212 GJ<br><a href="#">2C1240433-2<a></td> <td>GR41<br><a href="#">2C1240433-2</a></td> <td>GR41<br><a href="#">2C1240433-2</a></td>
        <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>400</td> <td>5</td>
      </tr>
      <tr class="align-middle">
        <td>3</td> <td>2:30</td> <td>2321244312</td> <td>AJGG</td> <td>B<br>65</td>
        <td>GR95</td> <td>212 GJ<br><a href="#">2C1240433-2<a></td> <td>GR41<br><a href="#">2C1240433-2</a></td> <td>GR41<br><a href="#">2C1240433-2</a></td>
        <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>400</td> <td>5</td>
      </tr>
    </tbody>
  </table>

  <table class="table table-striped table-bordered border-dark-subtle mt-3 d-none" id="tbInspeksi">
    <thead class="text-center">
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
    <tbody class="align-middle text-center table-group-divider">
      <tr>
        <td>1</td> <td>AJGG</td> <td>B<br>65</td>
        <td>GR95<br>5.9</td> <td>212 GJ</td> <td>GR41</td> <td>-</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td>80</td> <td></td> <td>400</td> <td>5</td>
      </tr>
    </tbody>
  </table>

  <div class="form-floating my-3 mx-auto d-none" id="catatan" style="width: 25rem">
    <textarea class="form-control" name="catatan" style="height: 200px"></textarea>
    <label for="floatingTextarea2">Catatan produksi</label>
  </div>

  <div class="d-flex justify-content-end">
      <div class="input-group me-3" style="width: 10rem">
        <span class="input-group-text">total pcs</span>
        <input type="text" class="form-control bg-body-secondary" value="1000">
      </div>
      <div class="input-group" style="width: 10rem">
        <span class="input-group-text">total slab</span>
        <input type="text" class="form-control bg-body-secondary" value="34">
      </div>
  </div>
    <div class="d-flex justify-content-end mt-3">
      <button class="btn btn-primary" type="button" style="width: 10rem"><b>Kumpulkan laporan</b></button>
    </div>
</div>

<script>
$(document).ready(function(){
  //live search table laporan
  $("#cariData").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tbLaporan tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  //tab untuk switch table laporan, table inspeksi dan catatan
  $('#navLaporan').on('click', function() {
    $('#navLaporan').addClass('active');
    $('#tbLaporan').removeClass('d-none');
    $('#navInspeksi').removeClass('active');
    $('#tbInspeksi').addClass('d-none');
    $('#navCatatan').removeClass('active');
    $('#catatan').addClass('d-none');
  });
  $('#navInspeksi').on('click', function() {
    $('#navLaporan').removeClass('active');
    $('#tbLaporan').addClass('d-none');
    $('#navInspeksi').addClass('active');
    $('#tbInspeksi').removeClass('d-none');
    $('#navCatatan').removeClass('active');
    $('#catatan').addClass('d-none');
  });
  $('#navCatatan').on('click', function() {
    $('#navLaporan').removeClass('active');
    $('#tbLaporan').addClass('d-none');
    $('#navInspeksi').removeClass('active');
    $('#tbInspeksi').addClass('d-none');
    $('#navCatatan').addClass('active');
    $('#catatan').removeClass('d-none');
  });
});
  
  // function untuk fokus ke ppc
  function ppcFocus() {
    document.getElementById('inputPpc').focus()
  }

  // setiap radio button di klik, fokus ke ppc input
  // const radioButtons = document.querySelectorAll('input[type="radio"]');
  // radioButtons.forEach(radioButton => {
  //   radioButton.addEventListener('click', () => {
  //     ppcFocus();
  //   });
  // });
  
  //tampilkan no lot UCR
  document.getElementById("splicerOperator").addEventListener("change", () => {
    document.getElementById("ucrLot").value = document.getElementById("splicerOperator").value;
  });
  
  //tampilkan no lot ADR
  const radioAdr = document.querySelectorAll('input[name="adr"]');
  radioAdr.forEach(adr => {
    adr.addEventListener('click', () => {
    document.getElementById("adrLot").value = adr.value.slice(0, 12);
    });
  });

  //tampilkan no lot OCR/GM829
  const radioOcr = document.querySelectorAll('input[name="ocr"]');
  radioOcr.forEach(ocr => {
    ocr.addEventListener('click', () => {
    document.getElementById("ocrLot").value = ocr.value ;
    });
  });

  //tampilkan no lot CORD
  const radioCord = document.querySelectorAll('input[name="cord"]');
  radioCord.forEach(cord => {
    cord.addEventListener('click', () => {
    document.getElementById("cordLot").value = cord.value.slice(0, 12) ;
    });
  });

  document.getElementById('buttonInput').addEventListener('click', () => {
    document.getElementById('modalTitle').innerHTML = document.getElementById('inputPpc').value;
  })

  document.getElementById('gantiCord').addEventListener('click', () => {
    document.getElementById('inputCord').focus()
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
  //hapus radio button slab dan seluruh input text di modal
  let radioSlab = document.getElementsByName('slab');
  function clearModal() {
    radioSlab.forEach(slab => {
      slab.checked = false;
    });

    let inputs = document.getElementById('modalInput').querySelectorAll('input[type="text"]');
    inputs.forEach(input => {
      input.value = null;
    });
  }
  </script>
          
@endsection