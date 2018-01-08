<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model backend\models\TallerImp */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="row">

<div class="col-md-12">
    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>
    
    <div class="col-md-6">
    <div class="panel panel-info">
    <div class="panel-heading">
    	Detalle del taller
    </div>
    <div class="panel-body">
	    
	     <dl class="dl-horizontal">
	     <?php echo $form->field($modelInscripcion, 'id_taller_imp')->hiddenInput(['value'=>$model->id])->label(false); ?>
						<dt><?= 'Id' ?></dt>
						<dd><?= $model->id?></dd>
						
						<dt><?= 'Nombre' ?></dt>
						<dd><?= $model->nombre?></dd>
						
						<dt><?= 'Instructor' ?></dt>
						<dd><?= ($model->instructor)?$model->instructor->nombre: '?' ?></dd>
						
						<dt><?= 'Fecha de inicio' ?></dt>
						<dd><?= $model->fecha_inicio ?></dd>
						
						<dt><?= 'Fecha fin' ?></dt>
						<dd><?= $model->fecha_fin ?></dd>
						
		</dl>				
	    
    </div>
    </div>
    </div>
    
    
    
    <div class="col-md-6 col-xs-12 col-sm-12">

			<div class="panel panel-info">

				<div class="panel-heading">Datos del alumno</div>

				<div class="panel-body">
    			 <?php echo $form->field($modelInscripcion, 'id_alumno')->hiddenInput(['id'=>'selectedAlumno'])->label(false); ?>
    			 
    			    <dl class="dl-horizontal">
						<dt><?= 'Id' ?></dt>
						<dd>
							
							<?php echo $form->field($modelInscripcion, 'id_alumno')->textInput(['maxlength' => true,'readonly'=>'readonly','id'=>'alumno_id'])->label(false); ?>
						</dd>

						<dt><?= 'Nombre' ?></dt>
						<dd>
							<label id="alumno_nombre"> <?= isset($modelInscripcion->alumno->nombre)?$modelInscripcion->alumno->nombre:'?' ?></label>
						</dd>

						<dt><?= 'CURP' ?></dt>
						<dd>
							<label id="alumno_curp"> <?= isset($modelInscripcion->alumno->curp)?$modelInscripcion->alumno->curp:'?' ?></label>
						</dd>

						<dt><?= 'Edad' ?></dt>
						<dd>
							<label id="alumno_fecha_nacimiento"> <?= isset($modelInscripcion->alumno->fecha_nacimiento)?$modelInscripcion->alumno->fecha_nacimiento:'?' ?></label>
						</dd>

					</dl>



				</div>

				<div class="panel-footer">
    			
    			
    			<?php
    Modal::begin([
        'header' => '<h2>Seleccionar alumno</h2>',
        'toggleButton' => [
            'label' => 'Agregar'
        ]
    ]);
    
    echo 'Seleccionar alumno';
    ?>

<div class="table-responsive">	
     <?php \yii\widgets\Pjax::begin(['timeout'=>8000,'id'=>'alumno-modal']); ?>
                                        
	                                        <div class="modal-body">
	                                        
	                                        
	                                           <?php
                                            
echo GridView::widget([
                                                'dataProvider' => $alumnoDataProvider,
                                                'filterModel' => $alumnoSearchModel,
                                                'columns' => [
                                                    [
                                                        'class' => 'yii\grid\SerialColumn'
                                                    ],
                                                    
                                                    'id',
                                                    // 'numero_registro',
                                                    'nombre',
                                                    'fecha_nacimiento',
                                                    'fecha_alta',
                                                    'sexo',
                                                    // 'afiliacion_seguro',
                                                    'curp',
                                                    [
                                                        'class' => 'yii\grid\ActionColumn',
                                                        'template' => '{select}', // Template de los botones. Aqui se indica que botones apareceran y el orden en el que apareceran
                                                        'buttons' => [
                                                            'select' => function ($url, $data, $id) { // Boton actualizar
                                                                return Html::a('<span class="fa fa-check-circle  fa-2x"></span>', '#', [
                                                                    'title' => 'Seleccionar',
                                                                    'class' => 'btn btn-primary',
                                                                    'data-loading-text' => "Loading...",
                                                                    'id' => 'alumno_' . $data->id,
                                                                    'name' => 'seleccionarAlumno',
                                                                    'value' => $data->id,
                                                                    'onclick' => "
                                                
												$('#alumno_$data->id').fadeIn(300);												
												$('#alumno_$data->id').removeClass('btn btn-primary').addClass('btn btn-success');
                                                $('.modal.in').modal('hide');
                                                $('#selectedAlumno').val($data->id);
                                                $('#alumno_id').val('$data->id');
                                                $('#alumno_nombre').html('$data->nombre');                        
                                                $('#alumno_curp').html('$data->curp');
                                                    dob = new Date('$data->fecha_nacimiento');
                                                    var today = new Date();
                                                    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                                                $('#alumno_fecha_nacimiento').html(age+' años');

											    return true;
									  "
                                                                ]);
                                                            }
                                                        
                                                        ]
                                                    ]
                                                
                                                ]
                                            ]);
                                            ?>
												
												
										    </div>
										    <?php \yii\widgets\Pjax::end(); ?>
										    
										    </div>


<?php Modal::end(); ?>
    	
    			
    		</div>
			</div>


		</div>
		
		
    <div class="col-md-6 col-xs-12 col-sm-12">

			<div class="panel panel-info">

				<div class="panel-heading">Detalle del pago</div>

				<div class="panel-body">
    			 <?php echo $form->field($modelInscripcion, 'id_pago')->hiddenInput(['id'=>'selectedPago'])->label(false); ?>
    			 
    			    <dl class="dl-horizontal">
						<dt><?= 'Id' ?></dt>
						<dd>
							
							<?php echo $form->field($modelInscripcion, 'id_pago')->textInput(['maxlength' => true,'readonly'=>'readonly','id'=>'pago_id'])->label(false); ?>
						</dd>

						<dt><?= 'Concepto' ?></dt>
						<dd>
							<label id="pago_concepto"> <?= isset($modelInscripcion->pago->concepto)?$modelInscripcion->pago->concepto:'?' ?></label>
						</dd>

						<dt><?= 'Fecha pago' ?></dt>
						<dd>
							<label id="pago_fecha_pago"> <?= isset($modelInscripcion->pago->fecha_pago)?$modelInscripcion->pago->fecha_pago:'?' ?></label>
						</dd>

						<dt><?= 'Metodo de pago' ?></dt>
						<dd>
							<label id="pago_metodo"> <?= isset($modelInscripcion->pago->fecha_pago)?$modelInscripcion->pago->fecha_pago:'?' ?></label>
						</dd>
						
							<dt><?= 'Monto' ?></dt>
						<dd>
							<label id="pago_metodo"> <?= isset($modelInscripcion->pago->monto)?$modelInscripcion->pago->monto:'?' ?></label>
						</dd>

					</dl>



				</div>

				<div class="panel-footer">
    			
    			
    			<?php
    Modal::begin([
        'header' => '<h2>Referencia de pago</h2>',
        'toggleButton' => [
            'label' => 'Agregar'
        ]
    ]);
    
    echo 'Seleccionar alumno';
    ?>

<div class="table-responsive">	
     <?php \yii\widgets\Pjax::begin(['timeout'=>8000,'id'=>'alumno-modal']); ?>
                                        
	                                        <div class="modal-body">
	                                        
	                                        
	                                           <?php
                                            
echo GridView::widget([
                                                'dataProvider' => $pagoDataProvider,
                                                'filterModel' => $pagoSearchModel,
                                                'columns' => [
                                                    [
                                                        'class' => 'yii\grid\SerialColumn'
                                                    ],
                                                    
                                                    'id',
                                                    // 'numero_registro',
                                                    'concepto',
                                                    'fecha_pago',
                                                    'monto',
                                                    [
                                                        'class' => 'yii\grid\ActionColumn',
                                                        'template' => '{select}', // Template de los botones. Aqui se indica que botones apareceran y el orden en el que apareceran
                                                        'buttons' => [
                                                            'select' => function ($url, $data, $id) { // Boton actualizar
                                                                return Html::a('<span class="fa fa-check-circle  fa-2x"></span>', '#', [
                                                                    'title' => 'Seleccionar',
                                                                    'class' => 'btn btn-primary',
                                                                    'data-loading-text' => "Loading...",
                                                                    'id' => 'alumno_' . $data->id,
                                                                    'name' => 'seleccionarAlumno',
                                                                    'value' => $data->id,
                                                                    'onclick' => "
                                                
												$('#alumno_$data->id').fadeIn(300);												
												$('#alumno_$data->id').removeClass('btn btn-primary').addClass('btn btn-success');
                                                $('.modal.in').modal('hide');
                                                $('#selectedPago').val($data->id);
                                                $('#pago_id').val('$data->id');
                                                $('#pago_concepto').html('$data->concepto');                        
                                                $('#pago_fecha_pago').html('$data->fecha_pago');
                                                $('#pago_monto').html('$data->monto');

											    return true;
									  "
                                                                ]);
                                                            }
                                                        
                                                        ]
                                                    ]
                                                
                                                ]
                                            ]);
                                            ?>
												
												
										    </div>
										    <?php \yii\widgets\Pjax::end(); ?>
										    
										    </div>


<?php Modal::end(); ?>
    	
    			
    		</div>
			</div>


		</div>


<div class="col-md-12">

    <?php echo $form->field($modelInscripcion, 'fecha_inscripcion')->widget(
    'trntv\yii\datetime\DateTimeWidget',
    	[
        'phpDatetimeFormat' => 'yyyy-MM-dd',
    	 
        'clientOptions' => [
        	'useCurrent'=>true,	
        	'showTodayButton'=>true,	
            'minDate' => new \yii\web\JsExpression('new Date("2015-01-01")'),
            'allowInputToggle' => false,
            'sideBySide' => true,
            'locale' => 'es-MX',
            'format' => 'DD/MM/YYYY HH:mm',
            
            'widgetPositioning' => [
               'horizontal' => 'auto',
               'vertical' => 'auto'
            ]
        ]
    ]); ?>

</div>



    <div class="col-md-12">
        <?php echo Html::submitButton($model->isNewRecord ? 'Inscribir' : 'Inscribir', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>