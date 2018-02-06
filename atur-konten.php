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
  include("konten/surat-masuk.php");
}
elseif ($_GET['menu'] == "tambah-surat-masuk") {
  include("konten/tambah-surat-masuk.php");
}
elseif ($_GET['menu'] == "ubah-surat-masuk") {
  include("konten/ubah-surat-masuk.php");
}



elseif ($_GET['menu'] == "logout") {
  include("konten/logout.php");
}
