<?php $this->layout('layout', ['title' => 'Super Shop']) ?>

<div class="ui container">
	<h1 class="ui header">My Super Products</h1>
	<hr class="ui divider">
	<section class="ui three stackable cards">
		<!-- boucle des produits ui card -->
	
		<?php foreach ($products as $product) : ?>
			<div class="ui card">
				<div class="image">
					<img src="<?=$product->picture?>">
				</div>
					<div class="content">
						<div class="header"><?=$product['name']?>
						</div>
					</div>
					<div class="extra content">
						<form method="POST" action="/cart/add" name="order">
							<input type="hidden" value="<?=$product->id?>" name="id"/>
							<button class="ui button" type="submit">Acheter
							</button>
						</form>
					</div>
				</div>
		<?php endforeach;?>
	</section>
</div>