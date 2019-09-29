<?php 
echo "Bilangan Ganjil 1-100: <br>";
for($a=1; $a<=100; $a++){
    if($a % 2==1 )
    	echo $a."<br>";
}

echo "<br> Bilangan Genap 1-100: <br>";
for($b=1; $b<=100; $b++){
    if($b % 2==0 )
    	echo $b."<br>";
}

echo "<br> Bilangan Prima 1-100: <br>";
for ($c=1; $c <= 100 ; $c++) {     // for 1, adalah bilangan yang akan di cek
	$e = 0;

	for ($d=1; $d <= $c ; $d++) {  // for 2, bilangan pembagi
		if ($c % $d == 0) {
			$e++;
        }    
    }

    if ($e == 2) {   // syarat atau kondisi bilangan prima
    	echo $c."<br>";
    }
}
?>