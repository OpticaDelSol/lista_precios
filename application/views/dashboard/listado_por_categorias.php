<style>
/*.nav-tabs.flex-column.nav-tabs-right .nav-link {
  background-color: rgba(53,142,211,1);
}*/
.nav-tabs.flex-column.nav-tabs-right .nav-link.active{
  background-color: rgba(184,199,211,1);
}
  .loader {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

<section class="content">
  <div class="container-fluid">
      <h2 class="text-center display-4">B&uacute;squeda</h2>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form action="<?php echo site_url("dashboard/listado_cat"); ?>">
          <div class="input-group">
            <input type="search" class="form-control form-control-lg" placeholder="Valor de b&uacute;squeda" name="filtro">
            <div class="input-group-append">
              <button type="submit" class="btn btn-lg btn-default">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="content-header">
  <div class="container-fluid">
    <?php if(isset($message)){ ?>
    <div class="col-md-12">
      <div class="alert alert-danger alert-dismissible">
        <!--button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button-->
        <a href="<?php echo site_url("dashboard/listado_cat"); ?>" class="close" style="a: decoration:none;">Quitar</a> 
        <h5><i class="icon fas fa-info"></i> <?php echo $message; ?></h5>
      </div>
    </div>
    <?php } ?>
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Lista de Precios</h1>
      </div>
      <!--div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">Lista de Precios</li>
        </ol>
      </div-->
    </div>
  </div>
</section>




<section class='content'>
  <div class='container-fluid'>
  <div class="callout callout-info">
      <h5 class="mb-2">Lista de precios al <?php echo $ultima_modif["ultima_modif"] ?></h5>
  </div>
      <div class='row'>
      
    <div class="col-7 col-sm-9">

      <div class="tab-content" id="vert-tabs-right-tabContent">
        <?php $this->load->view("producto/listado_por_categoria",['productos'=>$productos,'cur_cat_id'=>$cur_cat_id]); ?>
      </div>

    </div>
    <div class="col-5 col-sm-3">
     
      <div class="callout callout-info">
      <h5> Categor&iacute;as</h5>
      
      </div>
        <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
        <?php foreach($categorias as $cat){
          if(!array_key_exists("used",$cat))
          {
            continue;
          }
          
          ?>
            <a class="nav-link  <?php echo ($cat['idcategoria'] == $cur_cat_id? 'active' : '');?>" id="vert-tabs-right-<?php echo $cat['idcategoria'] ?>-tab" data-toggle="pill" href="#vert-tabs-right-<?php echo $cat['idcategoria'] ?>" role="tab" aria-controls="vert-tabs-right-<?php echo $cat['idcategoria'] ?>" aria-selected="<?php echo ($cat['idcategoria'] == $cur_cat_id? 'true':'false') ?>"><?php echo $cat['nombre'] ?></a>
        <?php } ?>
        </div>
    </div>
      </div>
  </div>
</section>
<section>
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header"><h5 class="card-title">Chat</h5></div>
				<div class="card-body">
					<iframe width="550" height="350" scrolling="no" src="https://widget.mibbit.com/?settings=95beec67ba6f7b595ed40a2f70f610c6&server=irc.mibbit.net%3A%2B6697&channel=%23opticadelsol"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view("common/big_modal"); ?>
<script>
  var detalle_producto_url = "<?php echo site_url("producto/obtener_detalles_producto/") ?>";
</script>
