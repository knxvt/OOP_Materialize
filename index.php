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
          <div class="col s12">
            <h5><b> <i class="material-icons">airplay</i></b> Crud Booking Hotel</h5><br />
            <a href="input.php" title="Tambah Data" class="btn-floating btn-large waves-effect teal lighten-2"><i class="material-icons">add</i></a>
            <table class="responsive-table">
              <thead>
                <tr>
                  <th data-field="id">#</th>
                  <th data-field="id">ID Tamu</th>
                  <th data-field="id">Nama</th>
                  <th data-field="price">Email</th>
                  <th data-field="name">Alamat</th>
                  <th data-field="price">No kamar</th>
                  <th data-field="price">Keterangan</th>
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
                  <td><?php echo $data['id_tamu']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td><?php echo $data['alamat']; ?></td>
                  <td><?php echo $data['no_kamar']; ?></td>
                  <td><?php echo $data['keterangan']; ?></td>
                  <td>
                  <a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit" class="btn-floating  lime darken-4"><i class="material-icons">mode_edit</i></a>
                  <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=hapus" class="btn-floating red lighten-2"><i class="material-icons">delete</i></a>
                  </td>
                </tr>
              </tbody>
              <?php
              } ?>
          </table>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
  </body>
</html>
