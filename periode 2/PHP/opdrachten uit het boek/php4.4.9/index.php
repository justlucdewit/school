<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$num1 = rand(0, 10000);
			$num2 = rand(0, 10000);
			$num3 = rand(0, 10000);

			if ($num1 > $num2 && $num1 > $num3){
				//num1 is het grootst
				$result = $num2 + $num3;
				$other = $num1;
			}else if ($num2 > $num1 && $num2 > $num3){
				//num2 is het grootst
				$result = $num1 + $num3;
				$other = $num2;
			}else if ($num3 > $num1 && $num3 > $num2){
				//num3 is het grootst
				$result = $num2 + $num1;
				$other = $num3;
			}

			echo "zijde 1 = $num1 cm<br>";
			echo "zijde 2 = $num2 cm<br>";
			echo "zijde 3 = $num3 cm<br><br>";

			if ($result > $other){
				echo "Kan wel!";
			}else{
				echo "Kan niet!";
			}
        ?>
    </body>
</html>