<?php

use backend\models\Aula;
use backend\models\Categoria;
use backend\models\Instructor;
use kartik\datecontrol\DateControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TallerImp */
/* @var $form yii\bootstrap\ActiveForm */

$instructorList = ArrayHelper::map(Instructor::findBySql('select id,  CONCAT(id, \' - \',nombre ) as nombre from tbl_instructor where disponible = 1')->all(), 'id', 'nombre');

$aulaList = ArrayHelper::map(Aula::findBySql('select id,  CONCAT(id, \' - \',nombre ) as nombre from tbl_aula where disponible = 1')->all(), 'id', 'nombre');

$categoriaList = ArrayHelper::map(Categoria::findBySql('select id,  CONCAT(id, \' - \',nombre ) as nombre from tbl_categoria where disponible = 1')->all(), 'id', 'nombre');


?>

<div class="row">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'id_curso_base')->hiddenInput()->label(false) ?>

    	<div class="col-md-12">
		<div class="col-md-4">
				<small>Instructor que imapartira el taller.</small>
		</div>
			<div class="col-md-8">
      <?=$form->field($model, 'id_instructor', ['template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa-user-secret"></span>
		          </span>
		              {input}		     		
		          </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'])->dropDownList($instructorList, ['prompt' => '-- Seleccione una opción  --','id' => 'selectPro','onchange' => '
			                $.get( "' . Yii::$app->urlManager->createUrl('tipo-producto/get-img?id=') . '"+$(this).val(), function( data ) {
			                  $( "#divimg" ).html( data );
			                });
            			'])?>
    
    </div>
			
		</div>

    <?php echo $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    
    <?php  
   		echo $form->field($model, 'fecha_inicio')->widget(DateControl::classname(), [
   		    'type'=>DateControl::FORMAT_DATE,
   		    'ajaxConversion'=>false,
   		    'widgetOptions' => [
   		        'pluginOptions' => [
   		            'autoclose' => true
   		        ]
   		    ]
   		]);?>
   
    
	<?php  
   		echo $form->field($model, 'fecha_fin')->widget(DateControl::classname(), [
   		    'type'=>DateControl::FORMAT_DATE,
   		    'ajaxConversion'=>false,
   		    'widgetOptions' => [
   		        'pluginOptions' => [
   		            'autoclose' => true
   		        ]
   		    ]
   		]);?>
	

    <?php echo $form->field($model, 'descripcion')->textarea() ?>

    <?php echo $form->field($model, 'numero_max_personas')->textInput() ?>

    <?php echo $form->field($model, 'comentarios')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'url_img_publicitaria')->textInput(['maxlength' => true]) ?>
    
    

    
    	<?php  
   		echo $form->field($model, 'lunes')->widget(DateControl::classname(), [
   		    'type'=>DateControl::FORMAT_TIME,
   		    'ajaxConversion'=>false,
   		    'widgetOptions' => [
   		        'pluginOptions' => [
   		            'autoclose' => true
   		        ]
   		    ]
   		]);?>
    

    <?php echo $form->field($model, 'martes')->textInput() ?>

    <?php echo $form->field($model, 'miercoles')->textInput() ?>

    <?php echo $form->field($model, 'jueves')->textInput() ?>

    <?php echo $form->field($model, 'viernes')->textInput() ?>

    <?php echo $form->field($model, 'sabado')->textInput() ?>

    <?php echo $form->field($model, 'domingo')->textInput() ?>

    <?php echo $form->field($model, 'duracion_hora')->textInput() ?>

    <?php echo $form->field($model, 'lunes_fin')->textInput() ?>

    <?php echo $form->field($model, 'martes_fin')->textInput() ?>

    <?php echo $form->field($model, 'miercoles_fin')->textInput() ?>

    <?php echo $form->field($model, 'jueves_fin')->textInput() ?>

    <?php echo $form->field($model, 'viernes_fin')->textInput() ?>

    <?php echo $form->field($model, 'sabado_fin')->textInput() ?>

    <?php echo $form->field($model, 'domingo_fin')->textInput() ?>

    <?php echo $form->field($model, 'estatus')->textInput() ?>

    <?php echo $form->field($model, 'duracion_mes')->textInput() ?>

    <?php echo $form->field($model, 'disponible')->textInput() ?>

    <?php echo $form->field($model, 'id_aula_lunes')->textInput() ?>

    <?php echo $form->field($model, 'id_aula_martes')->textInput() ?>

    <?php echo $form->field($model, 'id_aula_miercoles')->textInput() ?>

    <?php echo $form->field($model, 'id_aula_jueves')->textInput() ?>

    <?php echo $form->field($model, 'id_aula_viernes')->textInput() ?>

    <?php echo $form->field($model, 'id_aula_sabado')->textInput() ?>

    <?php echo $form->field($model, 'id_aula_domingo')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
