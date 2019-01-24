<?php
  /**
   * Arquivo de linguagem
   *
   * @package Sistema Divulgação Online
   * @author Geandro Bessa
   * @copyright 2013
   * @version 2
   */
   
  if (!defined("_VALID_PHP"))
      die('Acesso direto a esta classe não é permitido.');
?>
<?php

  //add your locale settings here
  function lang($phrase)
  {
      static $lang = array(
	  
			/* == Tradução em Português Global  == */
			'ALOISIO_GAS' => 'Aloísio Gás',
			'CLIENTES_ATENDIDOS' => 'Clientes atendidos',
			'CLIENTES_PREMIADOS' => 'Clientes premiados',
			'PRODUTOS_ENTREGUES' => 'Produtos entregues',
			'SIM' => 'SIM',
			'NAO' => 'NÃO',
			'VOLTAR' => 'Voltar',
			
			/* == Admin Mensagens de Erro  == */
			'MSG_PADRAO' => 'Campo inválido',			
			'MSG_ERRO_PRODUTO' => 'Selecione pelo menos um PRODUTO para entrega.',	
			'MSG_ERRO_NOME' => 'O campo NOME é obrigatório.',
			'MSG_ERRO_TEL' => 'O campo TELEFONE é obrigatório.',	
			'MSG_ERRO_ENDERECO' => 'O campo ENDEREÇO é obrigatório.',	
			'MSG_ERRO_BAIRRO' => 'O campo BAIRRO é obrigatório.',	
			'MSG_ERRO_CIDADE' => 'O campo CIDADE é obrigatório.',	
			'MSG_ERRO_FORMA_PAG' => 'O campo FORMA DE PAGAMENTO é obrigatório.',
			
			'MSG_ERRO_GENERICO' => 'Ocorreu um ou mais erros ao processar a solicitação'
	  );
      
	  return $lang[$phrase];
  }
?>
