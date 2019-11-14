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
            <label>Cijfer: </label><input type="text" name="cijfers" class="small"><br>
            <input type="submit" value="bereken" name="submit">
        </form>
        <br>
        <?php
            if(isset($_POST["submit"])){
                $cijfers = $_POST["cijfers"];
                $cijfers = explode(" ", $cijfers);

                $aantal = count($cijfers);
                $gemiddelde = 0;

                foreach($cijfers as $cijfer){
                    if ($cijfer<1 || $cijfer>10){
                        $aantal-=1;
                    }else{
                        $gemiddelde += $cijfer;
                    }
                }

                $gemiddelde /= $aantal;
                $gemiddelde = number_format($gemiddelde, 1, ".", "");

                echo "Aantal ingevoerde cijfers: ".count($cijfers)."<br>";
                echo "Gemiddelde: ".$gemiddelde;
            }
        ?>
    </body>
</html>