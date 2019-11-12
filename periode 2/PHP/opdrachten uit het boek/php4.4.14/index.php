<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$km = 1.609;
			$max = 20;
			echo "<table border='1'><tr><th>mile</th><th>kilometer</th><th>mile</th><th>kilometer</th></tr>";
			for ($i = 1; $i <= $max; $i++){
				$new_km = $km*$i;
				$sec_i = $i+20;
				$sec_new_km = $km*$sec_i;
				
				echo "<tr><td>$i</td><td>$new_km</td><td>$sec_i</td><td>$sec_new_km</td></tr>";
			}
			echo "</table>"
        ?>
    </body>
</html>