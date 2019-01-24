<?php
  /**
   * Classe Site
   *
   * @package Sistemas Divulgação Online
   * @author Geandro Bessa
   * @copyright 2013
   * @version 2
   */
  
  if (!defined("_VALID_PHP"))
      die('Acesso direto a esta classe não é permitido.');

  class Site
  {
      private static $db;

      /**
       * Site::__construct()
       * 
       * @return
       */
      function __construct()
      {
          self::$db = Registry::get("Database");
      }

      /**
       * Site::getSites()
       * 
       * @return
       */
      public function getSites($id_vendedor = 0)
      {
		  $sql = "SELECT max(v.id) as id, c.nome AS cliente, c.endereco, c.bairro, v.id_vendedor, v.id_cliente, sum(v.quantidade) as quantidade, sum(v.valor) as valor, sum(v.valor_total) as valor_total, min(v.id_status) as id_status, v.usuario, max(v.data_entrega) as data_entrega, s.status, v.usuario_cadastro, v.observacao " 
		  . "\n FROM vendas as v "
		  . "\n LEFT JOIN cliente as c ON c.id = v.id_cliente "
		  . "\n LEFT JOIN status as s ON s.id = v.id_status " 
		  . "\n WHERE v.id_vendedor = $id_vendedor AND v.id_status = 1 "
		  . "\n GROUP BY v.id_cliente, v.id_status"
		  . "\n ORDER BY max(v.id) DESC";
		  //echo $sql;
		  
          $row = self::$db->fetch_all($sql);

          return ($row) ? $row : 0;
      }

      /**
       * Site::getProdutos()
       * 
       * @return
       */
      public function getProdutos()
      {
		  $sql = "SELECT p.* " 
		  . "\n FROM produtos as p "
		  . "\n WHERE p.excluir = 0 AND p.app > 0 "
		  . "\n ORDER BY p.app ASC";
		  //echo $sql;
		  
          $row = self::$db->fetch_all($sql);

          return ($row) ? $row : 0;
      }

      /**
       * Site::getQuantClientes()
       * 
       * @return
       */
      public function getQuantClientes()
      {
		  $sql = "SELECT COUNT(1) AS quant " 
		  . "\n FROM cliente as c ";
          $row = self::$db->first($sql);

          return ($row) ? $row->quant : 0;
      }

      /**
       * Site::getQuantPremios()
       * 
       * @return
       */
      public function getQuantPremios()
      {
		  $sql = "SELECT COUNT(1) AS quant " 
		  . "\n FROM sorteios as c ";
          $row = self::$db->first($sql);

          return ($row) ? $row->quant : 0;
      }

      /**
       * Site::getQuantVendas()
       * 
       * @return
       */
      public function getQuantVendas()
      {
		  $sql = "SELECT COUNT(1) AS quant " 
		  . "\n FROM vendas as c ";
          $row = self::$db->first($sql);

          return ($row) ? $row->quant : 0;
      }
	  
      /**
       * Site::ProcessarPedido()
       * 
       * @return
       */
      public function ProcessarPedido()
      {
		$count = 0;
		$array_produtos[] = null;
		$produtos = self::getProdutos();		
		
		//foreach que lista os produtos da tabela e cria um array com os produtos solicitados
		foreach ($produtos as $p) :
		  //echo $p->descricao  .' quantidade pedida: '. post('q'.$p->id) . '<br>';
		  $produto = $p->id;
		  $quantidade = post('q'.$p->id);
		  
		  if ( $quantidade > 0 ) :
			$array_produtos[$count] = array ('id' => $produto, 'qtd' => $quantidade);		  
			$count++;			
		  endif;
		endforeach;

		//foreach que lista os produtos solicitados [TESTE]
		foreach ($array_produtos as $p) :
		  //echo $p['id']  .' quantidade pedida: '. $p['qtd'] . '<br>';
		endforeach;
		
		  $contar_produtos = count($array_produtos);
		  $nome = post('nome');
		  $telefone = post('telefone');
		  $endereco = post('endereco');
		  $referencia = post('referencia');
		  $bairro = post('bairro');
		  $cidade = post('cidade');
		  $id_pagamento = post('id_pagamento');
		  
		  if ($contar_produtos == 0)
              Filter::$msgs['id_produto'] = lang('MSG_ERRO_PRODUTO');	  
			
		  if (empty($_POST['nome']))
				Filter::$msgs['nome'] = lang('MSG_ERRO_NOME');	

          if (empty(Filter::$msgs)) {
				
				$telefone = post('telefone');
				$buscatelefone = substr($telefone, -9);
				$sql = "SELECT id_cliente FROM cliente_telefone WHERE telefone like '%$buscatelefone'";
				
				$row = self::$db->first($sql);
				
				if($row and strlen($row->id_cliente) > 0) {
					$id_cliente = $row->id_cliente;
					$endereco = $endereco." ".$referencia;
					$data = array(
						'id_empresa' => 1,
						'nome' => sanitize(strtoupper($nome)), 
						'endereco' => sanitize(strtoupper($endereco)), 
						'bairro' => sanitize(strtoupper($bairro)), 
						'cidade' => sanitize(strtoupper($cidade)), 
						'usuario' => "site",
						'data' => "NOW()"
					);
					self::$db->update("cliente", $data, "id=".$id_cliente);
				} else {
					$obs = "CLIENTE CADASTRADO PELO SITE";
					$endereco = $endereco." ".$numero." ".$complemento;
					$data = array(
						'id_empresa' => 1,
						'nome' => sanitize(strtoupper($nome)), 
						'endereco' => sanitize(strtoupper($endereco)), 
						'bairro' => sanitize(strtoupper($bairro)), 
						'cidade' => sanitize(strtoupper($cidade)), 
						'telefone' => $buscatelefone, 
						'observacao' => strtoupper($obs), 
						'data_cadastro' => "NOW()",
						'usuario' => "site",
						'data' => "NOW()"
					);
					$id_cliente = self::$db->insert("cliente", $data);
					$data_telefone = array(
						'id_cliente' => $id_cliente, 
						'telefone' => $buscatelefone, 
						'usuario' => "site",
						'data' => "NOW()"
					);
					self::$db->insert("cliente_telefone", $data_telefone);
				}
			
			for($i = 0;$i < $contar_produtos;$i++) {	
				$id_produto = $array_produtos['id'];
				$quantidade = $array_quantidade['qtd'];
				$valor_unidade = getValue("valor_venda","produtos","id=".$id_produto);
				$valor_total = $valor_unidade*$quantidade;
				$obs = "VENDA CADASTRADA PELO SITE";
				
				$data = array(
						'id_empresa' => 1,
						'id_produto' => $id_produto,  
						'id_cliente' => $id_cliente, 
						'nome' => sanitize(strtoupper($nome)), 
						'endereco' => sanitize(strtoupper($endereco)), 
						'bairro' => sanitize(strtoupper($bairro)), 
						'quantidade' => $quantidade,
						'valor' => $valor_unidade, 
						'valor_tabela' => $valor_unidade, 
						'valor_total' => $valor_total,
						'id_status' => 1,
						'observacao' => $obs, 
						'data_entrega' => "NOW()",
						'usuario_cadastro' => "site",
						'data_cadastro' => "NOW()",
						'usuario' => "site",
						'data' => "NOW()"
				  );
				  $id_venda = $db->insert("vendas", $data);
				  $retorno .= ">> id_venda[$id_venda]";
				  $controle = getValue("controle","produtos","id = ".$id_produto);
				  if($controle == 2){
					$ultima_compra = getValue("ultima_compra","cliente","id = ".$id_cliente);
					$data_atual = date('d/m/Y');
					$dias = contarDias(exibedata($ultima_compra), $data_atual);
					$dias = ($dias > 15) ? $dias : 30; 
					$proxima_compra = somarData($data_atual, $dias);
					$data_cliente = array(
						'ultima_compra' => dataMySQL($data_atual),
						'proxima_compra' => dataMySQL($proxima_compra),
						'dias' => ($dias),
						'id_proxima' => 0,
						'usuario' => "aplicativo",
						'data' => "NOW()"
					);
					$db->update("cliente", $data_cliente, "id=".$id_cliente);
				}
				
				$tipo = 1;
				
				if (validaTexto(strtoupper($pagamento), 'CHEQUE')) {
					$tipo = 2;
					$id_conta = getValue("id","conta","conta like '%CHEQUE%' and id_pai = 162");	
				} elseif (validaTexto(strtoupper($pagamento), 'DEBITO')) {
					$tipo = 3;
					$id_conta = getValue("id","conta","conta like '%DEBITO%' and id_pai = 162");	
				} elseif (validaTexto(strtoupper($pagamento), 'CREDITO')) {
					$tipo = 4;
					$id_conta = getValue("id","conta","conta like '%CREDITO%' and id_pai = 162");	
				} else {
					$id_conta = getValue("id","conta","conta like '%DINHEIRO%' and id_pai = 162");	
				}
				
				$data_venc = date('d/m/Y');
				$data_parcela = explode('/', $data_venc);
				$parcelas = 1;
				$data = array(
					'id_empresa' => 1,
					'id_conta' => $id_conta,
					'id_cliente' => $id_cliente,
					'id_venda' => $id_venda,
					'valor' => $valor_total,
					'parcelas' => 1,
					'data_pagamento' => "NOW()",
					'usuario' => "site",
					'data' => "NOW()"
				);
				$id_pagamento = $db->insert("pagamentos", $data);
				
				if ($tipo == 1) { 
					$data_pag = array(
						'id_empresa' => 1,
						'id_conta' => $id_conta,
						'id_cliente' => $id_cliente,
						'id_pagamento' => $id_pagamento,
						'valor' => $valor_total, 
						'valor_pago' => $valor_total, 
						'parcela' => '1',
						'total_parcelas' => '1',
						'data_vencimento' => "NOW()",
						'pago' => '1',
						'data_pagamento' => "NOW()"
					);
					$id_controle = $db->insert("pag_controle", $data_pag);
					
				  } elseif ($tipo == 3) {
					
					$taxa = getValue("taxa","cartoes","id = 2");				
					$valor_total = $valor_total - ($valor_total*$taxa/100);				
					$newData = date('Y-m-d', mktime(0, 0, 0, $data_parcela[1], $data_parcela[0] + 1, $data_parcela[2]) );
					
					$data_pag = array(
						'id_empresa' => 1,
						'id_conta' => $id_conta,
						'id_cliente' => $id_cliente,
						'id_venda' => $id_venda,
						'id_pagamento' => $id_pagamento,
						'valor' => $valor_total, 
						'valor_pago' => $valor_total, 
						'parcela' => '1',
						'total_parcelas' => '1',
						'data_vencimento' => $newData,
						'pago' => '1',
						'data_pagamento' => $newData,
						'data' => "NOW()"
					);
					$id_controle = $db->insert("pag_controle", $data_pag);
					
				  } elseif ($tipo == 4) {
					
					$dias = getValue("dias","cartoes","id = 1");
					$taxa = getValue("taxa","cartoes","id = 1");	
					$valor_total = $valor_total - ($valor_total*$taxa/100);
					$valor_parcela = $valor_total/$parcelas;
					
						for($i=1;$i<$parcelas+1;$i++)
						{
							$newData = date('Y-m-d', mktime(0, 0, 0, $data_parcela[1], $data_parcela[0] + ($i*$dias), $data_parcela[2]) );
							$data_pag = array(
								'id_empresa' => 1,
								'id_conta' => $id_conta,
								'id_cliente' => $id_cliente,
								'id_venda' => $id_venda,
								'id_pagamento' => $id_pagamento,
								'valor' => $valor_parcela, 
								'valor_pago' => $valor_parcela, 
								'parcela' => $i,
								'total_parcelas' => $parcelas,
								'data_vencimento' => $newData,
								'pago' => '1',
								'data_pagamento' => $newData,
							'data' => "NOW()"
							);
							$id_controle = $db->insert("pag_controle", $data_pag);
						}
					
				  } elseif ($tipo == 2) {
				  
					$valor_parcela = $valor_total/$parcelas;
					
						for($i=1;$i<$parcelas+1;$i++)
						{					
							$newData = date('Y-m-d', mktime(0, 0, 0, $data_parcela[1] + $i-1, $data_parcela[0], $data_parcela[2]) );
							$data_pag = array(
								'id_empresa' => 1,
								'id_conta' => $id_conta,
								'id_cliente' => $id_cliente,
								'id_venda' => $id_venda,
								'id_pagamento' => $id_pagamento,
								'valor' => $valor_parcela, 
								'parcela' => $i,
								'total_parcelas' => $parcelas,
								'data_vencimento' => $newData,
								'data' => "NOW()"
							);
							$id_controle = $db->insert("pag_controle", $data_pag);
						}
						
				  }			  
				  $retorno .= ">> id_controle[$id_controle]";				  
			}
			
              if (self::$db->affected()) {
                  Filter::msgOk($message);               
				  redirecionar("pedidos.php");
              } else
                  Filter::msgAlert(lang('NAOPROCESSADO'));
          } else
              print Filter::msgStatus();
      }
  }
?>













