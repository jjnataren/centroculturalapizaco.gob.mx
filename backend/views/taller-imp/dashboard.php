<?php

use backend\models\Cuota;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TallerImp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Talleres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;





$cuotaList=ArrayHelper::map
(Cuota::findBySql('select id,  CONCAT(id, \' - \',concepto ) as concepto from tbl_cuota where disponible = 1')->all(), 'id', 'concepto');

?>
<div class="col-md-12 col-sm-12 col-xs-12">


   

          
          <div class="col-md-12">
               <div class="box box-info with-border">
            <div class="box-header with-border">
            	<i class="fa fa-th"></i>
              <h3 class="box-title">Información de taller</h3>

              <div class="box-tools pull-right">
              <?php echo Html::a('<i class="fa fa-pencil"></i>', ['update', 'id' => $model->id], ['class' => 'btn']) ?>
              <?php echo Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $model->id], [
                    'class' => 'btn',
                    'data' => [
                        'confirm' => 'Si elimina este curso base se perdera todo el historial de los cursos impartidos y por impartir?',
                        'method' => 'post',
                    ],
                ]) ?>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-4">
              <dl>
                <dt>Nombre</dt>
               <dd><?=$model->nombre;?></dd>
                
                <dt>Descripción</dt>
                <dd><?=$model->descripcion;?></dd>
               <dt>Duración meses</dt>
               <dd><?=$model->duracion_mes;?></dd>
               <dt>Duración hora</dt>
               <dd><?=$model->duracion_hora;?></dd>
              </dl>
             </div> 
              <div class="col-md-4">
            
              <dl>
                <dt>Instructor</dt>
                <dd><?=isset($model->instructor->nombre)?$model->instructor->nombre:'?';?></dd>
                <dt>Descripción</dt>
                <dd><?=$model->descripcion;?></dd>
               <dt>Duración meses</dt>
               <dd><?=$model->duracion_mes;?></dd>
               <dt>Duración hora</dt>
               <dd><?=$model->duracion_hora;?></dd>
              </dl>
             </div> 
              <div class="col-md-4">
              <dl>
                <dt>Dias preferentes para impartir</dt>
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
                
                <dt>Descripción</dt>
                <dd><?=$model->descripcion;?></dd>
               <dt>Duración meses</dt>
               <dd><?=$model->duracion_mes;?></dd>
               <dt>Duración hora</dt>
               <dd><?=$model->duracion_hora;?></dd>
              </dl>
             </div> 
            </div>
            <div class="box-footer no-padding">
            	
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        <div class="col-md-12">
               <div class="box box-success with-border">
            <div class="box-header with-border">
            <i class="fa fa-dollar"></i>
              <h3 class="box-title">Cuotas del taller</h3>

              <div class="box-tools pull-right">
              	
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             	    <?php 
             	    
             	    
             	    $gridCuotaColumns = [   ['class' => 'yii\grid\SerialColumn'],
             	        
             	        //'id',
             	        'concepto_imp',
             	        [
             	            'attribute'=>'id_cuota',
             	            'header'=>'Tipo cuota',
             	            'content'=>function($data){
                     	        return  $data->idCuota->concepto;
             	            },
             	            'filter'=>ArrayHelper::map(Cuota::findAll([ 'disponible'=>1]), 'id','concepto'),
             	            ],
             	            
             	            
             	            [
             	                'attribute'=>'monto',
             	                'header'=>'Monto',
             	                'content'=>function($data){
             	                
             	                return  Yii::$app->formatter->asCurrency($data->idCuota->monto);
             	                },
             	                
             	                ],
             	                
             	                'fecha_max_pago',
             	                [
             	                    'attribute'=>'obligatoria',
             	                    
             	                    'content'=>function($data){
             	                    
             	                    return  ($data->obligatoria)?'SI':'Opcional';
             	                    
             	                    },
             	                    'filter'=>[0=>'Opcional',1=>'Si'],
             	                 ],
             	                    
             	                    ['class' => 'yii\grid\ActionColumn',
             	                        'template' => '{delete}',
             	                        'buttons' => [
             	                            
             	                            'delete' => function ($url, $model, $key) {
             	                            //Html::a('borrar', ['cuota-taller/delete','id'=>$key], ['class' => 'bg-red label']);
                         	                    return Html::a('', ['cuota-taller/delete', 'id'=>$model->id], [
                         	                    'class' => 'fa fa-trash',
                         	                    'data' => [
                         	                    'confirm' => "Are you sure you want to delete profile?",
                         	                    'method' => 'post',
                         	                    ],
                         	                    ]);
             	                            }
             	                            ]
             	                            
             	                            
             	                            ],];
             	    
             	    
             	    echo GridView::widget([
             	        'dataProvider' => $dataCuotaProvider,
             	        'filterModel' => $searchCuotaModel,
             	        'columns' => $gridCuotaColumns,
             	        'resizableColumns'=>true,
             	        
             	        //    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
             	        
             	        'toolbar' =>  [
             	            ['content'=>
             	                Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type'=>'button','data-target'=>'#modal-default' , 'data-toggle'=>'modal' , 'title'=>'Nueva cuota', 'class'=>'btn btn-success', ]) . ' '.
             	                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], ['data-pjax'=>0, 'class' => 'btn btn-default', 'title'=>Yii::t('kvgrid', 'Reset Grid')])
             	            ],
             	            '{export}',
             	            '{toggleData}'
             	        ],
             	        'pjax' => true,
             	        'bordered' => true,
             	        'striped' => true,
             	        'condensed' => true,
             	        'responsive' => true,
             	        'hover' => true,
             	        'floatHeader' => true,
             	        'floatHeaderOptions' => ['scrollingTop' => false],
             	        'panel' => [
             	            'type' => GridView::TYPE_PRIMARY
             	        ],
             	    ]);
             	    
             	    
             	   ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        
        <div class="col-md-12">
               <div class="box box-success with-border">
            <div class="box-header with-border">
            <i class="fa fa-dollar"></i>
              <h3 class="box-title">Relación de pagos</h3>

              <div class="box-tools pull-right">
              	
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                             	   <?php 
                
                $gridColumns = [
                    ['class' => 'kartik\grid\SerialColumn'],
                    
                    [
                        'attribute'=>'id_alumno',
                        'value'=>function ($data, $key, $index, $widget) {
                        return "".$data->alumno->nombre;
                        },
                        'vAlign'=>'middle',
                        'format'=>'raw',
                        'header'=>'Alumno',
                        'group'=>true,
                    ],
                        
                        
                    [
                       
                        'attribute' => 'id',
                        'vAlign'=>'middle',
                        'header'=>'Referencia pago',
                        
                        
                    ],
                    
                    [
                        
                        'attribute' => 'concepto',
                        'vAlign'=>'middle',
                        
                        
                    ],
                    [
                        
                        'attribute' => 'fecha_pago',
                        'vAlign'=>'middle',
                        
                    ],
                    [
                        
                        'attribute' => 'monto',
                        'vAlign'=>'middle',
                       
                        
                        
                    ],
                    
                
                            ];
                
                
                
                
                echo GridView::widget([
                    'dataProvider' => $pagoDataProvider,
                    'filterModel' => $pagoSearchModel,
                    'columns' => $gridColumns,
                    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
                
                    'toolbar' =>  [
                        ['content'=>
                            Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type'=>'button', 'title'=>Yii::t('kvgrid', 'Inscribir alumno'), 'class'=>'btn btn-success', ]) . ' '.
                            Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['grid-demo'], ['data-pjax'=>0, 'class' => 'btn btn-default', 'title'=>Yii::t('kvgrid', 'Reset Grid')])
                        ],
                        '{export}',
                        '{toggleData}'
                    ],
                    'pjax' => true,
                    'bordered' => true,
                    'striped' => true,
                    'condensed' => true,
                    'responsive' => true,
                    'hover' => true,
                    'floatHeader' => true,
                    'floatHeaderOptions' => ['scrollingTop' => false],
                    
                    'panel' => [
                        'type' => GridView::TYPE_PRIMARY
                    ],
                ]);
                
                
                ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        
         <div class="col-md-12">
               <div class="box box-success with-border">
            <div class="box-header with-border">
            <i class="fa fa-dollar"></i>
              <h3 class="box-title">Relación de alumnos inscritos</h3>

              <div class="box-tools pull-right">
              	
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php 
          $gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    [
       
        'attribute' => 'id',
        'vAlign'=>'middle',
        'header'=>'Folio de inscripción',
        
        
    ],
    [
        
        'attribute' => 'fecha_inscripcion',
        'vAlign'=>'middle',
        
    ],
    [
        
        'attribute' => 'id_pago',
        'vAlign'=>'middle',
       
        
        
    ],
    [
        'attribute'=>'id_alumno',
        'value'=>function ($data, $key, $index, $widget) {
        return "".$data->alumno->nombre;
        },
        'vAlign'=>'middle',
        'format'=>'raw',
        'header'=>'Alumno',
        ],
        [
            'attribute'=>'id_alumno',
            'value'=>function ($data, $key, $index, $widget) {
            return "".$data->alumno->direccion;
            },
            'vAlign'=>'middle',
            'header'=>'Dirección',
            ],
            [
                'attribute'=>'id_alumno',
                'value'=>function ($data, $key, $index, $widget) {
                return "".($data->alumno->sexo)?'Hombre':'Mujer';
                },
                'vAlign'=>'middle',
                'header'=>'Sexo',
                ],
                
                [
                    'attribute'=>'id_alumno',
                    'value'=>function ($data, $key, $index, $widget) {
                    return "".($data->alumno->tel_emergencia);
                    },
                    'vAlign'=>'middle',
                    'header'=>'Telefono emergencía',
                    ],
                    
       

            ];




echo GridView::widget([
    'dataProvider' => $alumnoDataProvider,
    'filterModel' => $alumnoSearchModel,
    'columns' => $gridColumns,
    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false

    'toolbar' =>  [
        ['content'=>
            Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type'=>'button', 'title'=>Yii::t('kvgrid', 'Inscribir alumno'), 'class'=>'btn btn-success', ]) . ' '.
            Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['grid-demo'], ['data-pjax'=>0, 'class' => 'btn btn-default', 'title'=>Yii::t('kvgrid', 'Reset Grid')])
        ],
        '{export}',
        '{toggleData}'
    ],
    'pjax' => true,
    'bordered' => true,
    'striped' => true,
    'condensed' => true,
    'responsive' => true,
    'hover' => true,
    'floatHeader' => true,
    'floatHeaderOptions' => ['scrollingTop' => false],
    
    'panel' => [
        'type' => GridView::TYPE_PRIMARY
    ],
]);


?>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        
</div>





	<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Crear nueva cuota base</h4>
              </div>
              <div class="modal-body">
                



     
          </div>
          <!-- /.modal-dialog -->
        </div>
        </div>
        </div>
        


