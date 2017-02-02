<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
<table class="ui table">
	<thead>
		<th>id</th>
		<th>couleur</th>
		<th>pointure</th>
		<th>Temp lavage</th>
		<th>Date lavage</th>
		<th>Actions</th>
	</thead>
	<tbody>
		<?php foreach($socks as $sock) : ?>
			<tr>
				<td><a href="/?id=<?= $sock->id; ?>"><?= $sock->id; ?></a></td>
				<td><?= $sock->couleur; ?></td>
				<td><?= $sock->pointure; ?></td>
				<td><?= $sock->temp_lavage; ?>°C</td>
				<td><?= $sock->date_lavage; ?></td>
				<td><a href="?action=edit&id=<?= $sock->id ?>" class="ui button icon"><i class="icon edit"></i></a></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
	
</body>
</html>