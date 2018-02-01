<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">{ LOGO }</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php
  if ($_SESSION['hak'] == "petugas") {
  ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PENDATAAN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?menu=surat-masuk">Surat Masuk</a>
          <a class="dropdown-item" href="?menu=surat-keluar">Surat Keluar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LAPORAN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Surat Masuk</a>
          <a class="dropdown-item" href="#">Surat Keluar</a>
        </div>
      </li>
    </ul>
    <?php
    if (!empty($_SESSION['hak'])) { ?>
      <a href="?menu=logout" class="nav-link">LOGOUT</a>
    <?php
    } // if
    else { ?>
      <a href="?menu=login" class="nav-link">LOGIN</a>
    <?php } // tutup else ?>

  </div>
  <?php
  } // tutup if level=petugas
  else { ?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <a href="?menu=login" class="nav-link">LOGIN</a>
    </div>
  <?php
  } // tutup else ?>
</nav>
