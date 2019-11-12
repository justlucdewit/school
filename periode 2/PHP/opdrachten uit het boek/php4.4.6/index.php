<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$uur = date("G");
			$themperatuur = 4;
			$luchtvochtigheid = 84;

			if ($uur >= 17 || $themperatuur < 20 && $luchtvochtigheid < 85){
				echo "airco uit";
			}else{
				echo "airco aan";
			}
        ?>
    </body>
</html>