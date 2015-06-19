<?php include('header.php'); ?>
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_customer.php">Manajemen Program Pendidikan</a>
					</li>
					
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Upload Data Pendidikan</h2>
					</div>
					<div class="row-fluid">
						<div class="box-content">	
							<div align="center">
								<form method="post" enctype="multipart/form-data" action="proses_import_pendidikan.php">
									Pilih File Excel: <input name="userfile" type="file">
									<input class="btn btn-success" name="upload" type="submit" value="Import File">
								</form>
							</div>
						</div>					
					</div><!--/span-->
				</div><!--/row-->
			</div>    
<?php include('footer.php'); ?>
