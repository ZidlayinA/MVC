<h1 class="page-header" style="color: #FF8A80;">
    <?php echo $alm->__GET('id') != null ? $alm->__GET('Codigo') : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="?c=Producto" style="color: #BB8FCE;">Productos</a></li>
  <li class="breadcrumb-item active"><?php echo $alm->__GET('id') != null ? $alm->__GET('Codigo') : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-producto" action="?c=Producto&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
    
    <div class="form-group">
        <label style="color: #BB8FCE";>Codigo</label>
        <input type="number" name="Codigo" value="<?php echo $alm->__GET('Codigo'); ?>" class="form-control" placeholder="Ingrese su Codigo" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label style="color: #BB8FCE";>Descripcion</label>
        <input type="text" name="Descripcion" value="<?php echo $alm->__GET('Descripcion'); ?>" class="form-control" placeholder="Ingrese su Descripcion" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label style="color: #BB8FCE";>Costo</label>
        <input type="number" name="Costo" value="<?php echo $alm->__GET('Costo'); ?>" class="form-control" placeholder="Ingrese su Costo" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label style="color: #BB8FCE";>Stock</label>
        <input type="number" name="Stock" value="<?php echo $alm->__GET('Stock'); ?>" class="form-control" placeholder="Ingrese su Stock" data-validacion-tipo="requerido" />
    </div>
    
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label style="color: #BB8FCE";>Foto</label>
                <input type="hidden" name="Foto" value="<?php echo $alm->__GET('Foto'); ?>" />
                <input type="file" name="Foto" placeholder="Ingrese una imagen" />
            </div>     
        </div>
        <div class="col-xs-6">
            <?php if($alm->__GET('Foto') != ''): ?>
                <div class="img-thumbnail text-center">
                    <img src="uploads/<?php echo $alm->__GET('Foto'); ?>" style="width:50%;" />
                </div>
            <?php endif; ?>            
        </div>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn" style="background-color: #BB8FCE; color: white; border-radius: 10px;">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>