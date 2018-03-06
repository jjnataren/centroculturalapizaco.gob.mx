<?php
?>
<div class="box-body">
<div class="col-md-3">
<table    style="width: 100%; font-size: 15px;  font-family:times new roman; font-style:bold;">


		<tr >
    		<th width="300" align="left"><img alt="" src="/img/gobtlax.jpg"  height="130"></th>
    		<th align="center" valign="bottom" colspan="2" ></th>
    		
    		<th width="300"align="right"><img alt="" src="/img/logoLCC.jpg"  height="100"></th>
		</tr>
			
</table>
<h3>Detalle del taller:</h3>
<table  style="width: 100%; font-size: 15px;  font-family:times new roman; font-style:bold;">
        <tr>
        	<td  width="42%"><img class="img-thumbnail" style="width:40%; height:30%;" src="<?= isset ($model->path)? $model->base_url.'/' . $model->path : '/img/clipboard.png'?>" alt="" /></td>
        
        <td   align="center" valign="top">
        
         <dl>
                <dt><b>Nombre del taller</b> </dt>
               <dd><?=$model->nombre;?></dd>
                
                <dt><b>Descripción</b></dt>
                <dd><?=$model->descripcion;?></dd>
               <dt><b>Instructor</b></dt>
              
                <dd><?=isset($model->instructor->nombre)?$model->instructor->nombre:'?';?></dd>
               <dt><b>Categoría</b></dt>
               <dd><?=$model->categoria->nombre;?></dd>
              </dl>
        </td>
         
        <td  align="center" valign="top">
        
         <dl>
               <dt><b>Aula preferente</b></dt>
               <dd><?=isset($model->aula->nombre) ?$model->aula->nombre:'?';?></dd>
                <dt><b>Maximo de personas</b></dt>
                 <dd><?=$model->numero_personas;?></dd>
              
               <dt><b>Duración meses</b></dt>
               <dd><?=$model->duracion_mes;?></dd>
               <dt><b>Duración hora</b></dt>
               <dd><?=$model->duracion_hora;?></dd>
               
              </dl>
        </td>
         
        <td  align="center" valign="top">
        
         <dl>
                <dt><b>Dias preferentes para impartir</b></dt>
                 <?php if ($model->lunes):?>
                <dd>Lunes</dd>
                <?php endif;?>
                <?php if ($model->martes):?>
                <dd>Martes</dd>
                <?php endif;?>
                <?php if ($model->miercoles):?>
                <dd>Miercoles</dd>
                <?php endif;?>
                <?php if ($model->jueves):?>
                <dd>Jueves</dd>
                <?php endif;?>
                <?php if ($model->viernes):?>
                <dd>Viernes</dd>
                <?php endif;?>
                <?php if ($model->sabado):?>
                <dd>Sabado</dd>
                <?php endif;?>
                <?php if ($model->domingo):?>
                <dd>Domingo</dd>
                <?php endif;?>
                
                <dt><b>Disponible</b></dt>
               <dd><?=$model->disponible;?></dd>
               <dt><b>Fecha de creación</b></dt>
               <dd><?=$model->fecha_creacion;?></dd>
               
               
              </dl>
        </td>
        </tr>
</table>

</div>
</div>

