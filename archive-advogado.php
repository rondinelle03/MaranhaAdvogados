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
                      <span class="bg-titulo">NOSSOS ADVOGADOS</span>
                </h1>
                <div class="col s12">
                <p class="chamda-adv">Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a constante divulgação das informações facilita a criação do levantamento das variáveis envolvidas. Não obstante, a mobilidade dos capitais internacionais garante a contribuição de um grupo importante na determinação do retorno esperado a longo prazo. </p>
                </div>
            <div class="col s12">
                <ul class="box-adv">
                  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <li>
                    <div class="det-foto">
                        <a class="ico-ver0mais" href="<?php the_permalink(); ?>"><img src="img/ico-mais.jpg"></a>
                         <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( array(167, 167) ); ?></a>
                       
                    </div><!--det-foto-->

                    <div class="det-adv">
                          <h3><?php echo strip_tags(get_the_title()); ?> <span> <?php the_field('especialidade'); ?></span></h3>
                          <p> <a href="<?php the_permalink(); ?>"> <?php the_field('chamada'); ?></a></p>
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
