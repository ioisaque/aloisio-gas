<?php
  /**
   * Webservices: Pedidos
   *
   * @package Sistemas Divulgação Online
   * @author Geandro Bessa
   * @copyright 2013
   * @version 2
   */

	set_time_limit(0);
	ini_set('memory_limit', '-1');
	ini_set('max_execution_time', 6000);
	ini_set('fastcgi_read_timeout', 6000);
	ini_set('default_socket_timeout', 9000);	
	define('_VALID_PHP', true);
	require('../init.php');

	$id_cliente = 0;
	$id_conta = 0;
	$nome = "";
	$telefone = "";
	$endereco = "";
	$numero = "";
	$complemento = "";
	$bairro = "";
	$cidade = "";
	$pagamento = "";
	$datahora = "";
	
try {
	
	$json_string = isset($_REQUEST['json']) ? $_REQUEST['json'] : "";
	$json_array = json_decode($json_string,true);
	$id_cliente = 0;
	$id_venda = 0;
	$id_controle = 0;
	$id_status = "0";
	$status = "";
	$retorno = $json_string;
	
	$nome = "";
	$telefone = "";
	$endereco = "";
	$numero = "";
	$complemento = "";
	$bairro = "";
	$cidade = "";
	$pagamento = "";
	$datahora = "";
	$json_produtos = array();
	
	if ($json_array) {
		foreach($json_array as $nome_campo => $valor) {
			if($nome_campo == "produtos")
				$json_produtos = $valor;	
			if($nome_campo == "nome")
				$nome = $valor;	
			if($nome_campo == "telefone")
				$telefone = $valor;
			if($nome_campo == "endereco")
				$endereco = $valor;
			if($nome_campo == "numero")
				$numero = $valor;
			if($nome_campo == "complemento")
				$complemento = $valor;
			if($nome_campo == "bairro")
				$bairro = $valor;
			if($nome_campo == "cidade")
				$cidade = $valor;
			if($nome_campo == "pagamento")
				$pagamento = $valor;
			if($nome_campo == "datahora")
				$datahora = $valor;
		}
		$buscatelefone = substr($telefone, -9);
		
		if($json_produtos){
			
			$sql = "SELECT id_cliente FROM cliente_telefone WHERE telefone like '%$buscatelefone'";
			$row = $db->first($sql);
			if($row and strlen($row->id_cliente) > 0) {
				$id_cliente = $row->id_cliente;
				$nome = getValue("nome", "cliente", "id=".$row->id_cliente);
				$endereco = getValue("endereco", "cliente", "id=".$row->id_cliente);
				$bairro = getValue("bairro", "cliente", "id=".$row->id_cliente);
			} else {
				$obs = "CLIENTE CADASTRADO PELO APLICATIVO";
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
					'usuario' => "aplicativo",
					'data' => "NOW()"
				);
				$id_cliente = $db->insert("cliente", $data);
				$data_telefone = array(
					'id_cliente' => $id_cliente, 
					'telefone' => $buscatelefone, 
					'usuario' => "aplicativo",
					'data' => "NOW()"
				);
				$db->insert("cliente_telefone", $data_telefone);
			}
			
			$retorno .= ">> id_cliente[$id_cliente]";
			$contar_produtos = count($json_produtos);
			for($i = 0;$i < $contar_produtos;$i++) {
				$produtos = $json_produtos[$i];			
				$id_produto = $produtos['id_produto'];
				$valor_unidade = $produtos['valor'];
				$quantidade = $produtos['quantidade'];
				$valor_total = $valor_unidade*$quantidade;
				$obs = "VENDA CADASTRADA PELO APLICATIVO";
				
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
						'data_entrega' => $datahora,
						'usuario_cadastro' => "aplicativo",
						'data_cadastro' => $datahora,
						'usuario' => "aplicativo",
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
					$id_conta = getValue("id","conta","conta like '%CHEQUE%'");	
				} elseif (validaTexto(strtoupper($pagamento), 'DEBITO')) {
					$tipo = 3;
					$id_conta = getValue("id","conta","conta like '%DEBITO%'");	
				} elseif (validaTexto(strtoupper($pagamento), 'CREDITO')) {
					$tipo = 4;
					$id_conta = getValue("id","conta","conta like '%CREDITO%'");	
				} else {
					$id_conta = getValue("id","conta","conta like '%DINHEIRO%'");	
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
					'data_pagamento' => $datahora,
					'usuario' => "aplicativo",
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
						'data_vencimento' => $datahora,
						'pago' => '1',
						'data_pagamento' => $datahora,
					);
					$id_controle = $db->insert("pag_controle", $data_pag);
					
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
						
				  }	elseif ($tipo == 3) {
					
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
				  } 
				  $retorno .= ">> id_controle[$id_controle]";				  
			}
		}
		if ($db->affected()) {
			$id_status = "1";
			$status = "Sucesso";
		} else {
			$id_status = "0";
			$status = "Erro - BANCO DE DADOS";
		}
	} else {
		$id_status = "0";
		$status = "Erro - JSON";
	}
} catch (Exception $e) {
		$id_status = "0";
		$status = "Erro - EXCEÇÃO: ".$e->getMessage();
}

$jsonRetorno = array(
	"id_venda" => $id_venda,
	"id_status" => $id_status,
	"status" => $status,
	"retorno" => $retorno
);
echo json_encode($jsonRetorno);
?>