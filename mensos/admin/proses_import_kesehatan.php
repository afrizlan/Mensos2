<?php
// menggunakan class phpExcelReader
include "excel_reader2.php";

// koneksi ke mysql
include 'DB_driver.php';

// membaca file excel yang diupload
$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);

// membaca jumlah baris dari data excel
$baris = $data->rowcount($sheet_index=0);

// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
$sukses = 0;
$gagal = 0;

// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i=2; $i<=$baris; $i++)
{
		$KD_FASKES = $data->val($i, 1);
		$NAMA_FASKES = $data->val($i, 2);
		$ALAMAT_FASKES	= $data->val($i, 3);
		$NAMA_PIMPINAN	= $data->val($i, 4);
		$KDPROP	= $data->val($i, 5);
		$NMPROPINSI = $data->val($i, 6);
		$KDKABU = $data->val($i, 7);
		$NMKABU = $data->val($i, 8);
		$KDKECA = $data->val($i, 9);
		$NMKECA = $data->val($i, 10);
		$KDKELR = $data->val($i, 11);
		$NMKELR = $data->val($i, 12);
		$KDPOS = $data->val($i, 13);
		$KDART = $data->val($i, 14);
		$NAMAART = $data->val($i, 15);
		$NAMA_PENGURUS = $data->val($i, 16);
		$NAMA_PENDAMPING = $data->val($i, 17);

  // setelah data dibaca, sisipkan ke dalam tabel mhs
  $query = "INSERT INTO Kesehatan VALUES (
				'$KD_FASKES', 
				'$NAMA_FASKES', 
				'$ALAMAT_FASKES',
				'$NAMA_PIMPINAN',
				'$KDPROP',	
				'$NMPROPINSI',
				'$KDKABU',
				'$NMKABU',
				'$KDKECA',
				'$NMKECA', 
				'$KDKELR', 
				'$NMKELR',
				'$KDPOS',
				'$KDART',
				'$NAMAART',
				'$NAMA_PENGURUS',
				'$NAMA_PENDAMPING'
			)";
  $hasil = mysql_query($query);

  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah
  if ($hasil) $sukses++;
  else $gagal++;
}
?>
			<script language = "JavaScript">
			document.location='form_upload_kesehatan.php';
			alert(
			'<?php 
			echo "Proses Import Data Kesehatan Selesai.";
			echo "Jumlah data yang sukses diimport : ".$sukses."";
			echo "Jumlah data yang gagal diimport : ".$gagal."";?>');
			</script>
			<?php
// tampilan status sukses dan gagal
 
 

?>