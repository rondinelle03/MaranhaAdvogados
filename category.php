  <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
   <section class="bg-azul-esp">
      
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h1 class="titulo-capa">
                      <div class="det-titulo"></div>
                      <span class="bg-titulo">NOTÍCIAS</span>
                </h1>
                
            <div class="col s12">
                <ul class="box-adv">
                  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                     <li>
                    <div class="det-foto">
                      
                          <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( array(167, 167) ); ?></a>
                    </div><!--det-foto-->

                    <div class="det-adv">
                          <h3><span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span> <?php echo strip_tags(get_the_title()); ?></h3>
                          <p> <a href="<?php the_permalink(); ?>"> <?php the_field('chamada'); ?></a><br><br>
                                <a href="<?php the_permalink(); ?>" style="font-weight:bold;font-size: 12px;">CONTINUAR LENDO</a></p>
                    </div><!--det-foto-->
                </li>
                    <?php endwhile; endif; ?> 
                 <?php wp_reset_query(); ?>

                    <div class="navigation">
                <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
            </div>

                </ul><!--box-adv-->
                  

              </div>
            </div><!--row-->
        </div><!--container-->
    </section>

  <?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>
