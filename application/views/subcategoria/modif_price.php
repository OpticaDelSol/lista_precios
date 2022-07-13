<div class="col-md-10">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Modificar Precio de Grupo
            </h3>

            

        </div>
        <div class="card-body">
            <div class="col-md-12">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item">Categoria</li>
                    <li class="breadcrumb-item active">Subcat</li>
                </ol>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="categoria">Categor&iacute;a</label>
                    <div>
                        <select name="categoria" id="categoria"></select>
                    </div>
                </div>
                <div class="form-group" id="grupo-container">

                </div>
                <div class="forn-group">
                    <label class="" for="precio-ant" >Precio Anterior</label>
                    <div class="input-group-append">
                        <div class="input-group-append">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" readonly class="form-control" value="0" id="precio-ant">
                        
                    </div>
                </div>
                <div class="forn-group">
                    <label class="" for="precio-ant" >Precio Nuevo</label>
                    <div class="input-group-append">
                        <div class="input-group-append">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" value="0" id="precio-nuevo">
                        
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-info" value="Modificar">
                </div>
            </div>
        </div>
        <div class="card-footer">
                <button class="btn btn-danger">Cancelar</button>
        </div>
    </div>
</div>