USE utncodi;

UPDATE products
SET name = 'Arepa venezolana',
	description = 'Arepa de maíz dorada, rellena y lista para disfrutar. Un clásico venezolano para cualquier momento del día.',
	price = 8500.00, image = 'assets/images/arepa.svg'
WHERE name = 'Mochila urbana'
	AND description = 'Mochila cómoda y resistente, ideal para todos los días. Cuenta con compartimento principal amplio y bolsillos de fácil acceso.'
	AND price = 28900.00 AND image IS NULL AND stock = 12;

UPDATE products
SET name = 'Cachapa con queso',
	description = 'Cachapa de maíz tierno con queso, una combinación tradicional de sabor dulce y salado.',
	price = 9200.00, image = 'assets/images/cachapa.svg'
WHERE name = 'Botella térmica'
	AND description = 'Botella de acero inoxidable con aislamiento térmico. Mantiene tus bebidas frías o calientes por más tiempo.'
	AND price = 12400.00 AND image IS NULL AND stock = 24;

UPDATE products
SET name = 'Tequeños de queso',
	description = 'Palitos de queso envueltos en masa dorada, ideales para compartir.',
	price = 6800.00, image = 'assets/images/tequenos.svg'
WHERE name = 'Cuaderno clásico'
	AND description = 'Cuaderno de tapa dura con hojas de calidad y un diseño simple para acompañar tus ideas y apuntes.'
	AND price = 5800.00 AND image IS NULL AND stock = 35;
