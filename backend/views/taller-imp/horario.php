<?php

use backend\models\Aula;
use backend\models\Categoria;
use backend\models\Instructor;
use kartik\datecontrol\DateControl;
use kartik\time\TimePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$instructorList = ArrayHelper::map(Instructor::findBySql('select id,  CONCAT(id, \' - \',nombre ) as nombre from tbl_instructor where disponible = 1')->all(), 'id', 'nombre');

$aulaList = ArrayHelper::map(Aula::findBySql('select id,  CONCAT(id, \' - \',nombre ) as nombre from tbl_aula where disponible = 1')->all(), 'id', 'nombre');

$categoriaList = ArrayHelper::map(Categoria::findBySql('select id,  CONCAT(id, \' - \',nombre ) as nombre from tbl_categoria where disponible = 1')->all(), 'id', 'nombre');



$this->title = 'Horarios taller: ID ' . $model->id . '  -  ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['dashboard',  'id'=>$model->id]];
$this->params['breadcrumbs'][] = 'Horarios';

Yii::$app->formatter->locale = 'es-MX';
?>



<div class="row">



	<div class="col-md-12">
		<div class="box box-info with-border">
            <div class="box-header with-border">
            	<i class="fa fa-clock-o"></i>
              <h3 class="box-title">Horarios</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

             <?php $form = ActiveForm::begin(); ?>


            <!-- /.box-header -->
            <div class="box-body">
<?php echo $form->errorSummary($model); ?>

    		<div class="col-md-4">
    		<div class="panel panel-default">
    		<div class="panel-heading">


    		 <?php echo $form->field($model, 'dis_lunes')->checkbox(['class'=>'form','id'=>'dis_lunes']); ?>




    		</div>



    		<div class="panel-body">
    		<label>Aula</label>
    			<?=$form->field($model, 'id_aula_lunes', ['template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-building-o"></span>
		          </span>
		          {input}

		       </div>

		      <div> {error}{hint}</div>
   				</div>'])->dropDownList($aulaList, ['prompt' => '-- Aula/salon  --'])?>

    			<?php
    			echo $form->field($model, 'lunes')->widget(TimePicker::classname(), [
               		    //'type'=>DateControl::FORMAT_TIME,
               		   // 'ajaxConversion'=>false,

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

               		])->label("Inicio");?>


    			<?php
    			echo $form->field($model, 'lunes_fin')->widget(TimePicker::classname(), [
    			    //'type'=>DateControl::FORMAT_TIME,
    			    // 'ajaxConversion'=>false,

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Fin");?>

    		</div>
    		</div>
    		</div>
    		<div class="col-md-4">
    		<div class="panel panel-default">
    		<div class="panel-heading"> <?php echo $form->field($model, 'dis_martes')->checkbox(['class'=>'form','id'=>'dis_martes']); ?></div>
    		<div class="panel-body">
    		<label>Aula</label>
    			<?=$form->field($model, 'id_aula_martes', ['template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-building-o"></span>
		          </span>
		          {input}

		       </div>

		      <div> {error}{hint}</div>
   				</div>'])->dropDownList($aulaList, ['prompt' => '-- Aula/salon  --'])?>

   				<?php
   				echo $form->field($model, 'martes')->widget(TimePicker::classname(), [

   				    'pluginOptions' => [ 'showMeridian' => false,],
   				    'options' => [
   				        'readonly' => true,
   				    ],

   				])->label("Inicio");?>


    			<?php
    			echo $form->field($model, 'martes_fin')->widget(TimePicker::classname(), [

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Fin");?>

    		</div>
    		</div>
    		</div>
    		<div class="col-md-4">
    		<div class="panel panel-default">
    		<div class="panel-heading">
    		 <?php echo $form->field($model, 'dis_miercoles')->checkbox(['class'=>'form','id'=>'dis_miercoles']); ?>
    		</div>
    		<div class="panel-body">
    			<label>Aula</label>
    			<?=$form->field($model, 'id_aula_miercoles', ['template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-building-o"></span>
		          </span>

		          {input}


		       </div>

		      <div> {error}{hint}</div>
   				</div>'])->dropDownList($aulaList, ['prompt' => '-- Aula/salon  --'])?>

    			<?php
    			echo $form->field($model, 'miercoles')->widget(TimePicker::classname(), [

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Inicio");?>


    			<?php
    			echo $form->field($model, 'miercoles_fin')->widget(TimePicker::classname(), [

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Fin");?>

    		</div>
    		</div>
    		</div>
    		<div class="col-md-4">
    		<div class="panel panel-default">
    		<div class="panel-heading">
    		 <?php echo $form->field($model, 'dis_jueves')->checkbox(['class'=>'form','id'=>'dis_jueves']); ?>
    		</div>
    		<div class="panel-body">
    		<label>Aula</label>
    			<?=$form->field($model, 'id_aula_jueves', ['template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-building-o"></span>
		          </span>
		          {input}

		       </div>

		      <div> {error}{hint}</div>
   				</div>'])->dropDownList($aulaList, ['prompt' => '-- Aula/salon  --'])?>

    			<?php
    			echo $form->field($model, 'jueves')->widget(TimePicker::classname(), [

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Inicio");?>


    			<?php
    			echo $form->field($model, 'jueves_fin')->widget(TimePicker::classname(), [

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Fin");?>

    		</div>
    		</div>
    		</div>
    		<div class="col-md-4">
    		<div class="panel panel-default">
    		<div class="panel-heading">
    			 <?php echo $form->field($model, 'dis_viernes')->checkbox(['class'=>'form','id'=>'dis_viernes']); ?>
    		</div>
    		<div class="panel-body">
    		<label>Aula</label>
    			<?=$form->field($model, 'id_aula_viernes', ['template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-building-o"></span>
		          </span>
		          {input}

		       </div>

		      <div> {error}{hint}</div>
   				</div>'])->dropDownList($aulaList, ['prompt' => '-- Aula/salon  --'])?>

    			<?php
    			echo $form->field($model, 'viernes')->widget(TimePicker::classname(), [

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Inicio");?>


    			<?php
    			echo $form->field($model, 'viernes_fin')->widget(TimePicker::classname(), [

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Fin");?>

    		</div>
    		</div>
    		</div>
    		<div class="col-md-4">
    		<div class="panel panel-default">
    		<div class="panel-heading">
    			 <?php echo $form->field($model, 'dis_sabado')->checkbox(['class'=>'form','id'=>'dis_sabado']); ?>
    		</div>
    		<div class="panel-body">
    		<label>Aula</label>
    			<?=$form->field($model, 'id_aula_sabado', ['template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-building-o"></span>
		          </span>
		          {input}

		       </div>

		      <div> {error}{hint}</div>
   				</div>'])->dropDownList($aulaList, ['prompt' => '-- Aula/salon  --'])?>

    			<?php
    			echo $form->field($model, 'sabado')->widget(TimePicker::classname(), [

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Inicio");?>


    			<?php
    			echo $form->field($model, 'sabado_fin')->widget(TimePicker::classname(), [

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Fin");?>

    		</div>
    		</div>
    		</div>
    		<div class="col-md-4">
    		<div class="panel panel-default">
    		<div class="panel-heading">
    			 <?php echo $form->field($model, 'dis_domingo')->checkbox(['class'=>'form','id'=>'dis_domingo']); ?>
    		</div>
    		<div class="panel-body">
    		<label>Aula</label>
    			<?=$form->field($model, 'id_aula_domingo', ['template' => '<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-building-o"></span>
		          </span>
		          {input}

		       </div>

		      <div> {error}{hint}</div>
   				</div>'])->dropDownList($aulaList, ['prompt' => '-- Aula/salon  --'])?>

    			<?php
    			echo $form->field($model, 'domingo')->widget(TimePicker::classname(), [

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Inicio");?>


    			<?php
    			echo $form->field($model, 'domingo_fin')->widget(TimePicker::classname(), [

    			    'pluginOptions' => [ 'showMeridian' => false,],
    			    'options' => [
    			        'readonly' => true,
    			    ],

    			])->label("Fin");?>

    		</div>
    		</div>
    		</div>




   </div>

      <div class="box-footer">
        <?php echo Html::submitButton( 'Guardar', ['class' =>  'btn btn-primary']); ?>
     	<?= Html::a('Cancelar', ['taller-imp/dashboard', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

   </div>
   </div>

</div>