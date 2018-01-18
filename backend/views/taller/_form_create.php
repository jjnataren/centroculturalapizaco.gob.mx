<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Taller */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="col-md-12 col-sm-12 col-xs-12" >

    <?php $form = ActiveForm::begin(); ?>
    
    
	<div class="col-md-12">
    <?php echo $form->errorSummary($model); ?>
    </div>    
    
    <div class="col-md-12">
    <div class="col-md-7">
    <?php echo $form->field($model, 'nombre', ['template' => 
		     		'<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-cog"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'])->textInput(['placeholder' => 'NOMBRE TALLER','class'=>'form-control input-lg','maxlength' => '16'])->label(false); ?>
			
	</div>
	<div class="col-md-4"><small>Nombre base del taller.</small></div>
	</div>
	
	
	<div class="col-md-12">
    <div class="col-md-7">
     <?php echo $form->field($model, 'descripcion', ['template' => 
		     		'<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-pencil"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'])->textArea(['placeholder' => 'DESCRIPCIÓN Y DETALLES DEL TALLER','class'=>'form-control input-lg','maxlength' => '200'])->label(false); ?>
			
    
	</div>
	
		<div class="col-md-4">
		<small>
			Agregue  una descripción del curso para que se pueda identificar de mejor manera.
		</small>
	</div>
	
	</div>

    

    <div class="col-md-12">
    	<div class="col-md-7">
        <?php echo Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>




    <?php ActiveForm::end(); ?>
    
    </div>

