<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$dagdeel = "undefined";
			$h = date("H");

			if ($h < 6){
				$dagdeel = "nacht";
			}else if($h >= 6 && $h < 12){
				$dagdeel = "ochtend";
			}else if($h >= 12 && $h < 18){
				$dagdeel = "middag";
			}else if($h >= 18 && $h < 24){
				$dagdeel = "avond";
			}
			echo "het is nu $dagdeel"
        ?>
    </body>
</html>