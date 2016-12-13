<div class="container">
	<table class="table table-striped">
		<tr>
			<th>Nombre ciudad</th>
			<th></th>
			<th></th>
		</tr>
<?php foreach ($body['ciudades']as $ciudad):?>
<tr>
			<td><?php $ciudad['nombre']?></td>
			<td>
				<form action="<?php base_url()?>ciudad/editar" id="idFormedit"
					method="post">
					<input type="hidden" name="id_ciudad" value="<?php $ciudad->id?>">
				</form>
			</td>
		</tr>
<?php endforeach;?>
	</table>
</div>