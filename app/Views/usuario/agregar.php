<div class="container">
    <div class="row">
        <?php
            if (isset($validation)){
                print $validation->listErrors();
            }
            ?>

        <div class="col-8">
            <form action="<?= base_url('index.php/usuario/agregar'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellidos (paterno y materno) </label>
                    <input type="text" class="form-control" name="apellido" 
                    id="apellido">
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">Correo electrónico </label>
                    <input type="text" class="form-control" name="correo" 
                    id="correo">
                </div>

                <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña del usuario </label>
                    <input type="text" class="form-control" name="contrasena" 
                    id="contrasena">
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección de domicilio </label>
                    <input type="text" class="form-control" name="direccion" 
                    id="direccion">
                </div>

                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad del usuario </label>
                    <input type="text" class="form-control" name="ciudad" 
                    id="ciudad">
                </div>

                
                <div class="mb-3">
                    <label for="codigo_postal" class="form-label">Código postal de ciudad </label>
                    <input type="text" class="form-control" name="codigo_postal" 
                    id="codigo_postal">
                </div>

                
                <div class="mb-3">
                    <label for="pais" class="form-label">País de origen </label>
                    <input type="text" class="form-control" name="pais" 
                    id="pais">
                </div>

                
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>