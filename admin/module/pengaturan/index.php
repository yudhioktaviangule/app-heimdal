 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Pengaturan gudang </h3>
						<br>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Ubah Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-stripped">
							<thead>
								<tr>
									<td>Nama gudang</td>
									<td>Alamat gudang</td>
									<td>Kontak (Hp)</td>
									<td>Nama Pemilik gudang</td>
									<td>Aksi</td>
								</tr>
							</thead>
							<tbody>
								<form method="post" action="fungsi/edit/edit.php?pengaturan=ubah">		
								<tr>
									<td><input class="form-control" name="namagudang" value="<?php echo $gudang['nama_gudang'];?>" placeholder="Nama gudang"></td>
									<td><input class="form-control" name="alamat" value="<?php echo $gudang['alamat_gudang'];?>" placeholder="Alamat gudang"></td>
									<td><input class="form-control" name="kontak" value="<?php echo $gudang['tlp'];?>" placeholder="Kontak (Hp)"></td>
									<td><input class="form-control" name="pemilik" value="<?php echo $gudang['nama_pemilik'];?>" placeholder="Nama Pemilik gudang"></td>
									<td><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-pencil"></i> Update Data</button></td>
								</tr>
												<!-- tampilan gudang -->
								
					
							<tr style="background:#DFF0D8;color:#333;">
									<th>Nama Gudang</th>
									<th>alamat Gudang</th>
									<th>Kontak (HP)</th>
									<th>nama pemilik</th>
								</tr>
								</form>
							</tbody>
						</table>
						<div class="clearfix" style="padding-top:41%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
<?php


?>