<section id="main-content">
    <section class="wrapper">
        <h2>Mis reportes:</h2>
        <table id="cargarBusqueda" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Num. contacto</th>
                    <th>Fecha reporte</th>
                    <th>Descripción</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($reportes as $r){
                    ?>
                    <tr id="rowreporte<?= $r->id ?>">
                        <td><?=$r->nombre?></td>
                        <td><?=$r->apellidoP?></td>
                        <td><?=$r->apellidoM?></td>
                        <td><?=$r->contacto?></td>
                        <td><?=$r->fecha_reporte?></td>
                        <td><?=$r->descripcion?></td>
                        <td><i class="eliminar fa fa-trash-o" style="cursor:pointer;" id="reporte-<?= $r->id?>"></i></td>
                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>
    </section>
</section>

<script type="text/javascript">
    $(".eliminar").click(function(){
        var idreporte=this.id; //envia el ID del dueño
        var res=idreporte.split("-"); 
        var id=res[1];
        $.post("<?= base_url() ?>Dashboard/eliminarReporte",{idreporte: id}).done(function(data){
            $("#rowreporte"+id).fadeOut();
        });
    });
</script>

<script src="<?php echo base_url('JS/tablasCatalogo.js'); ?>"></script>