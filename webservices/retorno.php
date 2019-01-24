<?php
  /**
   * Webservices: Pedidos
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
	$id_vendedor = (get('id_usuario')) ? get('id_usuario') : post('id_usuario');
	$id_status = (get('id_status')) ? get('id_status') : post('id_status');
	if($id_vendedor) {
		$nomeusuario = getValue("usuario", "usuario", "id=".$id_vendedor);
		if($id_status == 3) {
			$acerto = 1;
			
			$data_pagamento = array(
				'acerto' => $acerto,
				'usuario' => $nomeusuario,
				'data' => "NOW()"
			);
			$db->update("pagamentos", $data_pagamento, "id_cliente = $id_cliente AND id_vendedor = $id_vendedor AND acerto = 0");
		}
		if($id_status) {
			$data = array(
				'id_status' => $id_status,
				'usuario' => $nomeusuario,
				'data' => "NOW()"
			);
			$db->update("vendas", $data, "id_cliente = $id_cliente AND id_vendedor = $id_vendedor ");
			echo 1;
		} else {
			echo 0;
		}
	} else {
		echo 0;
	}
?>