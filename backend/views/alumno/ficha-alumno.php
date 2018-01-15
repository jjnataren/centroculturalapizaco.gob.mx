<?php



?>


<div style="width:30cm;height:29.7cm;margin:0;" >

<table    style="width: 100%; font-size: 15px;  font-family:times new roman; font-style:bold;">


		<tr >
    		<th width="300" align="left"><img alt="" src="/img/gobtlax.jpg"  height="130"></th>
    		<th align="center" valign="bottom" colspan="2" >"LA LIBERTAD"</th>
    		
    		<th width="300"align="right"><img alt="" src="/img/logoLCC.jpg" width="300" height="100"></th>
		</tr>
			
</table>
	<table   style="width: 100%; font-size: 15px;  font-family:times new roman; font-style:bold;">		
			
		<tr align="center">
		<th width= "300"> </th >
			
			<td align="center" colspan="2">CENTRO CULTURAL DE APIZACO</td>
			<td width= "300"> </td>				
		</tr>
		
		<tr align="center">
			<th width= "300"></th >
			<td align="center" style="font-size: 10px;" colspan="2" >FICHA PERSONAL DEL ALUMNO(A)</td>
			
			<td width= "300"></td>
			
		</tr>
		

</table>

<br />

<table  style="width: 100%; font-size: 12px;  font-family:times new roman; font-style:bold;">
			
		<tr >
			<td style=" width: 20%;"></td>	
			<td style=" width: 40%;"></td>
			<td style=" width: 20%;"></td>
			<td style=" width: 20%;"></td>
		</tr>	
		
		
			
		
</table>	
<table border="" style="width: 100%; font-size: 15px;  font-family:times new roman; font-style:bold;">
	<tr>
		<td width= "100%" ><b>NOMBRE:</b> <u>&nbsp;
	&nbsp;&nbsp;&nbsp;

	
	
	&nbsp;&nbsp;<?= $model->nombre; ?>&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;

	
	&nbsp;&nbsp;</u></></td>
	</tr>
	<tr>
		<td><B>TALLER AL QUE SE INCRIBE EL ALUMNO(A):</B> <u>&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	

	&nbsp;&nbsp;<?= $model->taller_inscribe; ?>&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	</u></td>
	</tr>
	<tr>
		<td><b>FECHA DE INGRESO:</b> <u>&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;

	&nbsp;&nbsp;<?= $model->fecha_ingreso; ?>&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;</u></td>
	</tr>
	<tr>
	<td><b>FECHA DE NACIMIENTO:</b> <u>&nbsp;&nbsp;&nbsp;<?= $model->fecha_nacimiento; ?>	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp; &nbsp;
	&nbsp;&nbsp;</u> <b>LUGAR DE NACIMIENTO:</b>  <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->lugar_nacimiento; ?> &nbsp;
	&nbsp;</u></td>
	</tr>
	<tr>
		<td><b>DOMICILIO:</b> <u>&nbsp;
	&nbsp;<?= $model->direccion;?>
	</u>&nbsp;&nbsp;<b>LOCALIDAD:</b> <u>&nbsp;
	&nbsp;<?= $model->nacionalidad;?>
	</u>&nbsp;&nbsp;<b>TELEFONO:</b> <u>&nbsp;&nbsp;&nbsp;
	<?= $model->telefono_casa;?>&nbsp;&nbsp;&nbsp;
	
	</u></td>
	</tr>
	<tr>
	<td><b>NOMBRE DEL PADRE:</b> <u>&nbsp;&nbsp;&nbsp;<?= $model->nombre_padre; ?> &nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	</u> <b>EDAD:</b>  <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->edad_padre; ?> &nbsp; años 
	&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;</u></td>
	</tr>
	
	<tr>
	<td><b>OCUPACION:</b> <u>&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;<?= $model->ocupacion_padre; ?> &nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	
	</u> <b>TELEFONO:</b>  <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->tel_padre; ?> &nbsp; 
	&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;</u></td>
	</tr>
	
	
	
	<tr>
	<td><b>NOMBRE DEL LA MADRE: </b><u>&nbsp;&nbsp;&nbsp;<?= $model->nombre_madre; ?> &nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	</u> <b>EDAD: </b> <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->edad_madre; ?> &nbsp; años 
	&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;</u></td>
	</tr>
	
	<tr>
	<td><b>OCUPACION: <u>&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;<?= $model->ocupacion_madre; ?> &nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	
	</u> <b>TELEFONO: </b> <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->tel_madre; ?> &nbsp; 
	&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;</u></td>
	</tr>
	
		<tr>
		<td width= "100%" ><b>EN CASO DE EMERGENCIA LLAMAR AL:</b> <u>&nbsp;
	&nbsp;&nbsp;&nbsp;

	
	
	&nbsp;&nbsp;<?= $model->tel_emergencia; ?>&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;

	
	&nbsp;&nbsp;</u></></td>
	</tr>
	
		<tr>
		<td width= "100%" ><b>NOMBRE DE LA ESCUELA DONDE ESTUDIA ACTUALMENTE: </b><u>&nbsp;
	&nbsp;&nbsp;&nbsp;

	
	
	&nbsp;&nbsp;<?= $model->escuela_procedencia; ?>&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;



	
	&nbsp;&nbsp;</u></></td>
	</tr>
	
		<tr>
		<td width= "100%" ><b>ALERGIA O ENFERMEDAD CRÓNICA: </b><u>&nbsp;
	&nbsp;&nbsp;&nbsp;	
	&nbsp;&nbsp;<?= $model->alergia_enfermedad; ?>&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;	
	&nbsp;&nbsp;</u></></td>
	</tr>
	</table>
	<table border="" style="width: 100%; font-size: 15px;  font-family:times new roman; font-style:bold;">
		<tr>
		<td width= "100%" ><b>TIPO SANGUINEO: </b><u>&nbsp;
	&nbsp;&nbsp;&nbsp;	
	&nbsp;&nbsp;<?= $model->tipo_sangineo; ?>&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;	
	&nbsp;&nbsp;</u><b>ESTA AFILIADO A:</b>	&nbsp;&nbsp;&nbsp;<b>IMSS</b>	_______	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<b>ISSSTE</b> _______	&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;	<b>SEGURO POPULAR</b> _______	</td>
	</tr>

	
</table>	
<br><br><br><br>
<table  style="width: 100%; font-size: 15px;  font-family:times new roman; font-style:bold;">
	<tr>
		<td align="center">
		____________________________
		</td>
		<td align="center">
		____________________________
		</td>
		<td align="center">
		____________________________
		</td >
	</tr>
	<tr>
		<td align="center">
		<b>FIRMA DEL PADRE</b>
		</td>
		<td align="center">
		<b>FIRMA DE LA MADRE</b>
		</td>
		<td align="center">
		<b>FIRMA DEL ALUMNO</b>
		</td >
	</tr>
</table>
</div>
