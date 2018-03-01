<?php

use backend\models\Inscripcion;

Yii::$app->formatter->locale = 'es-MX';

?>


<div style="width:21cm;height:29.7cm;margin:0; " >

<table border="" style="width: 100%; font-size: 15px;  font-family:times new roman; font-style:bold;">


		<tr>
    		<th  width="25%"  rowspan="3" align="right"><img alt="" src="/img/tlaxcalalogo.png" width="180" height="120"></th>
    		
    		<th width="25%" rowspan="3" align="left"><img alt="" src="/img/LCC.jpg" width="180" height="90"></th>
    		<td width="50%"align="right">NOMBRE: <?= isset( $model->alumno)?$model->alumno->nombre : '?' ;?></td>
		</tr>
			<tr >			
				<td >TALLER: <?=$model->tallerImp->nombre;?></td >
			</tr >
		
		<tr >			
				<td >MAESTRO: <?=$model->tallerImp->instructor->nombre;?></td >
		</tr>

			
</table>


<br />

<table  style="width:100%; font-size: 17px; border: 3px solid black; font-family:times new roman;" class="table table-bordered">

<thead>
	<tr style="background: #d4d6d8" >
		<th  align="center">CONCEPTO</th>
		<th align="center">CUOTA DE RECUPERACION</th>
		<th align="center">FECHA, FIRMA Y SELLO</th>
	</tr>
</thead>

<tbody style="border: 3px solid black;">
			
		
	
		<tr>
			<td align="center" >ENERO</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		<tr>
			<td  align="center" >FEBRERO</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		<tr>
			<td  align="center" >MARZO</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		<tr>
			<td  align="center" >ABRIL</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		<tr>
			<td  align="center" >MAYO</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		<tr>
			<td  align="center" >JUNIO</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		<tr>
			<td  align="center" >JULIO</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		<tr>
			<td  align="center" >AGOSTO</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		<tr>
			<td  align="center" >SEPTIEMBRE</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		<tr>
			<td  align="center" >OCTUBRE</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		<tr>
			<td  align="center" >NOVIEMBRE</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		<tr>
			<td  align="center" >DICIEMBRE</td>
			<td align="right"> $180.00</td>
			<td align="right"> </td>
		</tr>
		
		
	</tbody>
	
	<tfoot>
		
	</tfoot>
	
</table>



<br />
<table border="" style="width: 100%; font-size: 15px;  font-family:times new roman; font-style:bold;">


		<tr>
    		<td  width="25%"   align="right"></td>
    		
    		<td width="25%"  align="left">FECHA DE INSCRIPCION</td>
		
    		<td width="50%"align="right"> <?= $model->tallerImp->fecha_inicio; ?></td>
    		</tr>
		<tr>
    		<td  width="25%"   align="right"></td>
    		
    		<td width="25%"  align="left">FECHA DE REINSCRIPCION</td>
    		<td width="50%"align="right"> <?= $model->tallerImp->fecha_inicio; ?></td>
		</tr>
				

			
</table>

<!-- 

<table border="1"  style="width:100%; font-size: 12px; border: 1px dotted gray; font-family:times new roman;">
		<tr>
			<th align="left" style="background: #d4d6d8;" >Item</th>
			<th align="left" style="background: #d4d6d8;">Numero serie</th>
			<th align="left" style="background: #d4d6d8;">Codigo desbloqueo</th>				
			<th align="left" style="background: #d4d6d8;">Nombre</th>
			<th align="left" style="background: #d4d6d8;">Precio unitario</th>
		</tr>
		<tbody>
			
			
			<tr>
			<td>++$i; ?></td>
			<td>$producto->numero_serie; ?></td>
			<td>$producto->codigo_registro; ?></td>
			<td>isset($producto->tipoProducto)?$producto->tipoProducto->getCategoriaProducto() .' - '.$producto->tipoProducto->nombre:' -- ';?></td>
			<td align="right">$producto->precio_sugerido; ?></td>
			</tr>
			
		</tbody>
		
		<tfoot>
				
				<tr>
					<td colspan="4" align="right" style="background: #d4d6d8;">Sub total</td>
						<td  align="right">$ $model->precio_publico; ?></td>
				</tr>
				
				<tr>
					<td colspan="4" align="right" style="background: #d4d6d8;">+ IVA 16 % ($model->iva)?'':'(no aplica)'; ?></td>
						<td  align="right">$ ($model->iva)? $model->precio_publico * 1.16 : $model->precio_publico ?></td>
				</tr>
				
				
				<tr>
					<td colspan="4" align="right" style="background: #d4d6d8;">- Descuento</td>
					<td  align="right">$model->descuento; ?> %</td>
				</tr>
				
				
				<tr>
					<td colspan="4" align="right" style="background: #d4d6d8;">Total</td>
					<td  align="right">$ $model->monto_total; ?></td>
				</tr>
				
			</tfoot>
		
	</table>
 -->
</div>