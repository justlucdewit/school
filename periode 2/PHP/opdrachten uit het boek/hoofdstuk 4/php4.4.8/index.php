<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$age = 18;
			$stempas = false;

			if ($age >= 16){
				echo "ja mag je praktijk examen scooter doen";
			}else{
				echo "je mag geen praktijk examen scooter doen";
			}

			if ($age >= 18 && $stempas){
				echo "ja mag stemmen";
			}else{
				echo "je mag niet stemmen";
			}
        ?>
    </body>
</html>