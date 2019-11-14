<html>
    <head>
        <title></title>
        <style>
            div{
                text-align: center;
            }

            #small{
                width: 50px;
            }
        </style>
    </head>
    <body>
        <form method="post" action="">
            <label>Fruitsoort     </label><input type="text" name="fruit" class="small"><br>
            <input type="submit" value="Toevoegen" name="toevoegen"><br>
            <input type="submit" value="Sorteren" name="sort"><br>
            <input type="submit" value="Schudden" name="shuffle">
        </form>
        <br>
        <?php
            session_start();
            if (!isset($_SESSION["fruits"])){
                $_SESSION["fruits"] = [];
            }

            if (isset($_POST["toevoegen"])){
                if ($_POST["fruit"] != ""){
                    array_push($_SESSION["fruits"], $_POST["fruit"]);
                }
            }

            if (isset($_POST["sort"])){
                sort($_SESSION["fruits"]);
            }

            if (isset($_POST["shuffle"])){
                shuffle($_SESSION["fruits"]);
            }

            echo "Inhoud van de array:<br>";
            foreach($_SESSION["fruits"] as $fruit){
                echo "-$fruit<br>";
            }
        ?>
    </body>
</html>