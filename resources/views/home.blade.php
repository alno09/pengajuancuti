<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    CutaCuti - Login
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if(Auth()->user()->role == 'pimpinan')
            <li class="nav-item">
                <h1 align="center"><a class="nav-link nav-link btn btn-dark text-light" href="{{url('pimpinan/dashboard')}}">Klik untuk mulai</a></h1>
            </li>
            @elseif(Auth()->user()->role == 'kadiv')
            <li class="nav-item">
                <h1 align="center"><a class="nav-link nav-link btn btn-dark text-light" href="{{url('dosen')}}">Klik untuk mulai</a></h1>
            </li>
            @elseif(Auth()->user()->role == 'pegawai')
            <li class="nav-item">
                <h1 align="center"><a class="nav-link btn btn-dark text-light" href="{{url('pegawai/dashboard')}}">Klik untuk mulai</a></h1>
            </li>
            @endif
        </ul>
    </div>
    </div>
</main>
