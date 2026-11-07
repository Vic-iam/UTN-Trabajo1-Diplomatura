<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function product_image_url($image)
{
	if (preg_match('~^(https?:)?//~i', $image) || strpos($image, '/') === 0) {
		return $image;
	}

	return base_url($image);
}
