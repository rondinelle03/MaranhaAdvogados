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
                      <span class="bg-titulo">JUSTIÇA COMENTADA</span>
                </h1>
               
                <div class="col s12 m9 l9">
                    
                      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <div class="det-adv int-x">
                          <h3><span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span> <?php echo strip_tags(get_the_title()); ?></h3>
                          
                        </div><!--det-foto-->

                      <div class="conteudo">
                          <?php the_content(); ?> 
                      </div>
                      <?php endwhile; endif; ?> 
                    <?php wp_reset_query(); ?> 

                    <p><a href="javascript:history.back()" class="waves-effect waves-light btn  light-blue darken-4 right">Voltar</a></p>

                </div>
                <div class="col s12 m3 l3 hide-on-med-and-down">
                    <img src="<?php bloginfo('template_url'); ?>/img/banner-lateral.png">
                </div><!--col s12 m3 l3-->
            
           
            </div><!--row-->
        </div><!--container-->
    </section>

  <?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>
