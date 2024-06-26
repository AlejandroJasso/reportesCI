<section id="main-content">
	<section class="wrapper">
		<h2>Catalogo de autos:</h2>
		<table id="cargarBusqueda" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Num. Placa</th>
					<th>Color</th>
					<th>Fecha de compra</th>
					<th>Editar</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($autos as $a){
					?>
					<tr id="rowautos<?= $a->id ?>">
						<td><?=$a->marca?></td>
						<td><?=$a->modelo?></td>
						<td><?=$a->placas?></td>
						<td><?=$a->color?></td>
						<td><?=$a->fecha_compra?></td>
						<td><i class="eliminar fa fa-trash-o" style="cursor:pointer;" id="duenyo-<?= $a->id?>"></i></td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</section>
</section>

<script src="<?php echo base_url('JS/tablasCatalogo.js'); ?>"></script>