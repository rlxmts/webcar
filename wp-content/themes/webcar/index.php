<?php
$estiloPagina = 'sobre.css';
require_once 'header.php';
?>

  <?php 
    if( have_posts()) :
      while( have_posts()) : the_post(); ?>

    <main>
      <div class="container">
        <?php 
          echo '<div class="imagem-pagina">' . get_the_post_thumbnail(null, 'post-thumbnail', array('class' => 'imagem-sobre')) . '</div>';        
          echo '<h2 class="titulo-pagina">' . get_the_title() . '</h2>' ; 
          echo '<div class="conteudo-pagina">' . get_the_content() . '</div>'; 
        ?> 
      </div>
    </main>
    
      <?php endwhile;
      endif;
  ?>

<?php
require_once 'footer.php';
?>