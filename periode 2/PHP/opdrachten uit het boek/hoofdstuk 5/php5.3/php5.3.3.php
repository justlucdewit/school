<html>
    <head>
        <title></title>
        <style>
            div{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
            $rows = 15;
            for($n=0; $n<=$rows-1; $n++){
                echo "<div>";
                makeRow($n);
                echo "</div>";
            }
            function makeRow($n){
                $n = 2**$n;
                for($i=1; $i<=$n; $i*=2){
                    echo "&nbsp;&nbsp;".$i."&nbsp;&nbsp;";
                }
                for ($i=$n/2; $i>=1; $i=$i/2){
                    echo "&nbsp;&nbsp;".$i."&nbsp;&nbsp;";
                }
            }
        ?>
    </body>
</html>