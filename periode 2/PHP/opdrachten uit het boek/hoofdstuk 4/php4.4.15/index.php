<html>
    <head>
        <title>hello world</title>
        <style>
            *{
                font-family: Courier;
            }
        </style>
    </head>

    <body>
        <?php
            //patroon 1
            echo "<h1><b>Patroon I</b></h1>";
			for ($y = 1; $y<7; $y++){
				for ($x = 1; $x<7; $x++){
					if ($x <= $y){
						echo $x;
                    }
                }
                echo "<br>";
            }
            
            //patroon 2
            echo "<h1><b>Patroon II</b></h1>";
			for ($y = 7; $y>=0; $y--){
				for ($x = 1; $x<7; $x++){
                    if ($y > $x){
                    echo $x;
                    }
                }
                echo "<br>";
            }
            
            //patroon 3
            echo "<h1><b>Patroon III</b></h1>";
			for ($y = 6; $y>-1; $y--){
                if ($y!= 6){
                for ($i=7;$i>6-$y;$i--){
                    echo "&nbsp;";
                }
				for ($x = 6; $x>0; $x--){
                    if ($x > $y){
                        echo $x-$y;
                    }
                }
                echo "<br>";
                }
            }
            echo "<br>";

            //patroon 4
            echo "<h1><b>Patroon IV</b></h1>";
			for ($y = 7; $y>1; $y--){
                for ($i=6;$i>$y-1;$i--){
                    echo "&nbsp;";
                }
				for ($x = 6; $x>0; $x--){
                    if ($y > $x){
                        echo 7-$x;
                    }
                }
                echo "<br>";
            }
        ?>
    </body>
</html>