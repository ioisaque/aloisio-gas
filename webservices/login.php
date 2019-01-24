<?php
  /**
   * Webservices: Login
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

	$nomeusuario = (get('nomeusuario')) ? get('nomeusuario') : post('nomeusuario');
	$senha = (get('senha')) ? get('senha') : post('senha');
	$nomeusuario = sanitize(strtolower($nomeusuario));
    $nomeusuario = $db->escape($nomeusuario);
    $senha = sanitize(strtolower($senha));
	
	$sql = "SELECT id, senha, active FROM usuario WHERE active = 'y' AND usuario = '" . $nomeusuario . "'";
	$result = $db->query($sql);
	if ($db->numrows($result) == 0) {
		echo 0;
	} else {
		$row = $db->fetch($result);
		$entered_pass = sha1($senha);
		if($entered_pass == $row->senha) {
			echo $row->id;
		} else {
			echo 0;
		}
	}

?>