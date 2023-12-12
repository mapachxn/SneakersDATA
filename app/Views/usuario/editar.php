<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar datos de usuario</h2>
            <form action="<?= base_url('usuario/update'); ?>" method="POST">
            <?= csrf_field() ?>

            <input type="hidden" name ="id" value="<?= $usuario->id ?>" />
            
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del usuario</label>
                    <input type="text" class="form-control" 
                    name="nombre" id="nombre" value="<?= $usuario->nombre ?>">
                </div>
                
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellidos (paterno y materno) de usuario </label>
                    <input type="text" class="form-control" name="apellido" 
                    id="apellido" value="<?= $usuario->apellido ?>">
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">Correo electrónico </label>
                    <input type="text" class="form-control" name="correo" 
                    id="correo" value="<?= $usuario->correo ?>">
                </div>

                <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña del usuario </label>
                    <input type="text" class="form-control" name="contrasena" 
                    id="contrasena" value="<?= $usuario->contrasena ?>">
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección de domicilio </label>
                    <input type="text" class="form-control" name="direccion" 
                    id="direccion" value="<?= $usuario->direccion ?>">
                </div>

                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad del usuario </label>
                    <input type="text" class="form-control" name="ciudad" 
                    id="ciudad" value="<?= $usuario->ciudad ?>">
                </div>

                <div class="mb-3">
                    <label for="codigo_postal" class="form-label">Código postal de ciudad </label>
                    <input type="text" class="form-control" name="codigo_postal" 
                    id="codigo_postal" value="<?= $usuario->codigo_postal ?>">
                </div>

                <div class="mb-3">
                    <label for="pais" class="form-label">Edición de país </label>
                    <input type="text" class="form-control" name="pais" 
                    id="pais" value="<?= $usuario->pais ?>">
                </div>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>