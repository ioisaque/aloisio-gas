<?php
  /**
   * Webservices: Produtos
   *
   * @package Sistemas Divulgaчуo Online
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
	
	$id_cliente = (get('id_cliente')) ? get('id_cliente') : post('id_cliente');

	if($id_cliente) {
		$row_produtos = $venda->getProdutosCliente($id_cliente);
		if($row_produtos) {
			foreach ($row_produtos as $exrow){
				$produtos[] = array(
					"status" => $exrow->status,
					"venda" => $exrow->id,
					"produto" => $exrow->produto,
					"quantidade" => $exrow->quantidade,
					"observacao" => $exrow->observacao,
					"valor" => $exrow->valor_total,
					"valor_venda" => moeda($exrow->valor_total)
				);
			}
			unset($exrow);
			echo json_encode($produtos);
		} else {
			$erro = array(
					"cod" => "Erro de conexao"
				);
			echo json_encode($erro);
		}
	} else {
		$erro = array(
				"cod" => "Erro entregador"
			);
		echo json_encode($erro);
	}
?>