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

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="relative grid-1440">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>

  <!-- Sidenav -->
  <section class="sidenav">
    <img class="logo-dark mb-30" src="img/logo_dark.png" alt="logo">
    <p>We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious.</p>
    <img src="img/sidenav_img.jpg" class="sidenav-img" alt="">
    <h6 class="mt-40">Get in Touch</h6>
    <address class="info-address">Philippines, Afela inc.<br> Talay st. 65, PO Box 6200 </address>
    <p>Phone: <a href="tel:+1-888-1554-456-123">+ 1-888-1554-456-123</a></p>
    <p>Email: <a href="mailto:themesupport@gmail.com">themesupport@gmail.com</a></p>
    <p>Fax: +63 918 4084 694</p>
    <div class="social-icons nobase dark mt-40">
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-facebook"></i></a>                  
      <a href="#"><i class="fa fa-google-plus"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-vimeo"></i></a>
    </div>

    <a href="#" id="sidenav-close">
      <i class="ui-close"></i>
    </a>
  </section> <!-- end sidenav -->

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
                        <li class="nav-icon-wrap hidden-sm hidden-xs">
                          <div id="nav-icon">
                            <div class="nav-icon-inner">
                              <a href="#" id="nav-icon-trigger" class="nav-icon-trigger">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                              </a>
                            </div>
                          </div>
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

      <section class="our-team">
        <div class="container">

          <div class="row heading-row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="heading">Últimos Ganhadores</h2>
              <p class="subheading">Sorteio semanal de 1 Gás</p>
            </div>
          </div>

          <div class="row">	 
		  <?php
			$i = 0;
			$retorno_row = $site->getGanhadores();
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
		<?php 	
				$i++;
				if($i == 3):
		?>
          </div>
          <div class="row">	 
		<?php 	
				$i = 0;
				endif;
				endforeach;
				unset($exrow);
			endif;
		?>
          </div>

        </div>
      </section>
	  
      <!-- Footer -->
	  <footer id="footer" class="site-footer mt-50">
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

		  <div class="copyright"><p>Desenvolvido por <a href="http://www.divulgacaoonline.com.br">Divulgação Online</a></p></div>
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