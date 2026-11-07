CREATE DATABASE IF NOT EXISTS utncodi
	CHARACTER SET utf8mb4
	COLLATE utf8mb4_unicode_ci;

USE utncodi;

CREATE TABLE IF NOT EXISTS products (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(150) NOT NULL,
	description TEXT NOT NULL,
	price DECIMAL(10, 2) NOT NULL DEFAULT 0.00,
	image VARCHAR(500) DEFAULT NULL,
	stock INT UNSIGNED NOT NULL DEFAULT 0,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO products (name, description, price, image, stock) VALUES
	('Arepa venezolana', 'Arepa de maíz dorada, rellena y lista para disfrutar. Un clásico venezolano para cualquier momento del día.', 8500.00, 'assets/images/arepa.svg', 12),
	('Cachapa con queso', 'Cachapa de maíz tierno con queso, una combinación tradicional de sabor dulce y salado.', 9200.00, 'assets/images/cachapa.svg', 24),
	('Tequeños de queso', 'Palitos de queso envueltos en masa dorada, ideales para compartir.', 6800.00, 'assets/images/tequenos.svg', 35);
