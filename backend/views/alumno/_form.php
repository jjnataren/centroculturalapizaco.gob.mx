<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Alumno */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="alumno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>



    
    <div class="col-md-12">
		<div class="col-md-4">
				<small> Nombre del alumno</small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'nombre', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'NOMBRE',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
     
    <div class="col-md-12">
		<div class="col-md-4">
				<small> Taller al que se inscribe o reinscribe el alumno. </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'taller_inscribe', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'NOMBRE DEL TALLER',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
    
    
    <?php echo $form->field($model, 'fecha_ingreso')->textInput() ?>
      
    <?php echo $form->field($model, 'fecha_nacimiento')->textInput() ?>
    
    
    <div class="col-md-12">
		<div class="col-md-4">
				<small> Lugar de nacimiento. </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'lugar_nacimiento', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'LUGAR DE NACIMIENTO',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
    
 <div class="col-md-12">
		<div class="col-md-4">
				<small> Ingrese el domicilio completo. </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'direccion', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'DOMICILIO',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
    
    
     <div class="col-md-12">
		<div class="col-md-4">
				<small> Ingrese la localidad. </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'nacionalidad', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'LOCALIDAD',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
    

   <div class="col-md-12">
		<div class="col-md-4">
				<small> Ingrese telefono movil. </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'telefono_movil', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'CELULAR',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
    
     <div class="col-md-12">
		<div class="col-md-4">
				<small> Ingrese telefono de casa. </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'telefono_casa', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'TELEFONO LOCAL',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>   
	
    
   
    
    
    
    <div class="panel panel-default">
			
			<div class="panel-body">
    
    <div class="col-md-12">
    <div class="col-md-4">
				<small> Nombre del padre. </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'nombre_padre', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'NOMBRE DEL PADRE',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
    
     <div class="col-md-12">
		<div class="col-md-4">
				<small>Edad  </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'edad_padre', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'EDAD',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
     
      <div class="col-md-12">
		<div class="col-md-4">
				<small> Ocupación </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'ocupacion_padre', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'OCUPACION',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
     
       <div class="col-md-12">
		<div class="col-md-4">
				<small> Telefono </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'tel_padre', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'TELEFONO',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
     
    </div>
     </div> 
     
     
      <div class="panel panel-default">
			
			<div class="panel-body">
    
    <div class="col-md-12">
    <div class="col-md-4">
				<small> Nombre de la madre. </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'nombre_madre', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'NOMBRE DE LA MADRE',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
    
     <div class="col-md-12">
		<div class="col-md-4">
				<small> Edad </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'edad_madre', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'EDAD',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
     
      <div class="col-md-12">
		<div class="col-md-4">
				<small> Ocupación </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'ocupacion_madre', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'OCUPACION',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
     
       <div class="col-md-12">
		<div class="col-md-4">
				<small> Telefono  </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'tel_madre', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'TELEFONO',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
     
    </div>
     </div> 
     
      <div class="col-md-12">
		<div class="col-md-4">
				<small> En caso de emergencia llamar a: </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'tel_emergencia', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'TELEFONO',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
   
    
     <div class="col-md-12">
		<div class="col-md-4">
				<small> Nombre de la escuela donde estudia actualmente </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'escuela_procedencia', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'ESCUELA ACTUAL',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>


   <div class="col-md-12">
		<div class="col-md-4">
				<small> Alergia o enfermedad cronica</small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'alergia_enfermedad', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'ALERGIA O ENFERMEDAD',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
     
    <div class="col-md-12">
		<div class="col-md-4">
				<small> Tipo sangineo</small>
			</div>
			<div class="col-md-8">
    <?php 
    $sangre = [ 0 => 'A+', 1 => 'A-',2=>'B+',3=>'B-',4=>'AB+',5=>'AB-',6=>'O+',7=>'O-'];
    echo $form->field($model, 'tipo_sangineo', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->dropDownList($sangre,[
        'placeholder' => 'TIPO SANGINEO',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>

 
 
 <div class="col-md-12">
		<div class="col-md-4">
				<small> Esta afiliado a</small>
			</div>
			<div class="col-md-8">
    <?php
    $seguro = [ 0 => 'IMSS', 1 => 'ISSSTE',2=>'SEGURO POPULAR'];
    echo $form->field($model, 'afiliacion_seguro', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
    ->dropDownList($seguro,[
        'placeholder' => 'SEGURO',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>

 <div class="col-md-12">
		<div class="col-md-4">
				<small> Clave Única de Registro de Población </small>
			</div>
			<div class="col-md-8">
    <?php echo $form->field($model, 'curp', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->textInput([
        'placeholder' => 'CRUP',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>

    
	<div class="col-md-12">
		<div class="col-md-4">
				<small>Sexo</small>
			</div>
			<div class="col-md-8">
    <?php
    $var = [ 0 => 'HOMBRE', 1 => 'MUJER'];
    echo $form->field($model, 'sexo', [
        'template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cube"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'
    ])
        ->dropDownList($var,[
        'placeholder' => 'SEXO',
        'class' => 'form-control input-lg',
        'maxlength' => '200'
    ])
        ->label(false);?>
     </div>
     </div>
     
     
	

 
<!-- 
    <?php echo $form->field($model, 'sexo')->textInput() ?>

    <?php echo $form->field($model, 'nacionalidad')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'codigo_postal')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'fecha_baja')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'correo_electronico')->textInput(['maxlength' => true]) ?>

     <?php echo $form->field($model, 'fecha_alta')->textInput() ?>

        <?php echo $form->field($model, 'numero_registro')->textInput(['maxlength' => true]) ?> -->
    
    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    

		

	</div>
</div>