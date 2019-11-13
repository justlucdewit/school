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
        keer bekeken voordat je de internet browser hebt afgesloten<br>en al 
        <?php
            if(isset($_COOKIE['creloads'])){
                $newc = strval(intval($_COOKIE['creloads'])+1);
                setcookie('creloads', $newc, time()+3600);
            }else{
                setcookie('creloads', '1', time()+3600);
            }

            echo $_COOKIE['creloads'];
            //setcookie('creloads', '1', time()-3600);
        ?>
         keer in totaal
    </body>
</html>