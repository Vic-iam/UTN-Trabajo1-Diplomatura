<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="hero">
	<div class="hero-content">
		<p class="eyebrow">SABORES DE VENEZUELA</p>
		<h1>El sabor de casa,<br>en cada bocado.</h1>
		<p>Descubrí algunos de los sabores que hacen única a Venezuela.</p>
		<a class="button button-light" href="#productos">Ver productos</a>
	</div>
	<div class="hero-decoration" aria-hidden="true">
		<img src="<?php echo base_url('assets/images/arepa.svg'); ?>" alt="">
	</div>
</section>

<section class="products-section" id="productos">
	<div class="section-heading">
		<div>
			<p class="eyebrow">NUESTRA TIENDA</p>
			<h2>Productos</h2>
		</div>
		<p>Tradición venezolana para compartir.</p>
	</div>

	<?php if (empty($products)): ?>
		<div class="empty-state">
			<h3>Próximamente</h3>
			<p>Estamos preparando los productos para la tienda.</p>
		</div>
	<?php else: ?>
		<div class="product-grid">
			<?php foreach ($products as $product): ?>
				<article class="product-card">
					<a class="product-image" href="<?php echo site_url('productos/' . (int) $product->id); ?>">
						<?php if (!empty($product->image)): ?>
							<img src="<?php echo html_escape(product_image_url($product->image)); ?>" alt="<?php echo html_escape($product->name); ?>">
						<?php else: ?>
							<span class="image-placeholder">Venezuela</span>
						<?php endif; ?>
					</a>
					<div class="product-info">
						<h3><a href="<?php echo site_url('productos/' . (int) $product->id); ?>"><?php echo html_escape($product->name); ?></a></h3>
						<p class="product-description"><?php echo html_escape(character_limiter(strip_tags($product->description), 90, '...')); ?></p>
						<div class="product-card-bottom">
							<strong>$<?php echo number_format((float) $product->price, 2, ',', '.'); ?></strong>
							<a class="text-link" href="<?php echo site_url('productos/' . (int) $product->id); ?>">Ver detalle <span aria-hidden="true">&rarr;</span></a>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</section>
