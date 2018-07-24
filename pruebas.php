
<?php
$content="<style>
	div {
		width: 300px;
		float: left;
		display: inline-block;
	}
</style>";
	require_once 'dompdf/autoload.inc.php';
	include("conexion/conexion.php");
	set_time_limit(1000);
	ini_set('memory_limit', '2000M');

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
		$content.="<div>";
		foreach ($v as $key => $numeros) {
			$i++;
			
			$content.= $numeros."<br>";
			unset($v[$key]);
			if ($i==$combinaciones) {
				break;
			}
			
		}
		$content.="</div>";
		
		$i2=0;
		$content.="<div>";
		foreach ($v as $key => $numeros) {
			$i2++;
			
			$content.= $numeros."<br>";
			unset($v[$key]);
			if ($i2==$combinaciones) {
				break;
			}
			
		}
		$content.= "</div>";
		
		$i3=0;
		$content.= "<div>";
		foreach ($v as $key => $numeros) {
			$i3++;
			
			$content.= $numeros."<br>";
			unset($v[$key]);
			if ($i3==$combinaciones) {
				break;
			}
			
		}
		$content.= "</div>";
		$content.= "<br><br><br><br><br><br>";
		$i4=0;
		$content.= "<div>";
		foreach ($v as $key => $numeros) {
			$i4++;
			
			$content.= $numeros."<br>";
			unset($v[$key]);
			if ($i4==$combinaciones) {
				break;
			}
			
		}
		$content.= "</div>";
		
		$i5=0;
		$content.= "<div>";
		foreach ($v as $key => $numeros) {
			$i5++;
			
			$content.= $numeros."<br>";
			unset($v[$key]);
			if ($i5==$combinaciones) {
				break;
			}
			
		}
		$content.= "</div>";
	
		$i6=0;
		$content.= "<div>";
		foreach ($v as $key => $numeros) {
			$i6++;
			
			$content.= $numeros."<br>";
			unset($v[$key]);
			if ($i6==$combinaciones) {
				break;
			}
			
		}
		$content.= "</div>";
		$content.= "<br><br><br><br><br><br>";
	}
	
	
	 	
use Dompdf\Dompdf;

	$dompdf = new Dompdf();
	$dompdf->loadHtml($content);
	$dompdf->setPaper('letter', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("boletos"."_".date("Y-m-d"));
?>