<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$mile = 1.609;
			$max = 10;
			echo "<table border='1'><tr><th>kilometer</th><th>mile</th></tr>";
			for ($i = 1; $i <= $max; $i++){
				$new_mile = $mile*$i;
				echo "<tr><td>$i</td><td>$new_mile</td></tr>";
			}
			echo "</table>"
        ?>
    </body>
</html>