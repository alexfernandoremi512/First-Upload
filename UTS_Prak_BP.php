<?php
  $umur = "79";
  $makan = "1";

  echo "Umurmu adalah : " .$umur . "<br />";
  
  function hitung ($umur){
	for ($i=1; $i<=$umur; $i++){
  		echo "$i ";
  	}
  	echo "<br>";
  }
  if ($umur < 3){
  	hitung($umur);
	  echo "Pilih Makanan : ";
		switch ($makan){
			case "1":
			echo "Makan BUBUR";
			break;
			case "2":
			echo "Makan BISKUIT";
			break;
		}
	}
   elseif ($umur >= "3" && $umur <= "10") {
    	  hitung($umur);
    	  echo "Pilih Makanan : ";
			switch($makan){
			case "1":
			echo "Makan AYAM";
			break;
			case "2":
			echo "Makan SAYUR";
			break;
		}
    } 
  elseif ($umur >= 10 && $umur <= 17){
  	hitung($umur);
  	echo "Pilih Makanan : ";
		switch ($makan){
			case "1":
			echo "Makan HATI";
			break;
			case "2":
			echo "Makan JEROAN";
			break;
		}
  }
	  
  else {
  	hitung($umur);
		echo "Makan Terserah deh";
		}
			
?>