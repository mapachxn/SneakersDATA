<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Marcas</h2>
            <table class="table">
                <thead>
                    <th>Nombre de la fundación</th>
                    <th>Fecha de creación</th>
                    <th>País de origen</th>
                    <th>Estado de origen</th>
                    <th>Sitio web oficial</th>

                </thead>
                <tbody>
                <?php foreach($MarcaSneakers as $marca): ?>
                    <tr>
                        <td><?=$marca->nombre_fundacion ?></td>
                        <td><?=$marca->creacion ?></td>
                        <td><?=$marca->pais_origen ?></td>
                        <td><?=$marca->estado_origen ?></td>
                        <td><?=$marca->sitio_web ?></td>
                        <td>    
                            <a href="<?=base_url('index.php/marca/delete/'.$marca->id);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/marca/editar/'.$marca->id);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>