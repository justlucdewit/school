<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
            $spaargeld = 69420;
            if ($spaargeld < 1000){
                $verschil = 1000-$spaargeld;
                echo "Helaas, je hebt $verschil euro tekort om een iphone te kopen";
            }else{
                $over = $spaargeld - 1000;
                echo "je kan de iphone kopen, je hebt dan $over euro over";
            }
        ?>
    </body>
</html>