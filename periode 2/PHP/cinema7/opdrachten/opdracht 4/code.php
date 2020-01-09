<!--functies.php-->
<?php
function ConnectDB()
{
  try{
	  $pdo = new pdo("mysql:host=localhost;dbname=cinema7", "root", "password");
  }catch(PDOException $e){
    die("WOOPSIE: ". $e->getMessage());
  }
	return $pdo;
}
?>

<!--verwacht.php-->
<?php
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
?>

<!--style.css-->
<style>
    .movieholder{
	margin-bottom: 50px;
	display: flex;
	justify-content: space-evenly;
	align-items: flex-start;
    }

    .imageplace img{
        width: 10vw;
    }

    .beschrijving{
        width: 33%;
    }
</stlye>