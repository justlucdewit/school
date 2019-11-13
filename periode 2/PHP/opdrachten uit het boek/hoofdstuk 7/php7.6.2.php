<html>
    <head>
    </head>

    <body>
        <form method="post" action="">
            <label>getal 1</label>
            <input type="text" name="num1">
            <br>

            <label>opperator</label>
            <input type="radio" name="opp" value="+">+
            <input type="radio" name="opp" value="-">-
            <input type="radio" name="opp" value="*">*
            <input type="radio" name="opp" value="/">/
            <br>

            <label>getal 2</label>
            <input type="text" name="num2">
            <br>

            <input type="submit" value="Berekenen">
        </form>

        <?php
            if(isset($_POST["num1"])){
                $num1 = intval($_POST["num1"]);
                $num2 = intval($_POST["num2"]);
                $opp = $_POST["opp"];

                echo "$num1 $opp $num2 = ";
                switch($opp){
                    case "+":
                        echo $num1 + $num2;
                        break;
                    case "-":
                        echo $num1 - $num2;
                        break;
                    case "/":
                        echo $num1 / $num2;
                        break;
                    case "*":
                        echo $num1 * $num2;
                        break;
                }
            }
        ?>
    </body>
</html>