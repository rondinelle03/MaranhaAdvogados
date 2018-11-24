<!DOCTYPE html>

<html lang="pt_BR">

  <head>

    <meta charset="utf-8">

   

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->



     <meta name='description' content='' /> 

    <meta name='keywords' content='' />





     <title>

    

      <?php if (is_home()): ?>

          Maranhão Advogados

        <?php else: ?>

            <?php echo strip_tags(get_the_title()); ?> |  Maranhão Advogados

            

        <?php endif ?>

    </title>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-39838331-15"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-39838331-15');
</script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link  href="<?php bloginfo('template_url'); ?>/lib/materialize/css/materialize.css" rel="stylesheet">

    <link  href="<?php bloginfo('template_url'); ?>/lib/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">

    <link  href="<?php bloginfo('template_url'); ?>/lib/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link  href="<?php bloginfo('template_url'); ?>/lib/owl.carousel/owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="<?php bloginfo('template_url'); ?>/lib/principal.css?date=<? echo date ("Ymdhis")?>" rel="stylesheet">



     <?php wp_head() ?>

  </head>

  <body id="home">

  <?php if (is_home()): ?>

    <header class="azul-royal">

    <?php else: ?>

      <header class="interna">

      <?php endif ?>

      <div class="container">

          <div class="row">

              <nav>

                <div class="nav-wrapper"><a

                 <?php if (is_home()): ?> 

                   href="#home" 

                    <?php else: ?>

                      href="<?php bloginfo('url'); ?>"

     <?php endif ?> class="brand-logo"><img src="<?php bloginfo('template_url'); ?>/img/logo-maranhao.jpg" class="responsive-img"></a>

                  <a href="#!" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                  <ul class="right hide-on-med-and-down">

                  <?php if (is_home()): ?>

                    <li><a href="#link-nos">SOBRE NÓS</a></li>

                    <li><a href="#link-adv">NOSSOS ADVOGADOS</a></li>

                    <li><a href="<?php bloginfo('url'); ?>/areas-de-atuacao">ÁREAS DE ATUAÇÃO</a></li>

                    <li><a href="<?php bloginfo('url'); ?>/solucoes">SOLUÇÕES</a></li>

                    <li><a href="#link-not">JUSTIÇA COMENTADA</a></li>

 					<li><a href="<?php bloginfo('url'); ?>/contato">CONTATO</a></li>

                   <!-- <li><a href="<?php bloginfo('url'); ?>/localizacao">LOCALIZAÇÃO</a></li>

                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">CONTATE-NOS</a></li>-->

                    <?php else: ?>

                      <li><a href="<?php bloginfo('url'); ?>/sobre-nos">SOBRE NÓS</a></li>

                    <li><a href="<?php bloginfo('url'); ?>/advogado">NOSSOS ADVOGADOS</a></li>

                    <li><a href="<?php bloginfo('url'); ?>/areas-de-atuacao">ÁREAS DE ATUAÇÃO</a></li>

                    <li><a href="<?php bloginfo('url'); ?>/solucoes">SOLUÇÕES</a></li>

                    <li><a href="<?php bloginfo('url'); ?>/n/noticias">JUSTIÇA COMENTADA</a></li>

                    <li><a href="<?php bloginfo('url'); ?>/contato">CONTATO</a></li>

                   <!-- <li><a href="<?php bloginfo('url'); ?>/localizacao">LOCALIZAÇÃO</a></li>

                   <li><a class="dropdown-button" href="#!" data-activates="dropdown1">CONTATE-NOS</a></li>-->

                    <?php endif ?>

                  </ul>

                  <ul class="side-nav" id="mobile-demo">

                    <li><a href="<?php bloginfo('url'); ?>/sobre-nos">SOBRE NÓS</a></li>

                    <li><a href="<?php bloginfo('url'); ?>/advogado">NOSSOS ADVOGADOS</a></li>

                    <li><a href="<?php bloginfo('url'); ?>/areas-de-atuacao">ÁREAS DE ATUAÇÃO</a></li>

                    <li><a href="<?php bloginfo('url'); ?>/solucoes">SOLUÇÕES</a></li>

                    <li><a href="<?php bloginfo('url'); ?>/n/noticias">JUSTIÇA COMENTADA</a></li>

                   <!-- <li><a href="<?php bloginfo('url'); ?>/localizacao">LOCALIZAÇÃO</a></li>-->

                    <li><a href="<?php bloginfo('url'); ?>/contato">CONTATO</a></li>

                   <!-- <li><a href="<?php bloginfo('url'); ?>/trabalhe-conosco">TRABALHE CONOSCO</a></li>-->

                  </ul>

                </div>

              </nav>

          </div>  <!--row-->

      </div><!--container-->



      <ul id="dropdown1" class="dropdown-content">

         <li><a href="<?php bloginfo('url'); ?>/contato">FALE CONOSCO</a></li>

        <li class="divider"></li>

        <li><a href="<?php bloginfo('url'); ?>/trabalhe-conosco">TRABALHE CONOSCO</a></li>

      </ul>



    </header>

   