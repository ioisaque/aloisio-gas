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

      <!-- Accordions & Toggles -->
      <section>
        <div class="container">
		
          <div class="row heading-row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="heading">FAQ</h2>
              <p class="subheading">Perguntas frequentes.</p>
            </div>
          </div>
		  
          <div class="row">
              <!-- Accordions -->
              <div class="panel-group accordion mb-50" id="accordion">
                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="minus">Vazamento no botijão antes de conectar o regulador<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                      Caso você perceba que seu botijão está com vazamento de gás, faça o teste com água e sabão antes de conectar o seu regulador de gás. Prepare uma mistura de água com sabão e aplique na região da válvula e plugue de segurança. Caso apareçam bolhas é porque há vazamento. Evite faíscas e ligar ou desligar equipamentos elétricos. Ventile o ambiente abrindo portas e janelas. Se possível, retire o botijão para um ambiente externo.
					  Solicite assistência técnica Aloísio Gás através do 0800 035 0505. O seu botijão será substituído.
                    </div>
                  </div>
                </div>

                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="plus">Vazamento no botijão depois de conectar o regulador<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                      <span>
						Você comprou seu botijão de gás e sentiu o odor característicos de gás?

						Para ter certeza do vazamento, faça o teste aplicando uma mistura de água com sabão na região da válvula da botija onde está fixado o seu regulador. Caso apareça bolhas é porque há vazamento.
						Evite faíscas e ligar ou desligar equipamentos elétricos. Ventile o ambiente abrindo portas e janelas. Retire o botijão para um ambiente externo.
						Solicite assistência técnica Aloísio Gás através do 0800 035 0505.
						Nunca utilize sabão em barra para tentar sanar um vazamento. Isso fará com que o cheiro do gás seja retirado, mas o gás continuará vazando.
					  </span>
                    </div>
                  </div>
                </div>

                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="plus">O gás está pretejando o fundo das panelas<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                      O Gás Liquefeito de Petróleo, também conhecido como gás de cozinha, queima em sua totalidade e não forma fuligem quando queimado na proporção correta de combustível e oxigênio.
					  Quando a mistura fica fora do especificado a chama fica amarela e forma monóxido de carbono, que é fumaça preta. Logo, a chama fica amarela quando as bocas do fogão estão entupidas ou quando o gás na botija está chegando ao fim.
					  Faça uma limpeza nos queimadores e injetores do seu fogão para liberar a passagem de gás e ar para que a mistura volte à proporção correta. Assim suas panelas não ficarão pretas.
                    </div>
                  </div>
                </div>
				
                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="plus">Vazamento no regulador ou na mangueira<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                      O regulador e a mangueira fazem parte de conjunto de ligação do seu fogão. São peças distintas que possuem prazo de validade de 5 anos a partir da data de fabricação. Os pontos de vazamento podem ser na conexão do fogão com a mangueira, na parte atrás do fogão, na conexão da mangueira com o regulador, e na conexão do regulador com a botija. Ao identificar um vazamento nessas conexões, desconecte o regulador imediatamente e adquira um novo conjunto de ligação com o seu revendedor mais próximo, na Aloísio Gás através do 0800 035 0505 ou em lojas especializadas. Escolha sempre produtos aprovados pelo Inmetro e com a marca da NBR estampadas nessas peças. Evite faíscas e ligar ou desligar equipamentos elétricos. Ventile o ambiente abrindo portas e janelas.
                    </div>
                  </div>
                </div>		
				
                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="plus">Vazamento no fogão<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                      Vazamento no fogão podem acontecer na saída do gás que fica atrás do fogão, nos queimadores ou no forno. Nesses casos, desligue o registro de gás da botija e os queimadores do fogão de imediato. Evite faíscas e ligar ou desligar equipamentos elétricos. Ventile o ambiente abrindo portas e janelas. Entre em contato com a Assistência Técnica do fogão. Recomendamos não voltar a utilizar o fogão até que o problema seja resolvido.
                    </div>
                  </div>
                </div>		
				
                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" class="plus">Botijão suando ou congelando<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body">
                      O seu equipamento está consumindo mais gás que o botijão pode suprir, será necessário aumentar a vazão da central de gás que você está usando para poder atender o seu consumo. Considere usar cilindros de 45kg para suprir a demanda do equipamento. Botijões suados não oferecem riscos significativos de segurança.
					  Solicite assistência técnica no 0800 035 0505.
                    </div>
                  </div>
                </div>						
				
                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" class="plus">Botijão conectado mas não acende<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapseSeven" class="panel-collapse collapse">
                    <div class="panel-body">
                      Você acabou de trocar seu botijão de gás, mas o queimador do seu fogão não está acendendo? Apesar de estar conectado na sua botija, o regulador não acionou a válvula e não liberou o gás. Neste caso, você precisa solicitar Assistência Técnica através do 0800 709 9292 para que o técnico analise a situação.

					  Se o problema for no seu regulador de gás, não tente fazer você mesmo esse conserto. Você precisará adquirir uma nova peça com o seu revendedor mais próximo, na Fogás ou em lojas especializadas.
					  
					  Se o problema puder ser resolvido no local, o técnico liberará a botija para uso. Caso contrário, a sua botija será substituída. Mas somente o técnico pode fazer essa avaliação.
                    </div>
                  </div>
                </div>							
				
                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" class="plus">Botijão abaixo do peso<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapseEight" class="panel-collapse collapse">
                    <div class="panel-body">
                      O sistema de enchimento dos botijões Aloísio Gás garantem a quantidade efetiva de gás, ressalvadas pelas determinações da Portaria INMETRO nº 225/2009. Recomendamos a compra do botijão de gás exclusivamente em revendas autorizadas pela ANP ( Agência Nacional de Petróleo, Gás Natural e Biocombustíveis) e que os botijões estejam devidamente lacrados. Somente isso garante que não houve adulteração do produto até a chegada em sua residência. Todas as revendas autorizadas Aloísio Gás possuem balanças a disposição dos clientes para verificação de peso.
                    </div>
                  </div>
                </div>										
				
                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine" class="plus">Regulador com ruídos<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapseNine" class="panel-collapse collapse">
                    <div class="panel-body">
                      É normal algum nível de chiado no regulador de gás do botijão. Contudo, se o nível de chiado for acima do usual, substitua o regulador por outro novo. A botija de gás não promove chiados elevados. Não tente fazer você mesmo esse conserto no regulador de gás e nem adquira reguladores de segunda mão. Adquira uma nova peça com o seu revendedor mais próximo, no Aloísio Gás ou em lojas especializadas. Assegure-se que seu regulador é aprovado pelo Inmetro e possui a marca da NBR estampada na peça. Tanto o regulador quanto a mangueira possuem validade de 5 anos a partir da data de fabricação.
                    </div>
                  </div>
                </div>				
              </div>  
          </div> <!-- end row -->
        </div> <!-- end container -->
      </section> <!-- end accordions & tabs -->

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
    
</body>
</html>