<header>
	<h3>Pie PHP</h3>
</header>
<div class="container">
	<form class="form" action="registerAction" method="post">
		<div class="row">
			<div class="col-md-3"></div>
				<div class="col-md-6">
					<h2>Register</h2>
					<hr>
				</div>
			</div>
			<div class="row"> 
                <label for="email">E-Mail *</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Renter votre email" required minlength="4" maxlength="40">    
            </div>
            <div class="row">
                <label for="password">Mot de passe *</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Renter votre mot de passe" required minlength="4" maxlength="8">
            </div>
			<div class="row">
				<button type="submit" class="btn btn-info"><i class="fa fa-user-plus"></i> Inscription</button>
	        </div>
		</div>
	</form>
</div>