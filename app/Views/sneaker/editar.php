<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar datos de sneaker</h2>
            <form action="<?= base_url('sneaker/update'); ?>" method="POST">
            <?= csrf_field() ?>

            <input type="hidden" name ="id" value="<?= $sneaker->id ?>" />
            
                <div class="mb-3">
                    <label for="nombre_sneaker" class="form-label">Nombre del sneaker</label>
                    <input type="text" class="form-control" 
                    name="nombre_sneaker" id="nombre_sneaker" value="<?= $sneaker->nombre_sneaker ?>">
                </div>
                
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoría del sneaker </label>
                    <input type="int" class="form-control" name="categoria" 
                    id="categoria" value="<?= $sneaker->categoria ?>">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción del sneaker </label>
                    <input type="text" class="form-control" name="descripcion" 
                    id="descripcion" value="<?= $sneaker->descripcion ?>">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status del sneaker </label>
                    <input type="tinyint" class="form-control" name="status" 
                    id="status" value="<?= $sneaker->status ?>">
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock disponible </label>
                    <input type="int" class="form-control" name="stock" 
                    id="stock" value="<?= $sneaker->stock ?>">
                </div>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>