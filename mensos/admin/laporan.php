<?php include('header.php'); ?>


                         <div>
                                <ul class="breadcrumb">
                                        <li>
                                                <a href="index.php">Home</a> <span class="divider">/</span>
                                        </li>
                                        <li>
                                                <a href="laporan.php">Laporan</a>
                                        </li>
										
                                </ul>
                        </div>
		
					<div class="row-fluid sortable">
					<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> Cetak Form Verifikasi Data Kesehatan</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					<div class="box-content">
					<form method="post" action="table_pdf/index_detail_pemasukan.php">
					<div>
					<label class="control-label" for="provinsi">Provinsi :</label>
						<div class="controls">
						<?php 
							$prov = mysql_query("select DISTINCT NMPROPINSI from kesehatan") or die(mysql_error());
							while($result = mysql_fetch_array($prov)){
								echo '<label class="input-medium" for="activity_status">'.$result['NMPROPINSI'].'</label>';			 
							}
						?>
						</div>
					<label class="control-label" for="kab">Kabupaten :</label>
						<div class="controls">
						<?php 
							$kab = mysql_query("select DISTINCT NMKABU from kesehatan") or die(mysql_error());
							while($result = mysql_fetch_array($kab)){
								echo '<label class="input-medium" for="activity_status">'.$result['NMKABU'].'</label>';			 
							}
						?>
						</div>						
					
						<label for="kategori" name="kategori">Nama Fasilitas Kesehatan :</label>
					<div class="control-group">
								<div class="controls">
								<select id="NMKECA" name="NMKECA" data-rel="choosen">
								  <option>-- Pilih Kecamatan --</option>
									<?php
									//mengambil nama-nama propinsi yang ada di database
										$kecamatan = mysql_query("SELECT DISTINCT NMKECA, KDKECA FROM kesehatan ORDER BY NMKECA");
										while($p=mysql_fetch_array($kecamatan)){
										echo "<option value=\"$p[KDKECA]\">$p[NMKECA]</option>\n";
										}
									?>
                                </select>
							&nbsp;
								<select id="NMKELR" name="NMKELR" data-rel="choosen">
										<option>-- Pilih Kelurahan --</option>
										<?php
											//mengambil nama-nama propinsi yang ada di database
											//$kota = mysql_query("SELECT * FROM kesehatan ORDER BY KDKELR");
											while($p=mysql_fetch_array($propinsi)){
											echo "<option value=\"$p[KDKELR]\">$p[NMKELR]</option>\n";
											}											
										?>
								</select>						
							&nbsp;	
								
								<select id="FASKES" name="FASKES" data-rel="choosen">
									<option>-- Pilih Kesehatan --</option>
										<?php
										//mengambil nama-nama CITY yang ada di database
										$faskes = mysql_query("SELECT DISTINCT KD_FASKES, NAMA_FASKES FROM kesehatan ORDER BY KD_FASKES");
										while($q=mysql_fetch_array($CITY)){
										echo "<option value=\"$q[KD_FASKES]\">$q[NAMA_FASKES]</option>\n";
										}
										?>
								</select>
								</div>
					</div>
												
					<div class="control-group">
					<label class="control-label" for="tahun">Tahun :</label>					
						<select id="tahun" name="tahun" data-rel="choosen">
							<?php
							foreach(range(1950, (int)date("Y")) as $year) {
								echo "\t<option value='".$year."'>".$year."</option>\n\r";
							}

							?>
						</select>
					</div>
					
					<div class="control-group">
					<label class="control-label" for="periode">Periode :</label>
						<select id="periode" name="periode" data-rel="choosen">
							<?php
							foreach(range(1, 4) as $period) {
								echo "\t<option value='".$period."'>".$period."</option>\n\r";
							}
							?>
						</select>
					</div>
					
				</div>
					<br>
					<button type="submit" class="btn btn-primary">Print Laporan</button>
					</form>
					</div>
					</div>
					
					<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> Cetak Form Verifikasi Data Pendidikan</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					<div class="box-content">
					<form method="post" action="table_pdf/index_detail_pengeluaran.php">
				<div>
					<label class="control-label" for="provinsi">Provinsi :</label>
						<div class="controls">
						<?php 
							$prov = mysql_query("select DISTINCT NMPROP from pendidikan") or die(mysql_error());
							while($result = mysql_fetch_array($prov)){
								echo '<label class="input-medium" for="activity_status">'.$result['NMPROP'].'</label>';			 
							}
						?>
						</div>
					<label class="control-label" for="kab">Kabupaten :</label>
						<div class="controls">
						<?php 
							$kab = mysql_query("select DISTINCT NMKABU from pendidikan") or die(mysql_error());
							while($result = mysql_fetch_array($kab)){
								echo '<label class="input-medium" for="activity_status">'.$result['NMKABU'].'</label>';			 
							}
						?>
						</div>						
					
						<label for="kategori" name="kategori">Nama Fasilitas Pendidikan :</label>
					<div class="control-group">
								<div class="controls">
								<select id="NMKECADIK" name="NMKECADIK" data-rel="choosen">
								  <option>-- Pilih Kecamatan --</option>
									<?php
									//mengambil nama-nama propinsi yang ada di database
										$kecamatan = mysql_query("SELECT DISTINCT NMKECA, KDKECA FROM pendidikan ORDER BY NMKECA");
										while($p=mysql_fetch_array($kecamatan)){
										echo "<option value=\"$p[KDKECA]\">$p[NMKECA]</option>\n";
										}
									?>
                                </select>
							&nbsp;
								<select id="NMKELRDIK" name="NMKELRDIK" data-rel="choosen">
										<option>-- Pilih Kelurahan --</option>
										<?php
											//mengambil nama-nama propinsi yang ada di database
											//$kota = mysql_query("SELECT * FROM kesehatan ORDER BY KDKELR");
											while($p=mysql_fetch_array($propinsidik)){
											echo "<option value=\"$p[KDKELR]\">$p[NMKELR]</option>\n";
											}											
										?>
								</select>						
							&nbsp;	
								
								<select id="FASDIK" name="FASDIK" data-rel="choosen">
									<option>-- Pilih Fasilitas Pendidikan --</option>
										<?php
										//mengambil nama-nama CITY yang ada di database
										$fasdik = mysql_query("SELECT DISTINCT KDFASDIK, NMFASDIK FROM pendidikan ORDER BY KDFASDIK");
										while($q=mysql_fetch_array($CITYDIK)){
										echo "<option value=\"$q[KDFASDIK]\">$q[NMFASDIK]</option>\n";
										}
									?>
								</select>
								</div>
					</div>
												
					<div class="control-group">
					<label class="control-label" for="tahun">Tahun :</label>					
						<select id="tahun" name="tahun" data-rel="choosen">
							<?php
							foreach(range(1950, (int)date("Y")) as $year) {
								echo "\t<option value='".$year."'>".$year."</option>\n\r";
							}

							?>
						</select>
					</div>
					
					<div class="control-group">
					<label class="control-label" for="periode">Periode :</label>
						<select id="periode" name="periode" data-rel="choosen">
							<?php
							foreach(range(1, 4) as $period) {
								echo "\t<option value='".$period."'>".$period."</option>\n\r";
							}
							?>
						</select>
					</div>
					
				</div>
					<br>
					<button type="submit" class="btn btn-primary">Print Laporan</button>
					</form>
					</div>
					</div>
					</div>
					
				

                
<?php include('footer.php'); ?>