<?php
  /**
   * Vendas
   *
   * @package Sistemas Divulgação Online
   * @author Geandro Bessa
   * @copyright 2018
   * @version 1
   */
   
	define('_VALID_PHP', true);
	require_once("init.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title><?php echo lang('ALOISIO_GAS');?></title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7COpen+Sans:400,400i,700%7CNoto+Serif:400i' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="revolution/css/settings.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/rev-slider.css" />
  <link rel="stylesheet" href="css/sliders.css" />
  <link rel="stylesheet" href="css/style.css" />

  <?php $url = 'http://www.sige.pro.br/padraoWeb/divulgacao_online/'; ?>
  <!-- Favicons -->
  <link rel="shortcut icon" href="<?=$url;?>favicon.png">
  <link rel="apple-touch-icon" href="<?=$url;?>favicon_60x60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=$url;?>favicon_76x76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?=$url;?>favicon_120x120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?=$url;?>favicon_152x152.png">

</head>

<body class="relative grid-1440">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>

  <main class="main-wrapper oh">

    <header class="nav-type-1">

      <!-- Fullscreen search -->
      <div class="search-wrap">
        <div class="search-inner">
          <div class="search-cell">
            <form method="get">
              <div class="search-field-holder">
                <input type="search" class="form-control main-search-input" placeholder="Search for">
                <i class="ui-close search-close" id="search-close"></i>
              </div>            
            </form>
          </div>
        </div>        
      </div> <!-- end fullscreen search -->
    
      <nav class="navbar navbar-static-top">
        <div class="navigation" id="sticky-nav">
          <div class="container relative">

            <div class="row">

              <div class="navbar-header">
                <!-- Logo -->
                <div class="logo-container">
                  <div class="logo-wrap">
                    <a href="index.php">
                      <img class="logo-dark" src="img/logo_dark.png" alt="logo">
                    </a>
                  </div>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div> <!-- end navbar-header -->

              <div class="nav-wrap right">
                <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                  
                  <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                      <a href="index.php">Home</a>
                    </li>

                    <li class="dropdown">
                      <a href="pedidos.php">Pedidos</a>
                    </li>

                    <li class="dropdown">
                      <a href="ganhadores.php">Ganhadores</a>
                    </li>

                    <li class="dropdown">
                      <a href="faq.php">FAQ</a>
                    </li>

                    <li class="dropdown">
                      <a href="contato.php">Contato</a>
                    </li>

                    <!-- Nav right -->
                    <li class="nav-right hidden-sm hidden-xs">
                      <ul>
                        <li class="nav-search-wrap hidden-sm hidden-xs">
                          <a href="#" class="nav-search search-trigger">
                            <i class="ui-search"></i>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li id="mobile-search" class="hidden-lg hidden-md">
                      <form method="get" class="mobile-search">
                        <input type="search" class="form-control" placeholder="Pesquisa...">
                        <button type="submit" class="search-button">
                          <i class="ui-search"></i>
                        </button>
                      </form>
                    </li>

                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->         
          
            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header>

    <div class="content-wrapper oh">

      <!-- Revolution Slider -->
      <section>
        <div class="rev_slider_wrapper" id="home">
          <div class="rev_slider" id="slider1">
            <ul>
              <!-- SLIDE 1 -->
              <li data-fstransition="fade"
                data-transition="fade"
                data-slotamount="1"
                data-masterspeed="1000"
                data-delay="5000"
                data-title="Creative Minimalism">

                <!-- MAIN IMAGE -->
                <img src="img/revolution/ny_slide_1.jpg"
                  alt=""
                  data-bgrepeat="no-repeat"
                  data-bgfit="cover"
                  data-bgparallax="7"
                  class="rev-slidebg">
              </li>
			  
              <!-- SLIDE 2 -->
              <li data-fstransition="fade"
                data-transition="fade"
                data-slotamount="1"
                data-masterspeed="1000"
                data-delay="5000"
                data-title="Creative Minimalism">

                <!-- MAIN IMAGE -->
                <img src="img/revolution/ny_slide_2.jpg"
                  alt=""
                  data-bgrepeat="no-repeat"
                  data-bgfit="cover"
                  data-bgparallax="7"
                  class="rev-slidebg">
              </li>
			  
              <!-- SLIDE 3 -->
              <li data-fstransition="fade"
                data-transition="fade"
                data-slotamount="1"
                data-masterspeed="1000"
                data-delay="5000"
                data-title="Creative Minimalism">

                <!-- MAIN IMAGE -->
                <img src="img/revolution/ny_slide_3.jpg"
                  alt=""
                  data-bgrepeat="no-repeat"
                  data-bgfit="cover"
                  data-bgparallax="7"
                  class="rev-slidebg">              
              </li>
			  
             <!-- SLIDE 4 -->
              <li data-fstransition="fade"
                data-transition="fade"
                data-slotamount="1"
                data-masterspeed="1000"
                data-delay="5000"
                data-title="Creative Minimalism">

                <!-- MAIN IMAGE -->
                <img src="img/revolution/ny_slide_4.jpg"
                  alt=""
                  data-bgrepeat="no-repeat"
                  data-bgfit="cover"
                  data-bgparallax="7"
                  class="rev-slidebg">              
              </li>			  
            </ul>
          </div>
        </div>
      </section> <!-- end rev slider -->
	  
	<!-- Icon Boxes -->
      <section class="section-wrap icon-boxes bg-light pb-100">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-3 mb-40">
              <div class="service-item-box style-7 flip-card text-center">
                <div class="front">
					<img src="img/icons/web_color.png" alt="">
                </div>
                <div class="back">
                  <h4 class="uppercase mb-20">Site</h4>
                  <a href="pedidos.php" class="btn btn-md btn-color"><span>Peça agora!</span></a>
                </div>
              </div>            
            </div> <!-- end service item -->

            <div class="col-md-3 col-sm-3 mb-40">
              <div class="service-item-box style-7 flip-card text-center">
                <div class="front">
					<img src="img/icons/app_color.png" alt="">
                </div>
                <div class="back">
                  <h4 class="uppercase mb-20">App</h4>
                  <a href="https://play.google.com/store/apps/details?id=br.com.divulgacaoonline" class="btn btn-md btn-color"><span>Baixar</span></a>
                </div>
              </div>            
            </div> <!-- end service item -->

            <div class="col-md-3 col-sm-3 mb-40">
              <div class="service-item-box style-7 flip-card text-center">
                <div class="front">
					<img src="img/icons/whats_color.png" alt="">
                </div>
                <div class="back">
                  <h4 class="uppercase mb-20">WhatsApp</h4>
                  <a href="https://api.whatsapp.com/send?phone=5531986990132" class="btn btn-md btn-color"><span>Fale com a gente!</span></a>
                </div>
              </div>            
            </div> <!-- end service item -->
			
            <div class="col-md-3 col-sm-3 mb-40">
              <div class="service-item-box style-7 flip-card text-center">
                <div class="front">
					<img src="img/icons/phone_color.png" alt="">
                </div>
                <div class="back">
                  <h4 class="uppercase mb-20">31 3828 4900</h4>
                  <a href="tel:38284900" class="btn btn-md btn-color"><span>Ligue agora!</span></a>
                </div>
              </div>            
            </div> <!-- end service item -->			

          </div>
        </div>
      </section> <!-- end icon boxes -->	  

      <!-- Intro -->
      <section class="section-wrap intro" id="intro">
		<div class="container centered">
			<div class="row heading-row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="heading">Sobre nós</h2>
            </div>
          </div>
		  
		  <div class="row">	
				<div class="col-md-12 mt-30">
				  <p>Empresa constituída em agosto de 1993, na cidade de Ipatinga (MG), à Av. Monteiro Lobato, 675, bairro Cidade Nobre. Em 1998 mudou-se para imóvel próprio à Av. Carlos Chagas, 885, no mesmo bairro. A tele-entrega teve início a partir de então devido às necessidades dos clientes. Depois disso só vem aperfeiçoando o seu atendimento, com investimentos na área pessoal, com tecnologia avançada e adequada às novas leis da ANP, com uma estrutura moderna e funcional. </p>
				</div>	
				
				
				<div class="row">
				  <div class="col-md-4 col-sm-6">
					<div class="icon-wrap"><img src="img/vision.png" alt="Aloisio Gas"></div>
					<h4>VISÃO</h4>
					<p>Ser uma empresa em perfeita integração junto aos seus clientes</p>
				  </div>

				  <div class="col-md-4 col-sm-6">
					<div class="icon-wrap"><img src="img/mission.png" alt="Aloisio Gas"></div>
					<h4>MISSÃO</h4>
					<p>Levar aos nossos clientes, segurança e comodidade, com agilidade, competência e responsabilidade.</p>
				  </div>

				  <div class="col-md-4 col-sm-6">
					<div class="icon-wrap"><img src="img/objective.png" alt="Aloisio Gas"></div>
					<h4>OBJETIVO</h4>
					<p>Atender melhor a cada dia mais e com maior compromisso e uma equipe eficiente.</p>
				  </div>

				</div>
				
			</div>
		  </div>
      </section><!-- end intro -->

      <!-- Counters -->
      <section class="bg-color pt-30 pb-30 pb-mdm-10">
			<center><img src="img/banner-aloisio.jpg"></center>
      </section> <!-- end Counters -->

      <!-- Winners -->
      <section class="section-wrap our-team pb-50 pb-mdm-40">
        <div class="container">

          <div class="row heading-row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="heading">Últimos Ganhadores</h2>
              <p class="subheading">Sorteio semanal de 1 Gás</p>
            </div>
          </div>

          <div class="row">	 
		  <?php 	
			$retorno_row = $site->getGanhadores(true);
			if($retorno_row):
				foreach ($retorno_row as $exrow):
		?>		  
            <div class="col-sm-4 mb-40 animated-from-left">
              <div class="team-wrap">
                <div class="team-member">
                  <div class="team-img hover-trigger hover-2">
                    <img src="<?php echo "http://sistema.aloisiogas.com.br/uploads/data/".$exrow->nome_arquivo;?>" alt="">
                  </div>
                  <div class="team-details text-center">                
                    <h4 class="team-title uppercase"><?php echo $exrow->nome;?></h4>
                    <span><?php echo $exrow->data_sorteio;?></span> 
                  </div>                            
                </div>
              </div>
            </div>
		<?php 	endforeach;
				unset($exrow);
			endif;?>
          </div>

        </div>
      </section> <!-- end our team -->
	  
	  <img src="img/bottom_banner.jpg">
	
      <!-- Footer -->
	  <footer id="footer" class="site-footer">
		<div class="container">

		  <div id="sidebar-footer-1">
			<div class="row">

			  <aside class="widget col-md-3 col-sm-6">
				<h5 class="widget-title">Nosso endereço</h5>
				<div class="textwidget">
				  <div class="adr">
					<div class="street-address">Avenida Carlos Chagas, 885</div>
					<span class="locality">Cidade Nobre</span>,<br>
					<abbr class="region">Ipatinga/MG</abbr>,<br>
					<span class="postal-code">35162-359</span>
				  </div>
				</div>
			  </aside>

			  <aside class="widget col-md-3 col-sm-6">
				<h5 class="widget-title">Nossos contatos</h5>
				<div class="textwidget">
				  <div>Telefone: <span class="tel">(31) 3828-4900</span></div>
				  <div>DDG: <span class="tel">0800 035 0505</span></div>
				  <div>WhatsApp: <span class="tel">(31) 8699-0132</span></div>
				  <div>E-mail: <a class="url" href="contato@aloisiogas.com.br">contato@aloisiogas.com.br</a></div>
				</div>
			  </aside>

			  <aside class="widget col-md-3 col-sm-6">
				<h5 class="widget-title">Nossos horários</h5>
				<div class="textwidget">
				  <div>Seg. a sexta: <span class="url">07:00hs às 21:00hs</span></div>
				  <div>Sábado: <span class="url">07:00hs às 20:00hs</span></div>
				  <div>Domingo: <span class="url">08:00hs às 12:00hs</span></div>
				</div>
			  </aside>

			  <aside class="widget col-md-3 col-sm-6">
				<h5 class="widget-title">Fique por dentro!</h5>
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Seu Email">
				  <span class="input-group-btn">
					<button class="btn btn-danger" type="button"><i class="fa fa-arrow-right"></i></button>
				  </span>
				</div>
				<ul class="social-links">
				  <li><a href="https://www.facebook.com/aloisiogas" target="_blank"><i class="fa fa-facebook"></i></a></li>
				  <li><a href="https://plus.google.com/104892571527959825094/about" target="_blank"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			  </aside>

			</div>
		  </div>

		  <div class="copyright">
			<?=file_get_contents($url.'rodape_light.html');?>
		  </div>
		</div>
	  </footer>


      <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
      </div>

    </div> <!-- end content wrapper -->
  </main> <!-- end main wrapper -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>  
  <script type="text/javascript" src="js/scripts.js"></script>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="js/rev-slider.js"></script>
  

  <!-- Cookies -->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
  <script>
  window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#f7f7f7",
        "text": "#6c6c6c"
      },
      "button": {
        "background": "#23abc4",
        "text": "#ffffff"
      }
    },
    "theme": "classic",
    "content": {
      "header": 'Cookies used on the website!',
      "message": 'Este site utiliza cookies para melhorar a sua experiência!',
      "dismiss": 'Ok!',
      "allow": 'Allow cookies',
      "deny": 'Decline',
      "link": 'Learn more',
      "href": 'http://cookiesandyou.com',
    }
  })
  });
  </script> 


  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    
</body>
</html>