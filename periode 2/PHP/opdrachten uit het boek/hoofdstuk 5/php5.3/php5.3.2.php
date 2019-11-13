<html>
    <head>
        <title>e benaderen</title>
    </head>
    <body>
        <?php
            $limiter = 100000;
            $iteration = 0;
            $pi = 1;
            $opp = true;
            for ($n = 3; $n<$limiter; $n+=2){
                if ($opp){
                    $pi -= 1/$n;
                    $opp = false;
                }else{
                    $pi += 1/$n;
                    $opp = true;
                }
                $iteration++;
            }
            echo $pi*4;
        ?>
    </body>
</html>