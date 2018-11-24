  <?php

  /* Busca o arquivo header.php do tema e includa na página */

  get_header();

?>

   <!-- <section id="foto-destaque" class="owl-carousel owl-theme">

     <?php query_posts(array( 'post_type' => 'destaque','showposts' => '6' )); ?>

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <div class="item">

            <img src="<?php the_field('foto_principal'); ?>">

        </div>



        <?php endwhile; endif; ?> 

          <?php wp_reset_query(); ?> 

    </section>-->



    <section class="principal-capa">

      <img src="<?php bloginfo('template_url'); ?>/img/banner-principal.jpg" class="responsive-img">

    </section>



    <section class="bg-sobre">

        <div class="container">

            <div class="row">

                <h1 class="titulo-capa" id="link-nos">

                      <div class="det-titulo"></div>

                    <span class="bg-titulo">SOBRE NÓS</span>

                </h1>

                <div class="col s12 m8 l8">

                    <div class="conteudo"><div class="detlh"></div>

                    <?php query_posts(array( 'page_id' => '5' )); ?>

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                    <?php the_content(); ?> 



             <?php endwhile; endif; ?> 

          <?php wp_reset_query(); ?> 

                       

                    </div><!--conteudo-->

                </div><!--col s12 m9 l9-->

                <div class="col s12 m4 l4 hide-on-med-and-down">

                    <img src="<?php bloginfo('template_url'); ?>/img/fachada-maranhao.jpg" class="responsive-img">

                </div><!--col s12 m3 l3-->

            </div><!--row-->

        </div><!--container-->

    </section>



    <section>

        <div class="container">

            <div class="row">

                <h1 class="titulo-capa " id="link-adv">

                      <div class="det-titulo"></div>

                      <span class="bg-titulo">NOSSOS ADVOGADOS</span>

                </h1>

                <div class="col s12">

                <p class="chamda-adv">Maranhão Advogados atua no mercado desde 2004, com corpo jurídico atualmente composto por cinco advogados. As principais áreas de atuação são Direito Administrativo, Civil e Trabalhista. Comprometido com atuação ética, ágil e personalizada, empenhado na solução dos problemas de maneira prática e dinâmica. Sempre visando a qualidade e efetividade da prestação dos serviços de modo a atender satisfatoriamente aos interesses dos seus clientes. </p>

                </div>

            <div class="col s12">

            <ul class="box-adv">



              <?php query_posts(array( 'post_type' => 'advogado','showposts' => '6' )); ?>

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                <li>

                    <div class="det-foto">

                        <a class="ico-ver0mais" href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ico-mais.jpg"></a>

                        <a href="<?php the_permalink(); ?>"> <img src="<?php the_field('fotoadvogado'); ?>"></a>

                       

                    </div><!--det-foto-->



                    <div class="det-adv">

                          <h3><?php echo strip_tags(get_the_title()); ?> <span> <?php the_field('especialidade'); ?></span></h3>

                          <p> <a href="<?php the_permalink(); ?>"> <?php the_field('chamada'); ?></a></p>

                    </div><!--det-foto-->

                </li>

                <?php endwhile; endif; ?> 

          <?php wp_reset_query(); ?> 

                

            </ul><!--box-adv-->

            </div><!--row-->

        </div><!--container-->

    </section>



    <section class="bg-noticias">

        <div class="container">

            <div class="row">

                 <h1 class="titulo-capa" id="link-not">

                      <div class="det-titulo"></div>

                      <span class="bg-titulo">JUSTIÇA COMENTADA</span>

                </h1>

              <div class="col s12">

                <ul class="box-adv mais-not">



                <?php query_posts(array( 'post_type' => 'post','showposts' => '2' )); ?>

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                <li>

                    <div class="det-foto">

                      

                        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( array(167, 167) ); ?></a>

                    </div><!--det-foto-->



                    <div class="det-adv">

                          <h3><span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span> <?php echo strip_tags(get_the_title()); ?></h3>

                          <p><?php // the_field('chamada'); ?><br><br>

                                <a href="<?php the_permalink(); ?>" style="font-weight:bold;font-size: 12px;">CONTINUAR LENDO</a></p>

                    </div><!--det-foto-->

                </li>

               <?php endwhile; endif; ?> 

          <?php wp_reset_query(); ?> 

              </ul><!--box-adv-->



              <p class="bt-link-not"><a href="<?php bloginfo('url'); ?>/n/noticias">MAIS NOTÍCIAS</a></p>

              </div>

            </div><!--row-->

        </div><!--container-->

    </section>



  <?php

  /* Busca o arquivo footer.php do tema e includa na página */

  get_footer();

?>

