<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( show: 'name'); ?></title>
  <?php wp_head(); ?>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  <link rel='stylesheet' href="<?= get_template_directory_uri() . '/css/reset.css'?>" />
  <link rel='stylesheet' href="<?= get_template_directory_uri() . '/css/header.css'?>" />
  <link rel='stylesheet' href="<?= get_template_directory_uri() . '/css/footer.css'?>" />
  <link rel='stylesheet' href="<?= get_template_directory_uri() . '/css/' . $estiloPagina ?>" />

</head>
<body <?php body_class(); ?>>
  <header>
    <div class="menu-container">
      <?php
      the_custom_logo();
      ?>
      <nav>
        <?php
          wp_nav_menu(
            array(
              'menu' => 'menu-navegacao',
              'menu_id' => 'menu-principal'
              )
            );
            ?>
      </nav>
    </div>
  </header>




