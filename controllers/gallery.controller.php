<?php
$title = 'Sfeerbeelden';
$style = 'master';
$image = 'img_contact.png';

$view = 'gallery.view.php';
$master = 'master';

$images = getImages('upload/img/galerij/');

$total = count($images);
$images_per_page = 12;
$total_pages = ceil($total/$images_per_page);