<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ 'BandoLink | ' . $title }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" ></script>

  </head>
  <body class="bg-secondary-subtle">
    <nav class="navbar navbar-expand-lg py-3 bg-body-tertiary">
      <div class="container-fluid">
        {{-- <a class="navbar-brand fs-3">{{ $title }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav me-auto">
            <a class="nav-link" href="/shortsize/building">Building</a>
            <a class="nav-link" href="/shortsize/building/mandrel">Mandrel & Pisau</a>
            <a class="nav-link" href="/cementing">Cementing</a>
            <a class="nav-link" href="/cementing/kanban">Cementing Kanban</a>
            <a class="nav-link" href="/shortsize/admin/dashboard">Dashboard</a>
            <a class="nav-link" href="/shortsize/admin/karyawan">Karyawan</a>
            <a class="nav-link" href="/tracing">Tracing</a>
          </div>
          <span class="fs-3 me-2 text-danger"> UNDER DEVELOPMENT</span>
        </div>
      </div>
    </nav>
    <div class="container-fluid mt-3">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>