<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$km = 1.609;
			$max = 10;
			echo "<table border='1'><tr><th>mile</th><th>kilometer</th></tr>";
			for ($i = 1; $i <= $max; $i++){
				$new_km = $km*$i;
				echo "<tr><td>$i</td><td>$new_km</td></tr>";
			}
			echo "</table>"
        ?>
    </body>
</html>