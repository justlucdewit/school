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
            <label>ABC-formule</label><br>
            <input type="text" name="a" class="small">x<sup>2</sup>+
            <input type="text" name="b" class="small">x+
            <input type="text" name="c" class="small">=0<br>
            <input type="submit" value="bereken" name="submit">
        </form>
        <?php
            if(isset($_POST["submit"])){
                $a = $_POST["a"];
                $b = $_POST["b"];
                $c = $_POST["c"];

                $D = $b**2 - 4*$a*$c;
                $x1 = (-$b+sqrt($D))/(2*$a);
                $x2 = (-$b-sqrt($D))/(2*$a);

                echo "x1 = $x1<br>";
                echo "x2 = $x2";
            }
        ?>
    </body>
</html>