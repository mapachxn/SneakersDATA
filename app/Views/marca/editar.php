<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar datos oficiales de la marca</h2>
            <form action="<?= base_url('marca/update'); ?>" method="POST">
            <?= csrf_field() ?>

            <input type="hidden" name ="id" value="<?= $marca->id ?>" />
            
                <div class="mb-3">
                    <label for="nombre_fundacion" class="form-label">Nombre de la marca</label>
                    <input type="text" class="form-control" 
                    name="nombre_fundacion" id="nombre_fundacion" value="<?= $marca->nombre_fundacion ?>">
                </div>
                
                <div class="mb-3">
                    <label for="creacion" class="form-label">Editar fecha de creación de la marca </label>
                    <input type="text" class="form-control" name="creacion" 
                    id="creacion" value="<?= $marca->creacion ?>">
                </div>

                <div class="mb-3">
                    <label for="pais_origen" class="form-label">Editar país de origen de la marca </label>
                    <input type="text" class="form-control" name="pais_origen" 
                    id="pais_origen" value="<?= $marca->pais_origen ?>">
                </div>

                <div class="mb-3">
                    <label for="estado_origen" class="form-label">Editar estado de la marca oficial </label>
                    <input type="text" class="form-control" name="estado_origen" 
                    id="estado_origen" value="<?= $marca->estado_origen ?>">
                </div>

                <div class="mb-3">
                    <label for="sitio_web" class="form-label">Editar sitio web de la marca </label>
                    <input type="int" class="form-control" name="sitio_web" 
                    id="sitio_web" value="<?= $marca->sitio_web ?>">
                </div>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>