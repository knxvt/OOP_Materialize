<?php
include 'database.php';
$db = new database();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" />
    <title>Crud Booking Hotel</title>
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
<div class="col s12">
<h5><b> <i class="material-icons">airplay</i></b> Crud Booking Hotel</h5><br />
<a href="input.php" title="Tambah Data" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
      <table class="highlight">
        <thead>
          <tr>
          <th data-field="id">No</th>
              <th data-field="id">Nama</th>
              <th data-field="price">Email</th>
              <th data-field="name">Alamat</th>
              <th data-field="price">No kamar</th>
              <th data-field="price">Aksi</th>
          </tr>
        </thead>
<?php
    $no = 1;
    foreach($db->tampil_data() as $data){
    ?>
        <tbody>
          <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['no_kamar']; ?></td>

            <td>


      <a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit" class="btn-floating yellow darken-2"><i class="material-icons">mode_edit</i></a>
      <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=hapus" class="btn-floating green"><i class="material-icons">delete</i></a>

            </td>
          </tr>
        </tbody>
        <?php
    }
    ?>
      </table>
</div>
    </div>

        </div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
