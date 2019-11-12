<html>
    <head>
        <title>hello world</title>
    </head>

    <body>
		<?php
			$oudePrijs = 150;

			if ($oudePrijs > 150){
				$nieuwePrijs = $oudePrijs * 1.19;
				echo "Oude prijs: € ".$oudePrijs.". Na verhoging van 19% is de prijs: € $nieuwePrijs";
			}else if ($oudePrijs < 55){
				$nieuwePrijs = $oudePrijs * 1.11;
				echo "Oude prijs: € ".$oudePrijs.". Na verhoging van 11% is de prijs: € $nieuwePrijs";
			}else{
				$nieuwePrijs = $oudePrijs * 1.16;
				echo "Oude prijs: € ".$oudePrijs.". Na verhoging van 16% is de prijs: € $nieuwePrijs";
			}
        ?>
    </body>
</html>