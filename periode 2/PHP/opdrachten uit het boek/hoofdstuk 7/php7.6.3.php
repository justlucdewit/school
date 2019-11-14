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
            <label>R </label><input type="text" name="r"><br>
            <label>G </label><input type="text" name="g"><br>
            <label>B </label><input type="text" name="b"><br>
            <input type="submit" value="verander achtergrond" name="submit">
        </form>
        <?php
            if (isset($_POST["submit"])){
                $r = $_POST["r"];
                $g = $_POST["g"];
                $b = $_POST["b"];
                echo "<style>body{background-color: rgb($r, $g, $b);}</style>";
            } 
        ?>
    </body>
</html>