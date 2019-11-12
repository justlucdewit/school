<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$num1 = 69;
			$num2 = 420;

			if ($num1 > $num2){
				$ans = $num1*2+$num2;
				echo "ans = $ans";
			}else{
				$ans = $num2*2+$num1;
				echo "ans = $ans";
			}
        ?>
    </body>
</html>