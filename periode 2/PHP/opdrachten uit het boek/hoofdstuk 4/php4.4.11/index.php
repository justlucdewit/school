<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$num = 69;
			$result = 1;

			for ($i = 1; $i <= $num; $i++){
				$result*=$i;
			}
			echo "de faculteit van $num is $result"
        ?>
    </body>
</html>