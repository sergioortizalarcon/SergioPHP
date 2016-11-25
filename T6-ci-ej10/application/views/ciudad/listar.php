<div class="container">
<table class="table table-striped">
	<tr><th>Nombre ciudad</th>
	<?php foreach ($body['ciudades'] as $ciudad): ?>
		<tr>
			<td><?= $ciudad['nombre']?></td>
		</tr>
	<?php endforeach;?>
</table>
</div>