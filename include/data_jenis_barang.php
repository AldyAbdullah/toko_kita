
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Jenis Barang</h1>
                    <p class="mb-4">Data di bawah ini merupakan halaman untuk melihat data jenis barang </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jenis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                <?php
                                    $no=1;
                                    $get = $pdo->query("SELECT * FROM tb_jenis");
                                    $listdata=$get->fetchAll();
                                foreach($listdata as $setdata) {
                                ?>
                                        <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $setdata['nama_jenis'];?></td>
                                            <td><a href="hapus_jenis.php?id=<?php echo $setdata['id_jenis']?>" class="btn btn-danger btn-circle">
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

          