<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( show: 'name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  
<?php
wp_nav_menu(
  array(
    'menu' => 'menu-navegacao'
  )
);
?>
