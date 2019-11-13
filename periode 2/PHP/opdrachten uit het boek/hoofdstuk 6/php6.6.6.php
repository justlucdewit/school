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
            function dollarToEuro($dollar){
                return $dollar*0.91;
            }

            $dollar = 86.74;
            echo '$'.number_format($dollar, 2, ',', '.').' is gelijk aan €'.number_format(dollarToEuro($dollar), 2, ',', '.');
        ?>
    </body>
</html>