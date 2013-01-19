<?php
	error_reporting(0);
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<?php
		include "KomputerUtama.php";
		include "KomputerSatu.php";
		include "KomputerDua.php";
		include "KomputerTigas.php";
		include "Deskripsi.php";
	?>
	<div class="head-d">
		<h2 class="hdua">Deskripsi</h2>
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
		<?php
		$get_name = $_POST['file'];
		$get_key = $_POST['key'];
		$key_bin = texttobin($get_key);
		#$get_dir = ini_set('include_path',"'/'.'$get_name'");
		$get_dir = dirname(__FILE__) . $_FILES["file"] . '\\'. $get_name;
		
		$temp_file = temp_file($get_dir);
		$file = ($temp_file);
		
		$pj_enkripsi = strlen($file);
		$pj = $pj_enkripsi / 256;
		$parsing_chars = str_split($file, 256);
		for ($i=0; $i <= $pj; $i++) { 
			$diagonal_komp_tiga = deskripsi($parsing_chars[$i]);
			$desk .=  $diagonal_komp_tiga;
		}
		$desks = deskripsi($parsing_chars[1]);
		
		
		$temp_hexa = str_split($desk, 256);
		for ($i=0; $i <= $pj; $i++) {
			$to_matrix = to_transpose($temp_hexa[$i]);
			$hasils .= $to_matrix;
		}
		$replace = str_replace("*","",$hasils);
		$to_bin = hextobin($replace);
		$cipxorkey = cip_xor_key($to_bin,$key_bin);
		$to_text = bin2text($cipxorkey);
		echo strlen($replace);
	?>
	<div class="text">
		<textarea cols=50 rows=10 name="buka"><?php echo $to_text; ?></textarea>
	</div>
</body>
</html>