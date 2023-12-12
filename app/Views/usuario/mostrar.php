<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Usuarios</h2>
            <table class="table">
                <thead>
                    <th>Nombre del usuario</th>
                    <th>Apellidos (paterno y materno)</th>
                    <th>Correo electrónico</th>
                    <th>Dirección de domicilio</th>
                    <th>Ciudad</th>
                    <th>Código postal</th>
                    <th>País</th>



                </thead>
                <tbody>
                <?php foreach($usuarios as $usuario): ?>
                    <tr>
                        <td><?=$usuario->nombre ?></td>
                        <td><?=$usuario->apellido ?></td>
                        <td><?=$usuario->correo ?></td>
                        <td><?=$usuario->contrasena ?></td>
                        <td><?=$usuario->direccion ?></td>
                        <td><?=$usuario->ciudad ?></td>
                        <td><?=$usuario->codigo_postal ?></td>
                        <td><?=$usuario->pais ?></td>

                        <td>    
                            <a href="<?=base_url('index.php/usuario/delete/'.$usuario->id);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/usuario/editar/'.$usuario->id);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>