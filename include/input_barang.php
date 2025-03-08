
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Input Data Barang</h1>

                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                                </div>
                                <div class="card-body">
                                    <p>Masukkan data yang benar*</p>
                                    <form role="form" class="margin-top-20" method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'];?>">
                                        <?php
                                        
                                        try{
                                            $queryJenis= "SELECT id_jenis, nama_jenis FROM tb_jenis";
                                            $jenis = $pdo->prepare($queryJenis);
                                            $jenis->execute();
                                            $jenisBarang = $jenis->fetchAll(PDO::FETCH_ASSOC);
                                        }catch (PDOException $e){
                                            echo "<div class='alert alert-danger'><strong>Error!</strong> ". $e->getMessage()."</div>";
                                        }
                                            if(isset($_POST['btnSimpan'])){
                                                $harga_beli = $_POST['txtHargaBeli'];
                                                $harga_jual = $_POST['txtHargaJual'];
                                                $tanggal_sekarang = date('y-m-d h:i:s');
                                                if ($harga_beli > $harga_jual) {
                                                    echo "<div class='alert alert-danger'><strong>Error!</strong> Harga beli tidak boleh kurang dari harga jual</div><meta http-equiv='refresh' content='1'; url= index.php?page=input_barang'/>";
                                                }else{

                                                    $cek = "INSERT INTO tb_barang (nama_barang, id_jenis, stok, harga_beli, harga_jual,tanggal) values (:nama, :id_jenis, :stok, :beli, :jual, :tangggal)";
                                                    $simpan = $pdo->prepare($cek);
                                                    $hasil =$simpan->execute(array(
                                                        ':nama'=>$_POST['txtNama'],
                                                        ':id_jenis'=>$_POST['txtJenis'],
                                                        ':stok'=>$_POST['txtStok'],
                                                        ':beli'=>  $harga_beli,
                                                        ':jual'=>  $harga_jual,
                                                        ':tangggal'=> $tanggal_sekarang
                                                    ));

                                                
                                            



                                            
                                            if($hasil){
                                                echo "<div class='alert alert-info'><strong>Succes!</strong> Data berhasil ditambahkan !</div><meta http-equiv='refresh' content='1'; url= index.php?page=input_barang'/>";
                                                }else{
                                                    echo "<div class='alert alert-danger'><strong>Error!</strong> Data gagal ditambahkan !</div>";
                                                }
                                            }
                                        }
                                            
                                        
                                            ?>
                                            


                                    <!-- nama barang -->
                                    <label> Nama Barang </label>
                                    <input type="text" class="form-control" name="txtNama" placeholder="Masukkan Nama Barang" required>
                                    <br>
                                    <!-- jenis barang -->
                                    <label> Jenis Barang </label>
                                    <select class="form-control" name="txtJenis" required>
                                        <option value="">-- Pilih Jenis Barang --</option>
                                        <?php foreach ($jenisBarang as $jenis) :?>
                                        <option value="<?=$jenis['id_jenis'];?>"><?= $jenis['nama_jenis']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <br>
                                    <!-- Stok-->
                                    <label> Stok </label>
                                    <input type="number" class="form-control" name="txtStok" placeholder="Masukkan Stok" required>
                                    <br>
                                    <!-- harga Beli -->
                                    <label> Harga Beli per pcs </label>
                                    <input type="number" class="form-control" name="txtHargaBeli" placeholder="Masukkan Harga Beli" required>
                                    <br>
                                    <!-- harga jual -->
                                    <label> Harga Jual per pcs </label>
                                    <input type="number" class="form-control" name="txtHargaJual" placeholder="Masukkan Harga Jual" required>
                                    <br>
                                    <!-- Tanggal -->
                                  

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