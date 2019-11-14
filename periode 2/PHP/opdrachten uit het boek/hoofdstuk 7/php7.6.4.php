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
        <form method="post" action="">
            <label>Prijs </label><input type="text" name="prijs"><br>
            <label>Korting(%) </label><input type="text" name="korting"><br>
            <input type="submit" value="bereken" name="submit">
        </form>
        <?php
            if(isset($_POST["submit"])){
                $prijs = $_POST["prijs"];
                $korting = $_POST["korting"];
                $korting = (intval($korting)/100);
                $prijs = intval($prijs)-(intval($prijs)*$korting);
                $korting = ($korting)*100;
                echo "bedrag inclusied ".$korting."% korting: €".number_format($prijs, 2, ",", ".");
            }
        ?>
    </body>
</html>