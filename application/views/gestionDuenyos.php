<section id="main-content">
    <section class="wrapper">
        
        <h2>Dueños de vehiculos:</h2>
        
            <!--print_r($duenyos); //imprimir agregando php-->
        
        <table id="duenyos" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Nombre de usuario</th>
                    <th>Curso</th>
                    <th>Editar</th> 
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($duenyos as $d){
            ?>

            <tr id="rowduenyo<?= $d->id ?>">
                <td><?=$d->nombre?></td>
                <td><?=$d->apellidos?></td>
                <td><?=$d->username?></td>
                <td><?=$d->curso?></td>
                <td><i class="eliminar fa fa-trash-o" style="cursor:pointer;" id="duenyo-<?= $d->id?>"></i></td>
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

        var idalumno=this.id; //envia el ID del dueño
        var res=idalumno.split("-"); 
        var id=res[1];
        //console.log(id);

    $.post("<?= base_url() ?>Dashboard/eliminarDuenyo",{idduenyo: id}).done(function(data){
            $("#rowduenyo"+id).fadeOut();
        });
    });
</script>

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
        $('#duenyos').DataTable();
    });
</script>