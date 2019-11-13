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
            function cirkelOmtrek($straal){
                $pi = 3.14159265358;
                return 2*$pi*$straal;
            }

            function cirkelOppervlakte($straal){
                $pi = 3.14159265358;
                return $pi*$straal**2;
            }

            $straal = 5;
            $omtrek = cirkelOmtrek($straal);
            $oppervlak = cirkelOppervlakte($straal);
            echo "De omtrek van een cirkel met straal $straal is: $omtrek<br>";
            echo "De oppervlakte van een cirkel met straal $straal is: $oppervlak";
        ?>
    </body>
</html>