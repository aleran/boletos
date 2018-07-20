<style>
	div {
		width: 400px;
		float: left;
		display: inline-block;
	}
</style>
<?php
	include("conexion/conexion.php");
	set_time_limit(500);

	 function comb ($n, $elems) { if ($n > 0) { $tmp_set = array(); $res = comb($n-1, $elems); foreach ($res as $ce) { foreach ($elems as $e) { array_push($tmp_set, $ce . $e); } } return $tmp_set; } else { return array(''); } } $elems = array('1','2','3','4','5','6','7','8','9','0'); $v = comb(5, $elems); 
	shuffle($v);
	$cantidad=count($v);
	$boleto=1;
	$pagina=1;
	$combinaciones=5;

	$n_boletos=$cantidad/$combinaciones;
	$n_boletos=$n_boletos/6;
	$n_boletos= floor($n_boletos);

	for ($n=0; $n < $n_boletos; $n++) { 

		$i=0;
		echo "<div>";
		foreach ($v as $key => $numeros) {
			$i++;
			
			echo $numeros."<br>";
			unset($v[$key]);
			if ($i==$combinaciones) {
				break;
			}
			
		}
		echo "</div>";
		
		$i2=0;
		echo "<div>";
		foreach ($v as $key => $numeros) {
			$i2++;
			
			echo $numeros."<br>";
			unset($v[$key]);
			if ($i2==$combinaciones) {
				break;
			}
			
		}
		echo "</div>";
		
		$i3=0;
		echo "<div>";
		foreach ($v as $key => $numeros) {
			$i3++;
			
			echo $numeros."<br>";
			unset($v[$key]);
			if ($i3==$combinaciones) {
				break;
			}
			
		}
		echo "</div>";
		echo "<br><br><br><br><br><br>";
		$i4=0;
		echo "<div>";
		foreach ($v as $key => $numeros) {
			$i4++;
			
			echo $numeros."<br>";
			unset($v[$key]);
			if ($i4==$combinaciones) {
				break;
			}
			
		}
		echo "</div>";
		
		$i5=0;
		echo "<div>";
		foreach ($v as $key => $numeros) {
			$i5++;
			
			echo $numeros."<br>";
			unset($v[$key]);
			if ($i5==$combinaciones) {
				break;
			}
			
		}
		echo "</div>";
	
		$i6=0;
		echo "<div>";
		foreach ($v as $key => $numeros) {
			$i6++;
			
			echo $numeros."<br>";
			unset($v[$key]);
			if ($i6==$combinaciones) {
				break;
			}
			
		}
		echo "</div>";
		echo "<br><br><br><br><br><br>";
	}
	
	
	 	

?>