<?php $this->layout('layout', ['title' => 'Super Shop']) ?>

<div class="ui container">
	<div class="ui grid two columns">
		<div class="column">
			<h1 class="ui container">Veuillez compléter vos coordonnées</h1>
			<form method="POST" class="ui form" action="/cart/validation">
				<h4 class="ui dividing header">* champ obligatoire</h4>
				<div class="field">
					<label>Prenom Nom</label>
					<div class="two fields">
						<div class="field">
							<input name="first_name" placeholder="First Name" type="text">
						</div>
						<div class="field">
							<input name="last_name" placeholder="Last Name" type="text">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="fields">
						<div class="twelve wide field">
							<label>Addresse</label>
							<input name="address" placeholder="N° rue .." type="text">
						</div>
						<div class="four wide field">
							<label>Code Postal</label>
							<input name="postcode" placeholder="01000" type="text">
						</div>
					</div>
				</div>
				<div class="field">
					<label>N° Téléphone</label>
					<input type="phone" name="phone">
				</div>
				<input type="submit" class="ui button" tabindex="0">Valider</div>
			</form>
		</div>
	</div>
	<h3>Récapitulatif de votre commande :</h3>
	<h4 class="item header">Montant total : <?=Cart::total($order)?> &euro;</h4>
	<h4 class="item header">Nombre produits : <?=Cart::count()?></h4>
	<div class="column">
		<table class="ui table compact">
			<thead>
				<tr>
					<th>Name of Product</th>
					<th>Picture of product</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<!-- une boucle ! -->
					<?php foreach($order as $o): ?>
						<td><?=$o->name?></td>
						<td><img src="<?=$o->picture?>" width="50"></td>
						<td><?=$o->price?></td>
					</tr>
				<?php endforeach ?>
			</table>
		</div>
	</div>
</div>