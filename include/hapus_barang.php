<?php
include "../config.php";
    $id=$_GET['id'];
    $hasil= $pdo->exec("DELETE from tb_barang where id_barang='". $id ."'");

    if($hasil){ echo"Data Berhasil di hapus <meta http-equiv='refresh' content='1; url =index.php?page=data_barang'/>" ;

    }else { 
        echo "Data Gagal di hapus";
    }
?>