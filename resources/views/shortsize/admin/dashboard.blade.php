@extends('layout.main')

@section('container')
    @php
        $op = ['Zulfa', 'Suryadi', 'Iwan', 'Dian', 'Nanda'];
        $hasil = ['33', '34', '32', '30', '33'];
    @endphp
<div class="row gap-3 pb-3">
  @for ($i = 1; $i <= 5; $i++)
    <div class="col-lg rounded shadow-sm bg-light">
      <div class="fs-5 fw-bold text-primary">line {{ $i }}</div>
      <div class="fs-5 text-center fw-light">operator</div>
      <div class="fs-4 text-center mb-3">{{ $op[($i-1)] }}</div>
      <div class="d-flex justify-content-between mb-2">
        <div class="fs-5 fw-light">hasil : {{ $hasil[$i-1] }} slab</div>
        <button class="btn btn-sm btn-primary" onclick="alert('belom dibuat')">Detail <i class='bx bx-right-arrow-alt'></i></button>
      </div>
    </div>
  @endfor
</div>

<div class="row mx-2 pt-3 rounded shadow-sm bg-light">

  <div class="d-flex justify-content-center mb-4">
    <div class="nav nav-underline">
      <button class="nav-link text-dark active" id="btnProd">Produktivitas</button>
      <button class="nav-link text-dark" id="btnAfkir">Afkir</button>
    </div>
  </div>

  <div class="col">
    <canvas id="dataChart" style="height: 50vh;"></canvas>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

<script>
const dataProd = {
  labels: ['line 1', 'line 2', 'line 3', 'line 4', 'line 5'],
  datasets: [
    {
      label: 'shift 1',
      backgroundColor: '#dd8888',
      data: [34, 34, 30, 28, 31],
    },
    {
      label: 'shift 2',
      backgroundColor: '#dddd88',
      data: [33, 34, 32, 30, 33],
    },
    {
      label: 'shift 3',
      backgroundColor: '#8888dd',
      data: [30, 0, 0, 0, 28],
    },
  ],
};

const dataAfkir = {
  labels: ['line 1', 'line 2', 'line 3', 'line 4', 'line 5'],
  datasets: [
    {
      label: 'shift 1',
      backgroundColor: '#dd8888',
      data: [1, 4, 8, 6, 3],
    },
    {
      label: 'shift 2',
      backgroundColor: '#dddd88',
      data: [2, 0, 4, 3, 2],
    },
    {
      label: 'shift 3',
      backgroundColor: '#8888dd',
      data: [6, 0, 0, 0, 4],
    },
  ],
};

const options = {
  scales: {
    y: {
      suggestedMax: 40,
      }
  },
  responsive: true,
  maintainAspectRatio: false,
  plugins: {
    datalabels: {
      anchor: 'end',
      align: 'end',
    }
  }
};

const ctx = document.getElementById('dataChart').getContext('2d');
const dataChart = new Chart(ctx, {
  type: 'bar',
  data: dataProd,
  options: options,
  plugins: [ChartDataLabels],
});

document.getElementById('btnProd').addEventListener('click', () => {
  document.getElementById('btnProd').classList.add('active');
  document.getElementById('btnAfkir').classList.remove('active');
  dataChart.data = dataProd;
  dataChart.update();
});

document.getElementById('btnAfkir').addEventListener('click', () => {
  document.getElementById('btnAfkir').classList.add('active');
  document.getElementById('btnProd').classList.remove('active');
  dataChart.data = dataAfkir;
  dataChart.update();
});
</script>

@endsection