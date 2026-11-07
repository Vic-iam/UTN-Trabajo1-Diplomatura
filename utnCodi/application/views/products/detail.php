<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="detail-section">
	<a class="back-link" href="<?php echo site_url('productos'); ?>">&larr; Volver a productos</a>
	<div class="product-detail">
		<div class="detail-image">
			<?php if (!empty($product->image)): ?>
				<img src="<?php echo html_escape(product_image_url($product->image)); ?>" alt="<?php echo html_escape($product->name); ?>">
			<?php else: ?>
				<span class="image-placeholder">Venezuela</span>
			<?php endif; ?>
		</div>
		<div class="detail-info">
			<p class="eyebrow">DETALLE DEL PRODUCTO</p>
			<h1><?php echo html_escape($product->name); ?></h1>
			<p class="detail-price">$<?php echo number_format((float) $product->price, 2, ',', '.'); ?></p>
			<div class="detail-description"><?php echo nl2br(html_escape($product->description)); ?></div>
			<p class="stock-status"><?php echo ((int) $product->stock > 0) ? 'Disponible' : 'Sin stock'; ?></p>
			<a class="button button-dark" href="<?php echo site_url('productos'); ?>">Seguir viendo productos</a>
		</div>
	</div>
</section>
