<!--menu.php-->
<ul id="menu">
	<li><a href="index.php?PageNr=0">Home</a></li>
	<li><a href="index.php?PageNr=1">Reserveren</a></li>
	<li><a href="index.php?PageNr=2">Verwacht</a></li>
	<li><a href="index.php?PageNr=3">Over ons</a></li>
	<li><a href="index.php?PageNr=4">Inloggen</a></li>
</ul>

<!--index.php-->
<?php
if (isset($_GET["PageNr"])){
	switch($_GET["PageNr"]){
		case 0:
			break;
		case 1:
			break;
		case 2:
			break;
		case 3:
			break;
		case 4:
			break;
	}
}
?>