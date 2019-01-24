<?php
  /**
   * Vendas
   *
   * @package Sistemas Divulgação Online
   * @author Geandro Bessa
   * @copyright 2018
   * @version 1
   */
  if (!defined("_VALID_PHP"))
      die('Acesso direto a esta classe não é permitido.');
  if (!$usuario->is_Todos())
	  redirect_to("login.php");

?>
<div class="container-fluid" id="content">
	<div id="main">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-color box-bordered">
						<div class="box-title">
							<h3>
								<i class="glyphicon-vimeo"></i>
								<?php echo lang('VENDAS');?>
							</h3>
						</div>
						<div class="box-content nopadding">
							<table class="table table-nomargin table-bordered">
								<thead>
									<tr>
										<th class='hidden-480'><?php echo lang('DATA');?></th>
										<th class='hidden-480'><?php echo lang('HORA');?></th>
										<th><?php echo lang('CLIENTE');?></th>
										<th><?php echo lang('ENDERECO');?></th>
										<th class='hidden-1024'><?php echo lang('PAGAMENTO');?></th>
										<th class='hidden-768'><?php echo lang('VALOR');?></th>
										<th class='hidden-768'><?php echo lang('STATUS');?></th>
										<th class='hidden-1024'><?php echo lang('ATENDENTE');?></th>
									</tr>
								</thead>
								<tbody>
								<?php 	
										$retorno_row = $venda->getVendas($usuario->uid);
										if($retorno_row):
										foreach ($retorno_row as $exrow):
									?>
									<tr style="background-color:#<?php echo getCorStatus($exrow->id_status);?>;">
										<td class='hidden-480'><?php echo exibedata($exrow->data_entrega);?></td>
										<td class='hidden-480'><?php echo exibeHora($exrow->data_entrega);?></td>
										<td><a href="index.php?do=clientes&id_cliente=<?php echo $exrow->id_cliente;?>"><?php echo $exrow->cliente;?></a></td>
										<td><a href="index.php?do=clientes&id_cliente=<?php echo $exrow->id_cliente;?>"><?php echo $exrow->endereco." - ".$exrow->bairro;?></a></td>
										<td class='hidden-1024'><?php echo $venda->getPagamento($exrow->id);?></td>
										<td class='hidden-768'><?php echo moeda($exrow->valor_total);?></td>
										<td class='hidden-768'><?php echo $exrow->status;?></td>
										<td class='hidden-1024'><?php echo $exrow->usuario_cadastro;?></td>
									</tr>
								<?php endforeach;?>
								<?php unset($exrow);
									  endif;?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>