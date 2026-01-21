<?php
	

	
$cardNumber=5240374834723122;

echo (test_cb($cardNumber)) ? "valid":"not valid";


	function test_cb($num){
		if(strlen($num) == 16){	// 16 caractères
			// Séparation de tous les caractères
			$c = array();
			for($i=0; $i<16; $i++){
				if(is_numeric(substr($num,$i,1))){	// Uniquement des chiffres
					$c[$i] = substr($num,$i,1);
				}else{
					return false;
				}
			}
			// Contrôle
			$m1 = 0;
			echo "$num<br>";
			echo "m1 $m1<br>";
			for($i=0; $i<16; $i++){
				echo "position $i  => ".$c[$i]." ";
				if(($i%2)==0){
					echo " is even position ";
					$x = $c[$i]*2;
					echo " x2 = $x ";
					if($x>9){
						echo " > 9 => ".($x-9)." ";
						$m1 += $x-9;
					}else{
						$m1 += $x;
					}
				}else{
					$m1 += $c[$i];
				}
				echo " | m1 = $m1<br>";
			}
			if(($m1%10)!=0){	// Doit être multiple de 10
				return false;
			}
			// Pas d'erreur
			return true;
		}else{
			return false;
		}
	}
?>