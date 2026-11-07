# Sabores de Venezuela

Sitio de productos venezolanos hecho con CodeIgniter 3. La página de inicio muestra los productos guardados en MySQL y cada producto tiene su página de detalle.

## Puesta en marcha

1. Iniciá Apache y MySQL desde XAMPP.
2. En una instalación nueva, importá `database/utncodi.sql` desde phpMyAdmin. El script crea la base `utncodi`, la tabla `products` y productos de ejemplo. No lo importes de nuevo sobre una instalación existente, ya que agregaría ejemplos duplicados.
3. La configuración inicial de `application/config/database.php` usa `localhost`, el usuario `root` y contraseña vacía, como en una instalación habitual de XAMPP. Cambiala si tu instalación usa otros datos.
4. Abrí el proyecto desde el servidor local, por ejemplo `http://localhost/utnCodi/`.

Si ya tenías la versión anterior, importá `database/actualizar_ejemplos.sql` para actualizar únicamente los tres productos de ejemplo originales que no hayan sido modificados. Los demás productos no se alteran.

La URL de inicio lista los productos; el catálogo está en `index.php/productos` y el detalle en `index.php/productos/{id}`. Para agregar productos, completá los campos `name`, `description`, `price`, `image` y `stock` en la tabla `products`. El campo `image` puede quedar vacío; también admite una ruta relativa a la raíz del proyecto (por ejemplo, `assets/images/arepa.svg`) o una URL absoluta. Las imágenes de ejemplo son ilustraciones locales.
