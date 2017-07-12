<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="Hakko Bio Richard" />
    <title>Input</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
<div class="container">
<div class="col s12">

</div>
<br />
<div class="row">
<div class="col s6">
<h5><b> <i class="material-icons">receipt</i></b> Input Booking Hotel</h5><br />
      <form action="proses.php?aksi=tambah" method="post">
        <div class="input-field">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_prefix" type="text" name="nama" id="nama" class="validate">
        </div>
        <div class="input-field">
          <i class="material-icons prefix">room</i>
          <input id="icon_telephone" type="text" name="alamat" id="alamat"  class="validate">
        </div>
        <div class="input-field">
          <i class="material-icons prefix">vpn_key</i>
          <input id="icon_telephone" type="text" name="no_kamar" id="no_kamar"  class="validate">
        </div>
        <div class="input-field">
          <i class="material-icons prefix">email</i>
          <input id="icon_telephone" type="email" name="email" id="email"  class="validate">
        </div>
        <div class="input-field">
          <input class="btn waves-effect waves-light" type="submit" value="Simpan">
        </div>

    </form>
    </div>
</div>

        </div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
