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
            function derdeMacht($n){
                return $n."x".$n."x".$n."=".($n**3);
            }
            for ($i=1; $i<=25; $i++){
                echo derdeMacht($i)."<br>";
            }
        ?>
    </body>
</html>