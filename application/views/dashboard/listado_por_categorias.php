<?php 
        $categories=[
            ['nombre'=>'categoria1', 'id'=>'1', 'selected'=>true],
            ['nombre'=>'categoria2', 'id'=>'2', 'selected'=>false],
            ['nombre'=>'categoria3', 'id'=>'3', 'selected'=>false],
            ['nombre'=>'categoria4', 'id'=>'4', 'selected'=>false],
            ['nombre'=>'categoria5', 'id'=>'5', 'selected'=>false],
            ['nombre'=>'categoria6', 'id'=>'6', 'selected'=>false],
            ['nombre'=>'categoria7', 'id'=>'7', 'selected'=>false],
        ];

?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista de Precios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Lista de Precios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class='content'>
  <div class='container-fluid'>
      <h5 class="mb-2">Lista de precios al 0-0-00</h5>
      <div class='row'>
      
    <div class="col-7 col-sm-9">
      <div class="tab-content" id="vert-tabs-right-tabContent">
        <?php foreach($categories as $cat){?>
            <div class="tab-pane fade <?php echo ($cat['selected']? 'active show' : ''); ?>" id="vert-tabs-right-<?php echo $cat['id'] ?>" role="tabpanel" aria-labelledby="vert-tabs-right-<?php echo $cat['id'] ?>-tab">
            <?php echo $cat['nombre']; ?>
            </div>
        <?php } ?>
      </div>
    </div>
    <div class="col-5 col-sm-3">
        <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
        <?php foreach($categories as $cat){?>
            <a class="nav-link  <?php echo ($cat['selected']? 'active' : '');?>" id="vert-tabs-right-<?php echo $cat['id'] ?>-tab" data-toggle="pill" href="#vert-tabs-right-<?php echo $cat['id'] ?>" role="tab" aria-controls="vert-tabs-right-<?php echo $cat['id'] ?>" aria-selected="<?php echo ($cat['selected']? 'true':'false') ?>"><?php echo $cat['nombre'] ?></a>
        <?php } ?>
        </div>
    </div>
      </div>
  </div>
</section>
