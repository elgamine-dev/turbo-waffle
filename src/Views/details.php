<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Details</title>
</head>
<body>
	<div>
		<a href="/">Liste de chaussettes</a> - 
		<a href="/?action=edit&id=<?= $sock->id ?>">Modifier Entrée</a>
	</div>
	<h3>Les chaussettes n°<?= $sock->id; ?>
	sont de couleur <?= $sock->couleur; ?> et une pointure de <?= $sock->pointure; ?>.
	La temperature de lavage conseillée est <?= $sock->temp_lavage; ?>°C et ont été lavées pour la dernière fois <?= $sock->date_lavage; ?></h3>
	<div>
		
	</div>
</body>
</html>