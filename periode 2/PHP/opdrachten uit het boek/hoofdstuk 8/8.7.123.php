<html>
    <head>
    </head>

    <body>
        <?php
            try{
                $db = new PDO('mysql:host=localhost;dbname=fietsenmaker', 'root', 'password');
            }catch(PDOException $e){
                die("ERROR!: " . $e->getMessage());
            }
        ?>
    </body>
</html>