<html>
    <head>
        <title>e benaderen</title>
    </head>
    <body>
        <?php
            $limiter = 1641141;
            $iteration = 0;
            $e = 0;
            for ($n = 1; $n<$limiter; $n++){
                $e = (1+(1/$n))**$n;
                echo "iteration $iteration: ".e."<br>";
                $iteration++;
            }
            echo $e;
        ?>
    </body>
</html>