<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"><!--Encodage latin de la page -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Site de rencontre"/>
		<link rel="stylesheet" type="text/css" href="./css/styles.css">
		<title>PiePHP</title>
	</head>
	<body>
		<header>
		</header>
		<div class="container">
			<form class="form" action="index.php" method="post">
				<div class="row">
					<label for="password">Mot de passe *</label>
				</div>
				<div class="col">
					<input type="password" name="password" class="form-control" id="password" placeholder="Renter votre mot de passe" required minlength="4" maxlength="8">
				</div>
				<div class="row">
					<label for="email">E-Mail *</label>
				</div>
				<div class="col">
					<input type="email" name="email" class="form-control" id="email" placeholder="vous@exemple.com" required autofocus>
				</div>		
				<div class="row">
					<button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Inscription</button>
		        </div>
		    </form>
		</div>
		<footer>
			
		</footer>
	</body>
</html>
