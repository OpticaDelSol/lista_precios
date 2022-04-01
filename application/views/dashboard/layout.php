<?php 

$m=3;
$colors =[];
for($r=0;$r<$m;$r++)
{
	for($g=0;$g<$m;$g++)
	{
		for($b=0;$b<$m;$b++)
		{
			$colors[] = 
						strval( intval((float)$r * (float)(255/$m)) ).','.
						strval( intval((float)$g * (float)(255/$m)) ).','. 
						strval( intval((float)$b * (float)(255/$m)) ) 
						;
					
		}
	}
}

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
        <?php 
        $categories=[
            ['nombre'=>'categoria1'],
            ['nombre'=>'categoria2'],
            ['nombre'=>'categoria3'],
            ['nombre'=>'categoria4'],
            ['nombre'=>'categoria1'],
            ['nombre'=>'categoria2'],
            ['nombre'=>'categoria3'],
            ['nombre'=>'categoria4'],
            ['nombre'=>'categoria1'],
            ['nombre'=>'categoria2'],
            ['nombre'=>'categoria3'],
            ['nombre'=>'categoria4'],
            ['nombre'=>'categoria1'],
            ['nombre'=>'categoria2'],
            ['nombre'=>'categoria3'],
            ['nombre'=>'categoria4'],
        ];
        $i=0;
        foreach($categories as $cat)
        {
            $this->load->view("dashboard/dashboard_categoria_button",
            [
                'nombre_categoria'=>$cat['nombre'],
                'color'=>$colors[$i%count($colors)]
            ]);
            $i++;
        }

        ?>

        </div>
    </div>
</div>

