<?php
include "../config.php";
    $id=$_GET['id'];
    $hasil= $pdo->exec("DELETE from tb_jenis where id_jenis='". $id ."'");

    if($hasil){ echo"Data Berhasil di hapus <meta http-equiv='refresh' content='1; url =index.php?page=data_jenis_barang'/>" ;

    }else { 
        echo "Data Gagal di hapus";
    }
?>