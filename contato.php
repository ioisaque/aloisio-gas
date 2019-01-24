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
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/sliders.css" />
  <link rel="stylesheet" href="css/style.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="relative" >

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
    <p>Envie suas sugestões, críticas e elogios, queremos te ouvir!</p>
    <img src="img/sidenav_img.jpg" class="sidenav-img" alt="">
    <h6 class="mt-40">Informações</h6>
    <address class="info-address">Avenida Carlos Chagas, 885<br>
                Cidade Nobre,<br>
                Ipatinga - MG<br>
                35162-359</address>
    <p>Telefone: <a href="tel:+55 31 3828 4900">+55 31 3828 4900</a></p>
    <p>Email: <a href="mailto:contato@aloisiogas.com.br">contato@aloisiogas.com.br</a></p>
    <div class="social-icons nobase dark mt-40">
      <a href="https://www.facebook.com/aloisiogas"><i class="fa fa-facebook"></i></a>                  
      <a href="https://plus.google.com/104892571527959825094/about"><i class="fa fa-google-plus"></i></a>
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

      <!-- Contact -->
      <section>
        <div class="container">
		
          <div class="row heading-row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="heading">Contato</h2>
              <p class="subheading">Envie suas sugestões, críticas e elogios, queremos te ouvir!</p>
            </div>
          </div>
		  
          <div class="row">

            <div class="col-md-4 mb-40">
              <h5 class="uppercase">Informações</h5>

              <div class="contact-item">
                <div class="contact-icon">
                  <i class="icon-Map-Pin4"></i>
                </div>
                <p>Avenida Carlos Chagas, 885<br>
                Cidade Nobre,<br>
                Ipatinga - MG<br>
                35162-359</p>
              </div> <!-- end address -->

              <div class="contact-item">
                <div class="contact-icon">
                  <i class="icon-Phone-InTalk"></i>
                </div>
                <span><a href="tel:+553138284900">31 3828 4900</a></span>
              </div> <!-- end phone number -->

              <div class="contact-item">
                <div class="contact-icon">
                  <i class="icon-At-Symbol"></i>
                </div>
                <a href="mailto:contato@aloisiogas.com.br">contato@aloisiogas.com.br</a>
              </div> <!-- end email -->

            </div>

            <div class="col-md-8">
               <form id="contactForm" action="#">
                <div class="row">
                  <div class="col-md-6 contact-name">
                    <input name="nome" id="nome" type="text" placeholder="Nome*" required>
                  </div>
                  <div class="col-md-6 contact-email">
                    <input name="email" id="email" type="email" placeholder="E-mail*" required>
                  </div>
                </div>

                <textarea name="mensagem" id="mensagem" rows="8" placeholder="Mensagem" required></textarea>
                  <button type="submit" class="btn btn-lg btn-color btn-submit" id="submit">Enviar Mensagem</button>
              </form>
            </div> <!-- end col -->

          </div>
        </div>
      </section> <!-- end contact -->

      <!-- Google Map 
      <div class="gmap" id="google-map" data-address="V Tytana St, Manila, Philippines"></div>--> 

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

		  <div class="copyright">
			<?php $url = 'http://www.sige.pro.br/padraoWeb/divulgacao_online/'; ?>
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
  <!-- Notify --> 
  <script type="text/javascript" src="js/sendMail.js"></script>
  <script type="text/javascript" src="notify/bootstrap-notify.min.js"></script>    
</body>
</html>