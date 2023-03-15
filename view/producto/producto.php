<br>
<h1 class="page-header" style="color: #FF8A80;">Registro de Productos</h1>
<br>

<div class="text-right">
    <a class="btn" href="?c=Producto&a=Crud" style="background-color: #BB8FCE; color: white; border-radius: 10px;">Nuevo Producto</a>
</div>
<br>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px; color: #BB8FCE";>Código</th>
            <th style="color: #BB8FCE";>Descripción</th>
            <th style="color: #BB8FCE";>Costo</th>
            <th style="width:120px; color: #BB8FCE">Stock</th>
            <th style="width:120px; color: #BB8FCE">Foto</th>
            <th style="width:60px; color: #BB8FCE"></th>
            <th style="width:60px; color: #BB8FCE"></th>
        </tr>
    </thead>

    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->__GET('Codigo'); ?></td>
            <td><?php echo $r->__GET('Descripcion'); ?></td>
            <td><?php echo $r->__GET('Costo'); ?></td>
            <td><?php echo $r->__GET('Stock'); ?></td>
            <td>
                <?php if($r->__GET('Foto') != ''): ?>
                    <img src="uploads/<?php echo $r->__GET('Foto'); ?>" style="width:100%;" />
                <?php endif; ?> 
            </td>
            <td>
                <a href="?c=Producto&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Producto&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    
</table> 
