<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ 'BandoLink | ' . $title }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" ></script>

  </head>
  <body class="bg-secondary-subtle">
    <nav class="navbar navbar-expand-lg py-3 bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand ms-2" style="width: 12rem"><img src="{{ asset('img/bando-logo.png') }}" width="100"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mb-2 mb-lg-0 mx-auto">
            <a class="nav-link" href="/shortsize/building">Building</a>
            <a class="nav-link" href="/shortsize/building/mandrel">Mandrel & Pisau</a>
            <a class="nav-link" href="/cementing">Cementing</a>
            <a class="nav-link" href="/cementing/kanban">Cementing Kanban</a>
            <a class="nav-link" href="/shortsize/admin/dashboard">Dashboard</a>
            <a class="nav-link" href="/shortsize/admin/karyawan">Karyawan</a>
            <a class="nav-link" href="/tracing">Tracing</a>
          </div>
          <div class="nav-item dropdown dropstart ms-auto me-3">
            <a class="nav-link d-flex align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class='bx bx-sm bx-user-circle me-1'></i>@auth {{ auth()->user()->nama }} @endauth
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profil</a></li>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <li><button type="submit" class="dropdown-item">Logout</button></li>
              </form>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container-fluid mt-3">
        @yield('container')
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  </body>
</html>