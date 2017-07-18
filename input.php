<?php
include 'database.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Input Booking Hotel</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <div class="container">
        <div class="col s12"></div><br />
        <div class="row">
          <div class="col s6">
            <h5><b> <i class="material-icons">receipt</i></b> Input Booking Hotel</h5><br />
            <a href="index.php" title="Home" class="btn-floating btn-large waves-effect red"><i class="material-icons">store</i></a>
            <form action="proses.php?aksi=tambah" method="post">
              <div class="input-field">
                <i class="material-icons prefix">assignment_ind</i>
                <input id="icon_prefix" type="text" name="id_tamu" id="id_tamu" class="validate">
                <label for="last_name">ID Tamu </label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">perm_identity</i>
                <input id="icon_prefix" type="text" name="nama" id="nama" class="validate">
                <label for="last_name">Nama </label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">room</i>
                <input id="icon_telephone" type="text" name="alamat" id="alamat"  class="validate">
                <label for="last_name">Alamat</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">vpn_key</i>
                <input id="icon_telephone" type="text" name="no_kamar" id="no_kamar"  class="validate">
                <label for="last_name">Nomer Kamar</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input id="icon_telephone" type="email" name="email" id="email"  class="validate">
                <label for="last_name">Email</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">reorder</i>
                <textarea id="textarea1" class="materialize-textarea" name="keterangan"></textarea>
                <label for="textarea1">Keterangan</label>
              </div><br>
              <div class="input-field">
                <input class="btn waves-effect waves-light" type="submit" value="Simpan">
              </div>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
