<header>
	<div class="header__title">
		<h3>Chercher des films:</h3>		
	</div>
</header>
<!--filtres de recherche-->
<div class="container align-items-center">
	<form action="" method="get">
		<div class="form-group">
			<label for="genre">Titre</label>
			<input type="text" name="titre" id="titre" class="form-control" placeholder="Choisissez un titre">
		</div>
		<div class="form-group">
			<label for="genre">Genre</label>
			<select class="form-control" id="genreNom" name="genreNom">
				<option value="-1"></option>
					<?php while ($dataGenre = $statement->fetch()){ ?>
				<option value ="<?php echo $dataGenre["id_genre"]; ?>"> <?php echo $dataGenre["nom"]; ?></option><?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label for="distrib">Distributeur</label>
			<select class="form-control" id="distribNom" name="distribNom">
				<option value="-1"></option>
				<?php while ($dataDistrib = $statement1->fetch()){ ?>
				<option value="<?php echo $dataDistrib["id_distrib"]; ?>"> <?php echo $dataDistrib["nom"]; ?></option><?php } ?>
			</select>
		</div>
		<input type="submit" name="button" href="./cinemaht.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" value="Filtrer">
	</form>
</div>
<!--séparatif-->
<a><br><br></a>
<!--résultats trouvés-->
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Titres des films :</th>
				<th>Genre des films :</th>
				<th>Distributeur des films :</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($datafilm = $statementJn->fetch()){ ?>
			<tr>
				<td><?php echo $datafilm[0] ?></td>
				<td><?php echo $datafilm[1] ?></td>
				<td><?php echo $datafilm[2] ?></td>	
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>			
<footer class="footer">
	<a class="btn btn-primary" href="updateFilm" role="button">Reinitialiser</a>
</footer>