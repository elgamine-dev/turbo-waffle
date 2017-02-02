<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<form action="?action=edit" method="post" class="ui form">
		<input type="hidden" name="id" value="<?= $sock->id ?>">
		<div class="field">
			<label for="description">Description</label>
			<input id="description" type="text" name="description" value="<?= $sock->description ?>">
		</div>
		<div class="field">
			<label for="couleur">Couleur</label>
			<input type="text" name="couleur" id="couleur"  value="<?= $sock->couleur ?>">
		</div>
		<div class="field">
			<label for="pointure">Pointure</label>
			<input type="text" name="pointure" id="pointure"  value="<?= $sock->pointure ?>">
		</div>
		<div class="field">
			<label for="temp_lavage">T° Lavage</label>
			<input type="text" name="temp_lavage" id="temp_lavage"  value="<?= $sock->temp_lavage ?>">
		</div>
		<div>
			<button class="ui button">Modifier</button>
		</div>
	</form>
</body>
</html>