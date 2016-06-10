<?php $this->layout('layout', ['title' => 'Super Shop']) ?>
<h1><?=$total?></h1>

<div class="ui container">
	<div class="ui grid two columns">
	</div>
<h1><?=$customer->first_name?></h1>
<h2><?=$customer->last_name?></h2>
<h1><?=$customer->address?></h1>
<h1><?=$customer->postcode?></h1>
<h1><?=$customer->phone?></h1>
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
					</tbody>
			</table>
		</div>
	</div>
</div>
<form method="post" action="/confirmation">
	
<input type="hidden" value="<?=$customer->id?>" name="customer_id"/>
<input type="submit" class="ui button" value="Valider"/>
</form>
<a href="/logout" class="ui button">Annuler</a>