<div class="container">
    <div class="row">
        <?php
            if (isset($validation)){
                print $validation->listErrors();
            }
            ?>

        <div class="col-8">
            <form action="<?= base_url('index.php/marca/agregar'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre_fundacion" class="form-label">Nombre de la marca oficial</label>
                    <input type="text" class="form-control" name="nombre_fundacion" id="nombre_fundacion">
                </div>
                
                <div class="mb-3">
                    <label for="creacion" class="form-label">Fecha de creación de la empresa </label>
                    <input type="text" class="form-control" name="creacion" 
                    id="creacion">
                </div>

                <div class="mb-3">
                    <label for="pais_origen" class="form-label">País residente de la marca </label>
                    <input type="text" class="form-control" name="pais_origen" 
                    id="pais_origen">
                </div>

                <div class="mb-3">
                    <label for="estado_origen" class="form-label">Estado proveniente de la marca </label>
                    <input type="text" class="form-control" name="estado_origen" 
                    id="estado_origen">
                </div>

                <div class="mb-3">
                    <label for="sitio_web" class="form-label">Sitio web oficial de la marca </label>
                    <input type="text" class="form-control" name="sitio_web" 
                    id="sitio_web">
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