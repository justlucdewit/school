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
            <label>Startkapitaal: </label><input type="text" name="geld" class="small"><br>
            <label>Rentepercentage: </label><input type="text" name="rente" class="small"><br>
            <label>Jaarlijkse opname: </label><input type="text" name="opname" class="small"><br>
            <input type="submit" value="bereken" name="submit">
        </form>
        <br>
        <?php
            if(isset($_POST["submit"])){
                $geld = intval($_POST["geld"]);
                $rente = 1+(intval($_POST["rente"])/100);
                $opname = intval($_POST["opname"]);

                $aantalJaar = -1;

                while (true){
                    if ($geld>0){
                        $geld *= $rente;
                        $geld-=$opname;
                        
                        $aantalJaar++;
                    }else{
                        break;
                    }
                }

                echo "U kunt $aantalJaar jaar lang € $opname opnemen";
            }
        ?>
    </body>
</html>