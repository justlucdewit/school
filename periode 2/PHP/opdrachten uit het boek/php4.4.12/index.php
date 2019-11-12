<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$dollar = 1.12651;
			$pond = 0.79494;
			$yen = 119.524;
			$roepi = 75.559;

			$numOfCols = 10;

			echo "<table border='1'><tr><th>euro</th><th>dollar</th><th>pond</th><th>yen</th><th>roepi</th></tr>";
			for ($i = 0; $i <= $numOfCols; $i++){
				$new_dollar = $dollar*$i;
				$new_pond = $pond*$i;
				$new_yen = $yen*$i;
				$new_roepi = $roepi*$i;

				echo "<tr><td> $i </td><td> $new_dollar </td><td> $new_pond </td><td> $new_yen</td><td> $new_roepi </td></tr>";
			}
			echo "</table>";
        ?>
    </body>
</html>