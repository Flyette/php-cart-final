<?php $this->layout('layout', ['title' => 'Super Shop']) ?>

<div class="ui container">
	<div class="ui grid two columns">
		<div class="column">
			<h1 class="ui container">Mon Panier</h1>
			<div class="ui list">
				<div class="item">
					<a href="/cart/checkout" class="ui button">Finaliser ma commande</a>
				</div>
				<h4 class="item header">Montant total : <?=Cart::total($order)?> &euro;</h4>
				<h4 classs="item header">Nombre produits : <?=Cart::count()?></h4>
			</div>
		</div>
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