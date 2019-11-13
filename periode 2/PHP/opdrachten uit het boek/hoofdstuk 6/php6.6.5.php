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
            function berekenSnelheid($remspoor, $remvertraging=5.5){
                return sqrt(2*$remspoor*$remvertraging)*3.6;
            }

            $remspoor = 50;
            $snelheid = round(berekenSnelheid($remspoor));
            echo "Snelheid van een auto met een remspoor van $remspoor meter is: ".$snelheid."km/h";
        ?>
    </body>
</html>