<div class="card">
    <div class="card-header">
        <h3 class="card-title"><<?php echo isset($title) ? $title : "Listado" ?>/h3>
        <div class="card-tools">
            <!-- search bar -->
            <?php $this->load->view("common/searchbox"); ?>
            <button type="button" id="add-btn" class="btn btn-default">Nuevo</button>
        </div>
    </div>
    <div class="card-body">
        <div class="col-md-12">
        <table clas="table table-bordered">
            <thead>
                <tr>
                </tr>
            </thead>
            <tbody>
                <?php ?>
            </tbody>
        </table>
        </div>
    </div>
    <div class="card-footer"></div>
</div>