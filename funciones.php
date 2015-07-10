<?php
	If($estructura=="for"){

		}elseif($estructura=="while"){

		}elseif($estructura=="do-while"){

		}
		switch($_POST){
		case "for":{
			for($ciclo=1;$ciclo<=10;$ciclo++){
					
					echo "<table border=2>";
					echo "<tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo.":</td></tr>"
					
					for($ciclo2=1;$ciclo2<=10;$ciclo2++){
						$mult=$ciclo*$ciclo2;
						echo "<tr align=center><td>".$ciclo."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
					}
				echo "</table>";
				}
			break;
		}

		case "while":{
			$ciclo1=1;
				do{
					echo "<table border=3><tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo1.":</td></tr>";
					$ciclo2=1;

					do{
						$mult=$ciclo1*$ciclo2;
						echo "<tr align=center><td>".$ciclo1."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
						$ciclo2++;
					}

					while($ciclo2<=10);
					echo "</table>";
					$ciclo1++;
				}
				while($ciclo1<=10);
			break;
		}

		case "do-while":{
			$a=0;
						do{
							$a++;
							echo "<table id='tabla' border=1>";
							echo "<tr>";
								echo "<td>";
							if ($a==1) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==2) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==3) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==4) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==5) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==6) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==7) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==8) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==9) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==10) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
							echo "</td>";
							echo "</tr>";
						echo "</table>";
						}while( $a<10);
			break;
		}
	}
?>
