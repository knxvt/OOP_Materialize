<?php

class database{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "user";

    function __construct(){
        mysql_connect($this->host, $this->uname, $this->pass);
        mysql_select_db($this->db);
    }

    function tampil_data(){
        $data = mysql_query("select * from user");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;

    }

    function input($nama,$alamat,$no_kamar,$email){
        mysql_query("insert into user values('','$nama','$alamat','$no_kamar','$email')");
    }

    function hapus($id){
        mysql_query("delete from user where id='$id'");
    }

    function edit($id){
        $data = mysql_query("select * from user where id='$id'");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id,$nama,$alamat,$no_kamar,$email){
        mysql_query("update user set nama='$nama', alamat='$alamat', no_kamar='$no_kamar', email='$email'  where id='$id'");
    }

}

?>
