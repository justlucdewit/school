<?php
/*
	Opdracht PM04 STAP 3: Verwacht in de bioscoop
	Omschrijving: Voer een query uit middels een prepared statement
*/
/*
$parameters = array(':Verwacht'=>'Verwacht');
$sth = $pdo->prepare("SELECT * FROM films WHERE Status=:Verwacht");
$sth->execute($parameters);
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
*/	
	$parameters = array(':Verwacht'=>'Verwacht');
	$sth = $pdo->prepare("SELECT * FROM films WHERE Status=:Verwacht");
	$sth->execute($parameters);
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);

	foreach($result as $data){
		$titel = $data["Titel"];
		$beschrijving = $data["Beschrijving"];
		$duur = $data["Duur"];
		$genre = $data["Genre"];
		$leeftijd = $data["Leeftijd"];
		$plaatje = $data["Plaatje"];
		$prijs = $data["Prijs"];
		$type = $data["Type"];
		$status = $data["Status"];
		buildFilm($plaatje, $titel, $prijs, $genre, $leeftijd, $duur, $status, $beschrijving);
	}

	function buildFilm($imgUrl, $titel, $prijs, $genre, $leeftijd, $duur, $status, $beschrijving){
		echo "
		<h1>$titel</h1>
		<div class=\"movieholder\">
			
			<span class=\"imageplace\">
				<img src=\"Images/$imgUrl\">
			</span>

			<span class=\"info\">
				prijs: $prijs euro<br/>
				genre: $genre <br/>
				leeftijd: $leeftijd-99 jaar<br/>
				duur: $duur min<br/>
				status: $status <br/>
			</span>

			<span class=\"beschrijving\">
				$beschrijving
			</span>
		</div>
		<hr/>
		";
	}


/*
	Opdracht PM04 STAP 4: Verwacht in de bioscoop
	Omschrijving: Zorg er voor dat het result van de query netjes op het scherm wordt getoond.
*/

?>