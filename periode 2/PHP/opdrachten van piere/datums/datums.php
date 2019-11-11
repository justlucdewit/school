echo "het is vandaag ".date("j F Y")."<br>";
echo "vandaag is het de ".date("z")."<sup>e</sup> dag van het jaar<br>";
echo date("l")." is de ".date("w")."ste dag van de week<br>";
echo "de maand ".date("F")." heeft ".date("t")." dagen<br>";
$welOfNiet = "geen";
if (date("L")){
    	$welOfNiet = "een";
}
echo "het jaar ".date("Y")."is $welOfNiet schrikkeljaar";