<div class="container">
	<table class="table table-striped">
		<tr>
			<th>Nombre del L.P.</th>
			<th></th>
			<th></th>
		</tr>
		<?php foreach ($body['lps'] as $lp): ?>
		<tr>
			<td><?= $lp['nombre']?></td>
			<td><form id="idFormedit" action="<?=base_url()?>lp/editar"
					method="post">
					<input type="hidden" name="id_lp" value="<?= $lp->id?>">

				</form></td>
		</tr>
		<?php endforeach;?>
	</table>
</div>