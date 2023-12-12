<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Sneakers</h2>
            <table class="table">
                <thead>
                    <th>Nombre del Sneaker</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Status</th>
                    <th>Disponibles</th>

                </thead>
                <tbody>
                <?php foreach($sneakers as $sneaker): ?>
                    <tr>
                        <td><?=$sneaker->nombre_sneaker ?></td>
                        <td><?=$sneaker->categoria ?></td>
                        <td><?=$sneaker->descripcion ?></td>
                        <td><?=$sneaker->status ?></td>
                        <td><?=$sneaker->stock ?></td>
                        <td>    
                            <a href="<?=base_url('index.php/sneaker/delete/'.$sneaker->id);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/sneaker/editar/'.$sneaker->id);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>