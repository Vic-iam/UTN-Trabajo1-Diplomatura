<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$page_title = isset($title) ? $title : 'Tienda';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo html_escape($page_title); ?> | Sabores de Venezuela</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
	<header class="site-header">
		<div class="header-content">
			<a class="brand" href="<?php echo site_url(); ?>">Sabores de <span>Venezuela</span></a>
			<nav aria-label="Navegación principal">
				<a href="<?php echo site_url(); ?>">Inicio</a>
				<a href="<?php echo site_url('productos'); ?>">Productos</a>
			</nav>
		</div>
	</header>
	<main>
