<html>
    <head>
    </head>

    <body>
        <form method="post" action="">
            Bedrag exclusief BTW <input type="text" name="bedrag"><br>
            <input type="radio" name="btw" value="laag">Laag, 9%<br>
            <input type="radio" name="btw" value="hoog">Hoog, 21%<br>
            <input type="submit" name="Verzenden" value="Verzenden">
        </form>

        <?php
            if (isset($_POST["bedrag"])){
                $bedrag = $_POST["bedrag"];
                $btw = $_POST["btw"];

                if ($btw == "laag"){
                    $bedrag*=1.09;
                    $btw = 9;
                }else{
                    $bedrag*=1.21;
                    $btw = 21;
                }

                echo "Bedrag inclusief $btw BTW: € $bedrag";
            }
        ?>
    </body>
</html>