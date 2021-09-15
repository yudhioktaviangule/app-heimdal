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
 						<?php 
						 	
						 ?>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Edit Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-striped">
							<form action="fungsi/edit/edit.php?pelanggan=<?=$hasil->id?>" method="POST">
								
								<tr>
									<td>Nama Pelanggan</td>
									<td><input type="text" class="form-control" value="<?php echo $hasil->name;?>" name="name"></td>
								</tr>
								<tr>
									<td>Alamat Pelanggan</td>
									<td><input type="text" class="form-control" value="<?php echo $hasil->alamat;?>" name="alamat"></td>
								</tr>
								<tr>
									<td>Telepon Pelanggan</td>
									<td><input type="number" class="form-control" value="<?php echo $hasil->telepon;?>" name="telepon"></td>
								</tr>
						
								<tr>
									<td></td>
									<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button></td>
								</tr>
							</form>
						</table>
						<div class="clearfix" style="padding-top:16%;"></div>
				  </div>
              </div>
          </section>
      </section>
