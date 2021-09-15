 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Data Pelanggan</h3>
						<br/>
						
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Tambah Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['fail'])){?>
						<div class="alert alert-danger">
							<p>Tambah Data Gagal! !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						
						<?php 
							$sql=" select * from pelanggan where stok <= 3";
							$row = $config -> prepare($sql);
							$row -> execute();
							$r = $row -> rowCount();
							if($r > 0){
						?>	
						<?php
								echo "
								<div class='alert alert-warning'>
									<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span> barang yang Stok tersisa sudah kurang dari 3 items. silahkan pesan lagi !!
									<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Cek Barang <i class='fa fa-angle-double-right'></i></a></span>
								</div>
								";	
							}
						?>

						<!-- Trigger the modal with a button -->
						
						<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal">
							<i class="fa fa-plus"></i> Insert Data</button>
						<a href="index.php?page=pelanggan" style="margin-right :0.5pc;" 
							class="btn btn-success btn-md pull-right">
							<i class="fa fa-refresh"></i> Refresh Data</a>
						<div class="clearfix"></div>
						<br/>
						
						<!-- view barang -->	
						<div class="modal-view">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $pelanggans = $lihat->pelanggan();
                                    ?>
                                    <?php foreach($pelanggans as $key => $value):?>
                                        <tr>
                                            <td><?=$value->name?></td>
                                            <td><?=$value->alamat?></td>
                                            <td><?=$value->telepon?></td>
                                            <td>
                                                <a href="?page=pelanggan/view&pelanggan=<?=$value->id?>" class="btn btn-xs btn-primary">Detail</a>
                                                <a href="?page=pelanggan/edit&pelanggan=<?=$value->id?>" class="btn btn-xs btn-warning">Edit</a>
                                                <a href="fungsi/hapus/hapus.php?pelanggan=hapus&id=<?= $value->id ?>" onclick="javascript:return confirm('Hapus Data Pelanggan ?');"class="btn btn-xs btn-danger">Delete</a>
                                            </td>
                                            
                                        </tr>
                                    <?php endforeach;?>

                                </tbody>
                            </table>
						</div>
						<div class="clearfix" style="margin-top:7pc;"></div>
					<!-- end view barang -->
					<!-- tambah barang MODALS-->
						<!-- Modal -->
					
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content" style=" border-radius:0px;">
								<div class="modal-header" style="background:#285c64;color:#fff;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Pelanggan</h4>
								</div>										
								<form action="fungsi/tambah/tambah.php?pelanggan=tambah" method="POST">
									<div class="modal-body">
								
										<table class="table table-striped bordered">
											
											
											<tr>
												<td>Nama Pelanggan</td>
												<td><input type="text" placeholder="Nama Pelanggan" required class="form-control" name="name"></td>
											</tr>
											<tr>
												<td>Alamat</td>
												<td><input type="text" placeholder="Alamat" required class="form-control"  name="alamat"></td>
											</tr>
											<tr>
												<td>No. Telepon</td>
												<td><input type="text" maxlength="12" placeholder="No. Telepon" required class="form-control" name="telepon"></td>
											</tr>
										</table>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Insert Data</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
						
					</div>
              	</div>
          	</section>
      	</section>
	
