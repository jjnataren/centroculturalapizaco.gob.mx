<?php




?>
<html>
	<head>
    	
	</head>
	<body>
	
	<b></b>
<div  style="width:11cm;height:60cm;margin:0; border-bottom:" >



<TABLE border="1" style="width: 100%; height:100% font-size: 5px;  font-family:times new roman; font-style:bold;">
	
	<TR><TD>
	   <table border="" style="width: 100%; height:100% font-size: 5px;  font-family:times new roman; font-style:bold;">



		<tr >
    		<th valign="top" style="height: 100%; width: 30%;"  align="left"><img alt="" src="/img/gobtlax.jpg" width="120" height="100"></th>
    		<td align="center" valign="bottom"> <br><b>"LA LIBERTAD" CENTRO CULTURAL DE APIZACO</b></td>
    		
    		<th valign="top" style="height: 100%; width: 30%;"align="right"><img alt="" src="/img/logoLCC.jpg" width="120" height="90"></th>
		</tr>
		<tr>
    		<td rowspan="3">
    		
    		<table border="1" >
    		<tr>
    			<td style=" height: 100; width: 100;" align="center"><img class="img-thumbnail" style="width:80px; height:80px;" src="<?= isset ($model->path)? $model->base_url.'/' . $model->path : '/img/usuario.jpg'?>" alt="" />
                </td>
    		
    		</tr>
    		
    		</table>
    		</td>
    		<td valign="bottom" align="center" colspan="2"><u><?= $model->nombre; ?></u></td>
    		
		</tr>
			<tr>
    	
    		<td valign="top" align="center" colspan="2"><b> NOMBRE DEL ALUMNO</b></td>
    	
		</tr>
		<tr>
		
		<td valign="TOP" align="center" colspan="2"><u><?= $model->direccion; ?></u></td>
	
		</tr>
		<tr>
		<td></td>
		<td valign="top" align="center" colspan="2"><b> DIRECCION</b></td>
		</tr>
		
		<tr>
		
		<td><b>FIRMA DEL ALUMNO</b></td>
		
	<td  align="center" colspan="2"><b>TEL. DE EMERGENCIA: </b><u><?= $model->tel_emergencia; ?></u></td>
		</tr>
</table>
	    </TD>
	 
	</TR>
</TABLE>
</div>
</body>
</html>
