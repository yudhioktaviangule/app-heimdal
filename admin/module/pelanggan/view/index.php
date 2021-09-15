 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?php 
	$id = $_GET['pelanggan'];
	$hasil = $lihat -> pelanggan_data($id);
    $hasil = $hasil[0];
?>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
					  	<a href="index.php?page=pelanggan"><button class="btn btn-primary"><i class="fa fa-angle-left"></i> Balik </button></a>
						<h3>Details Barang</h3>
						<?php if(isset($_GET['success-stok'])){?>
						<div class="alert alert-success">
							<p>Tambah Stok Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Tambah Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-striped">
								<tr>
									<td>Nama Pelanggan</td>
									<td><?php echo $hasil->name;?></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td><?php echo $hasil->alamat;?></td>
								</tr>
								<tr>
									<td>Telepon</td>
									<td><?php echo $hasil->telepon;?></td>
								</tr>
								
						</table>
						<div class="clearfix" style="padding-top:16%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
