<?php
	function texttobin($text){
		$b = "";
		for($i=0;$i<strlen($text);$i++){
		$b .= sprintf("%08s ",decbin(ord($text[$i])));
	}
	$var_one = $b;
	return $var_one;
	}
	
	function temp_file($dir_file){
		$my_file = $dir_file;
		$handle = fopen($my_file, 'r');
		$data = fread($handle,filesize($my_file));
		return $data;
	}
	
	function bintohexa($bin){
		$hex = "";
		$i = 0;
		do {
			$hex .= sprintf("%02x", ord($bin{$i}));
			$i++;
		} while ($i < strlen($bin));
		return $hex;
	}
	
	function cip_xor_key($cip,$key){
		//menghitung panjang karakter
		$strlen_cip = strlen($cip);
		$strlen_key = strlen($key);

		//menghapus spasi
		$temp_ciper = str_replace(" ", "", $cip);
		$temp_keys = str_replace(" ", "", $key);

		//memecah menjadi array
		$temp_cip = str_split($temp_ciper);
		$temp_key= str_split($temp_keys);

		$k = 0;
		for ($i=0; $i < $strlen_cip; $i++) {
			$j = $i;
			if (($temp_cip[$i]==0) && ($temp_key[$j]==0)) {
				$hasil = "0";
				
			}
			elseif (($temp_cip[$i]==0) && ($temp_key[$j]==1)) {
				$hasil = "1";
				
			}
			elseif (($temp_cip[$i]==1) && ($temp_key[$j]==0)) {
				$hasil = "1";
				
			}
			elseif (($temp_cip[$i]==1) && ($temp_key[$j]==1)) {
				$hasil = "0";
				
			}
			$hasils .= $hasil;			
		}
		return $hasils;
	}

	function Hex2String($hex){
    $string='';
    for ($i=0; $i < strlen($hex)-1; $i+=2){
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }
    	return $string;
	}

	function bin2text($bin_str)
	{ 
		$binary_ = preg_replace("/[^01]/","", $bin_str);
		for($i = 0; $i < strlen($binary_); $i = $i + 8)
		$ascii = $ascii.chr(bindec(substr($binary_, $i, 8)));
		/**$text_str = ''; 
		$chars = explode("\n", chunk_split(str_replace("\n", '', $bin_str), 8)); 
		$_I = count($chars); 
		FOR($i = 0; $i < $_I; $text_str .= chr(bindec($chars[$i])), $i  ); 
		return $text_str; **/
		return $ascii;
	}
?>