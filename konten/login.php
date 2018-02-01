<?php
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysql_query("select * from tb_petugas
                      where username='$username'
                      and password=sha1('$password')");
  $available = mysql_num_rows($query);
  if($available > 0) {
    $sesi = mysql_fetch_assoc($query);
    $_SESSION['username'] = $sesi[username];
    $_SESSION['pid'] = $sesi[pid];
    $_SESSION['hak'] = $sesi[hak];

    //print "LOGIN BERHASIL";
    header('Location: index.php');
  } else {
    print "LOGIN GAGAL :(";
  }
}
 ?>


<section class="">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-4 text-center">
        <div class="card">
          <div class="card-header text-center">
            <h4>LOGIN</h4>
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <button type="submit" name="login" class="btn btn-primary" name="button">Masuk</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
