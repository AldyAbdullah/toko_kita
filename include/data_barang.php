<?php include("tanggal.php"); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
<p class="mb-4">Data di bawah ini merupakan halaman untuk melihat data barang </p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jenis</th>
                        <th>Stok</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                <tbody>
            <?php
                $no=1;
                $get = $pdo->query("SELECT tb_barang.*, tb_jenis.nama_jenis 
                FROM tb_barang
                JOIN tb_jenis ON tb_barang.id_jenis = tb_jenis.id_jenis");
                $listdata=$get->fetchAll();
            foreach($listdata as $setdata) {
                $tanggal=$setdata['tanggal'];
            ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $setdata['nama_barang'];?></td>
                        <td><?php echo $setdata['nama_jenis'];?></td>
                        <td><?php echo $setdata['stok'];?></td>
                        <td><?php echo "Rp " . number_format($setdata['harga_beli'], 0, ',', '.'); ?></td>
                        <td><?php echo "Rp " . number_format($setdata['harga_jual'], 0, ',', '.'); ?></td>
                        <td><?php echo tanggal_indo($tanggal, $hari=true) ?> </td>
                        <td><a href="hapus_barang.php?id=<?php echo $setdata['id_barang']?>" class="btn btn-danger btn-circle">
                                            <i class="fas fa-times"></i>
                                        </a></td>
                    </tr>
                    <?php $no++; }?>
                    
                    </tbody>
                    
                </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->

