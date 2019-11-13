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
            function randomPostCode(){
                $getal = rand(1000, 9999);
                $code = " ".chr(rand(65,90)).chr(rand(65,90));
                return $getal.$code;
            }

            echo randomPostCode();
        ?>
    </body>
</html>