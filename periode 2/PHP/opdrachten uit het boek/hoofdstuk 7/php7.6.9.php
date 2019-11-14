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
            <label>Tekst: </label><input type="text" name="string"><br>
            <input type="radio" name="action" value="hoofdletters">In hoofd letters<br>
            <input type="radio" name="action" value="kleineletters">In kleine letters<br>
            <input type="radio" name="action" value="eerste">Eerste letter van iedere zin hoofdletter<br>
            <input type="radio" name="action" value="alle">Eerste letter van ieder woord hoofdletter<br>
            <input type="submit" name="execute" value="execute">
        </form>
        <br>
        <?php
            if (isset($_POST["execute"])){
                $str = $_POST["string"];


                switch($_POST["action"]){
                    case "hoofdletters": echo strtoupper($str); break;
                    case "kleineletters": echo strtolower($str); break;
                    case "eerste": echo ucfirst($str); break;
                    case "alle": echo ucwords($str); break;
                }
            }
        ?>
    </body>
</html>