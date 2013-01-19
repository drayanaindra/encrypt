<?php
	error_reporting(0);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<body>
	<head>
		<title>ENKCYPT and DECRYPT</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<?php
		include "KomputerUtama.php";
		include "KomputerSatu.php";
		include "KomputerDua.php";
		include "KomputerTigas.php";
		include "Deskripsi.php";
	?>
	<div class="head">
		<h2 class="hdua">Enkripsi</h2>
	</div>
	<div class="form">

		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<table class="tform">
			
			<tr>
				<td>Input File</td>
				<td>
					<input type="file" name="file">
				</td>
			</tr>
			<tr>
				<td>Key</td>
				<td>
					<input type="text" name="key">
				</td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td>
					<input type="submit" value="Encrypt">
				</td>
			</tr>
		</table>
		</form>
	</div>
	<div class="tit_k1">
		<h3 class="tit">Komputer Utama</h3>
	</div>
	<?php
	
		$get_name = $_POST['file'];
		$get_key = $_POST['key'];
		$key_bin = texttobin($get_key);
		#$get_dir = ini_set('include_path',"'/'.'$get_name'");
		$get_dir = dirname(__FILE__) . $_FILES["file"] . '/'. $get_name;
		
		$temp_file = temp_file($get_dir);
		$file = ($temp_file);
	?>
	<div class="text">
		<textarea cols=50 rows=10><?php echo $file; ?></textarea>
	</div>
	<?php
		$temps_cb = texttobin($file);
		$cip_biner = str_ireplace(" ", "", $temps_cb);
		$cipxorkey = cip_xor_key($cip_biner,$key_bin);
		$convert_hexa = bintohexa($cipxorkey);
		echo strlen($convert_hexa);
	?>
	<div class="text">
		<textarea cols=50 rows=10><?php echo $convert_hexa; ?></textarea>
	</div>
	<?php
		$to_bin = hextobin($convert_hexa);
		$cipkey = cip_xor_key($to_bin,$key_bin);
		$to_text = bin2text($cipkey);
	?>
	<div class="text">
		<textarea cols=50 rows=10><?php echo $to_text; ?></textarea>
	</div>
	<div class="tit_k1">
		<h3 class="tit">Komputer 1</h3>
	</div>
	<?php
		$pj_hexa = strlen($convert_hexa); // panjang hexa
		$jmlChar = 256;
		$sisa_div = $pj_hexa % $jmlChar; // menyimpan sisa div
		$tambah = $jmlChar - $sisa_div;
		$jml_loop = ($pj_hexa - $sisa_div) / $jmlChar;
		$banyak_char = $jmlChar - $sisa_div;
		$tem_Pjhexa = $pj_hexa - $jmlChar; // menyisakan karakter hexa
		for ($i=0; $i < $tambah; $i++) { 
			$code = "*";
			$sisa_char .= $code;
		}
		//mengulan sesuai hasil bagi sisa div dengan 256 karakter
		$hexa_bintang = $convert_hexa . $sisa_char; 
		$temp_hexa = str_split($hexa_bintang, 256);
		for ($i=0; $i <= $jml_loop; $i++) {
			$to_matrix = to_transpose($temp_hexa[$i]);
			$hasils .= $to_matrix;
		}
		$transpose = $hasils;
		echo strlen($transpose);
	?>
	<div class="text">
		<textarea cols=50 rows=10><?php echo $transpose; ?></textarea>
	</div>
	<?php
		$pj_transpose = strlen($transpose);
		$parsing_char = str_split($transpose, 256);
		for ($i=0; $i <= $jml_loop; $i++) { 
			$diagonal = matrix_diagonal($parsing_char[$i]);
			$hasil_diagonal .=  $diagonal;
		}
		$hasil_diagonalss = matrix_diagonal($parsing_char[1]);
		echo strlen($hasil_diagonal);
	?>
	<div class="tit_k1">
		<h3 class="tit">Komputer 2</h3>
	</div>
	<div class="text">
		<textarea cols=50 rows=10><?php echo $hasil_diagonal; ?></textarea>
	</div>
	<?php
		$pj_komp_dua = strlen($hasil_diagonal);
		$parsing_chars = str_split($hasil_diagonal, 256);
		for ($i=0; $i <= $jml_loop; $i++) { 
			$diagonal_komp_tiga = komp_tiga($parsing_chars[$i]);
			$hasil_diagonals .=  $diagonal_komp_tiga;
		}
		echo strlen($hasil_diagonals);
	?>
	<div class="tit_k1">
		<h3 class="tit">Komputer 3</h3>
	</div>
	<div class="text-last">
			<textarea cols=50 rows=10 name="buka"><?php echo $hasil_diagonals; ?></textarea>
			<input type="submit" value="save">
		</form>
		<?php
		
		?>
	</div>
	<table>
		<!--<tr>
			<td valign="top">
				INPUT DIAGONAL <br/>& OUTPUT VERTIKAL<br/>
				(Komputer Dua)
			</td>
			<td>
				<?php
					
					$to_bin = hex2string($convert_hexa);
					$xor_lagi = cip_xor_key($to_bin,$key_bin);
					$to_text = bin2text($xor_lagi);
				?>
				<textarea cols=50 rows=10><?php echo $to_text; ?></textarea>
			</td>
			<br/>
		</tr>-->
	</table>
</body>
</html>
