<?php
if(isset($_POST[valora]) &&($_POST[valorb]) && isset($_POST[valorc])){
	$a=$_POST[valora];
	$b=$_POST[valorb];
	$c=$_POST[valorc];
	if ($a==0) {
		echo "<script>alert('Valor de A no puede ser cero. Coloque otro valor')</script>";
	}else{
		$r=$b*$b-4*$a*$c;
	if ($r<0) {
		echo "<script>alert('Raiz imaginaria')</script>";
	}else{
		$raiz=sqrt($r);
		$x1=(-$b + $raiz)/2*$a;
		$x2=(-$b-$raiz)/2*$a;
		echo "Valor de X1: ".$x1."<br>";
		echo "Valor de X2: ".$x2;
	}
	}
}

?>