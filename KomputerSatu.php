<?php

	function loopChar($hexa){
		
	}

	function matrix($hexa){
		$baris = 16;
		$kolom =16;
		$str_hexa = str_split($hexa);

		$k=0;
		for ($i=0; $i < $baris; $i++) { 
			for ($j=0; $j < $kolom; $j++) { 
				$hasil_matrix = $str_hexa[$k];
				if ($j == 15) {
					$end = "<br/>";
				}
				else{
					$end = "";
				}

				$h_matrix .= $hasil_matrix . " " . $end;
				$k++;
			}
		}
		return $h_matrix;
	}

	function transpose($hexa){
		$baris = 16;
		$kolom =16;
		$str_hexa = str_split($hexa);

		$k=0;
		for ($i=0; $i < $baris; $i++) { 
			for ($j=0; $j < $kolom; $j++) { 
				$hasil_matrix[$i][$j] = $str_hexa[$k];
				$h_matrix .= $hasil_matrix[$i][$j];
				$k++;
			}
		}

		$str_hexa = str_split($h_matrix);
		$l=0;
		for ($j=0; $j < $kolom; $j++) { 
			for ($i=0; $i < $baris; $i++) { 
				$hasil[$j][$i] = $hasil_matrix[$i][$j];
				if ($i==15) {
					$end = "<br/>";
				}else{
					$end = "";
				}
				$matrix_t .= $hasil[$j][$i] . " " . $end;
				$l++;
			}
		}
		return $matrix_t;
	}

	function right($string, $n)
	{
      $balik = strrev($string);
      $hasil = strrev(substr($balik, 0, $n));
      return $hasil;
	} 
	
	function to_transpose($hexa){
		$baris = 16;
		$kolom =16;
		$str_hexa = str_split($hexa);

		$k=0;
		for ($i=0; $i < $baris; $i++) { 
			for ($j=0; $j < $kolom; $j++) { 
				$hasil_matrix[$i][$j] = $str_hexa[$k];
				$h_matrix .= $hasil_matrix[$i][$j];
				$k++;
			}
		}

		for ($j=0; $j < $kolom; $j++) { 
			for ($i=0; $i < $baris; $i++) { 
				$hasil[$j][$i] = $hasil_matrix[$i][$j];
				$matrix_t .= $hasil[$j][$i];
				$l++;
			}
		}
		return $matrix_t;
	}

?>