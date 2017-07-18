<?php
include 'database.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" />
    <title>Edit Booking Hotel</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="col s12"></div><br />
      <div class="row">
        <div class="col s12">
          <h5><b> <i class="material-icons">mode_edit</i></b> Crud Booking Hotel</h5><br />
          <a href="index.php" title="Home" class="btn-floating btn-large waves-effect red"><i class="material-icons">store</i></a>
          <form action="proses.php?aksi=update" method="post">
            <?php
            foreach($db->edit($_GET['id']) as $data){
              ?>
              <div class="input-field">
                <i class="material-icons prefix">assignment_ind</i>
                <input id="icon_prefix" type="hidden" name="id" value="<?php echo $data['id']; ?>" id="id" class="validate">
                <input id="icon_prefix" type="text" name="id_tamu" id="id_tamu" value="<?php echo $data['id_tamu']; ?>" class="validate">
                <label for="last_name">ID Tamu </label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">perm_identity</i>
                <input id="icon_prefix" type="hidden" name="id" value="<?php echo $data['id']; ?>" id="id" class="validate">
                <input id="icon_prefix" type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>" class="validate">
                <label for="last_name">Nama </label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">room</i>
                <input id="icon_telephone" type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>"  class="validate">
                <label for="last_name">Alamat </label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">vpn_key</i>
                <input id="icon_telephone" type="text" name="no_kamar" id="no_kamar" value="<?php echo $data['no_kamar']; ?>"  class="validate">
                <label for="last_name">No. Kamar</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input id="icon_telephone" type="email" name="email" id="email" value="<?php echo $data['email']; ?>"  class="validate">
                <label for="last_name">Email</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">reorder</i>
                <textarea id="textarea1" class="materialize-textarea" name="keterangan" value="<?php echo $data['keterangan']; ?>"></textarea>
                <label for="textarea1">Keterangan</label>
              </div><br>
              <div class="input-field">
                <input class="btn waves-effect waves-light" type="submit" value="Simpan">
              </div>
              <?php } ?>
        </form>
      </div>
    </div>
  </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
