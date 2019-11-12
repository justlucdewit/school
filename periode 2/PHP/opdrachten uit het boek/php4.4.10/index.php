<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$num = 1000;
			$result = 0;
			echo "de waarde van het getal is $num <br>optelling gaat als volgt: <br>";

			for ($i = 1; $i <= $num; $i++){
				if ($i == 1){
					echo $i;
				}else{
					echo " + ".$i;
				}
				$result+=$i;
			}
			echo " = ".$result
        ?>
    </body>
</html>