
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Input Jenis Barang</h1>

                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Jenis Barang</h6>
                                </div>
                                <div class="card-body">
                                    <p>Masukkan data yang benar*</p>
                                    <form role="form" class="margin-top-20" method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'];?>">
                                        <?php
                                            if(isset($_POST['btnSimpan'])){
                                                $cek = "INSERT INTO tb_jenis (nama_jenis) values (:nama)";
                                                $simpan = $pdo->prepare($cek);
                                                $hasil =$simpan->execute(array(
                                                    ':nama'=>$_POST['txtNama']
                                                ));
                                            if($hasil){
                                                echo "<div class='alert alert-info'><strong>Succes!</strong> Data berhasil ditambahkan !</div><meta http-equiv='refresh' content='1'; url= index.php?page=input_jenis_barang'/>";
                                                }else{
                                                    echo "<div class='alert alert-danger'><strong>Error!</strong> Data gagal ditambahkan !</div>";
                                                }
                                            }
                                            ?>
                                            



                                    <label> Nama Jenis </label>
                                    <input type="text" class="form-control" name="txtNama" placeholder="Masukkan Jenis Barang">
                                    <br>

                                    <div class="mb-2">
                                    </div>
                                   
                                    <button type="submit" name="btnSimpan" class="btn btn-success btn-circle">
                                        <i class="fas fa-save"></i>
                                    </button> 
                                    
                                    
                                
                                    <button type="reset" class="btn btn-danger btn-circle">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    </form>
                                   
                                </div>
                            </div>

                        

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->