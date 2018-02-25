<?php

if (empty($_GET['menu'])) {
  include("konten/home.php");
}
elseif ($_GET['menu'] == "login") {
  if (empty($_SESSION['hak'])) {
    include("konten/login.php");
  }
  else {
    header('Location: index.php');
  }
}

elseif ($_GET['menu'] == "surat-masuk") {
  if (empty($_SESSION['hak'])) {
    include("konten/login.php");
  } else {
    include("konten/surat-masuk.php");
  }
}
elseif ($_GET['menu'] == "tambah-surat-masuk") {
  if (empty($_SESSION['hak'])) {
    include("konten/login.php");
  } else {
    include("konten/tambah-surat-masuk.php");
  }
}
elseif ($_GET['menu'] == "ubah-surat-masuk") {
  if (empty($_SESSION['hak'])) {
    include("konten/login.php");
  } else {
    include("konten/ubah-surat-masuk.php");
  }
}

elseif ($_GET['menu'] == "surat-keluar") {
  if (empty($_SESSION['hak'])) {
    include("konten/login.php");
  } else {
    include("konten/surat-keluar.php");
  }
}
elseif ($_GET['menu'] == "tambah-surat-keluar") {
  if (empty($_SESSION['hak'])) {
    include("konten/login.php");
  } else {
    include("konten/tambah-surat-keluar.php");
  }
}
elseif ($_GET['menu'] == "ubah-surat-keluar") {
  if (empty($_SESSION['hak'])) {
    include("konten/login.php");
  } else {
    include("konten/ubah-surat-keluar.php");
  }
}

elseif ($_GET['menu'] == "laporan-surat-masuk") {
  if (empty($_SESSION['hak'])) {
    include("konten/login.php");
  } else {
    include("konten/laporan-surat-masuk.php");
  }
}
elseif ($_GET['menu'] == "laporan-surat-keluar") {
  if (empty($_SESSION['hak'])) {
    include("konten/login.php");
  } else {
    include("konten/laporan-surat-keluar.php");
  }
}

elseif ($_GET['menu'] == "logout") {
  if (empty($_SESSION['hak'])) {
    include("konten/login.php");
  } else {
    include("konten/logout.php");
  }
}
