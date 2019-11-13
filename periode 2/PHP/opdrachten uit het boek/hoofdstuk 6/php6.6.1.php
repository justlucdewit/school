<html>
    <head>
    </head>

    <body>
        Deze pagina heb je al: 
        <?php
            session_start();
            if(isset($_SESSION['reloads'])){
                $_SESSION['reloads']+=1;
            }else{
                $_SESSION['reloads'] = 1;
            }

            echo $_SESSION['reloads'];
        ?>
        keer bekeken <br> voordat je de internet browser hebt afgesloten
    </body>
</html>