<section id="main-content">
	<section class="wrapper">

		<h2>Catalogo de autos:</h2>

		<table id="catalogoAutos" class="display" style="width:100%">
			<thead>
				<tr>
					<th># Auto</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Num. Placa</th>
					<th>Color</th>
					<th>Fecha de compra</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</section>
</section>

<script>
	$(document).ready( function (){
		$('#example').DataTable({
			columnDefs: [ {
				targets: [0],
				orderData: [1,0]
			}, {
				targets: [0],
				orderData: [1,0]
			}, {
				targets: [0],
				orderData: [1,0]
			} ]
		});
	});
</script>
<script type="text/javascript">
	$(document).ready( function (){
		$('#catalogoAutos').DataTable();
	});
</script>