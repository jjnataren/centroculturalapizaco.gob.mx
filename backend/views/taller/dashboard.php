<?php

use backend\models\Cuota;
use kartik\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use backend\models\CuotaTaller;



/* @var $this yii\web\View */
/* @var $model backend\models\TallerImp */

$this->title = 'Talleres' ;
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
              <h3 class="box-title">Información de taller base</h3>

              <div class="box-tools pull-right">
              <?php echo Html::a('<i class="fa fa-print"></i>', ['imprimir-info', 'id' => $model->id], ['class' => 'btn','target'=>'_blank']) ?>
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
            <div class="col-md-3">
            <dl>
              
               <dd><img class="img-thumbnail" style="width:350px; height:250px;" src="<?= isset ($model->path)? $model->base_url.'/' . $model->path : '/img/clipboard.png'?>" alt="" /></dd>
                
              
              </dl>
              </div>
              <div class="col-md-3">
				
              <dl>
                <dt>Nombre del taller </dt>
               <dd><?=$model->nombre;?></dd>
                
                <dt>Descripción</dt>
                <dd><?=$model->descripcion;?></dd>
               <dt>Instructor</dt>
              
                <dd><?=isset($model->instructor->nombre)?$model->instructor->nombre:'?';?></dd>
               <dt>Categoría</dt>
               <dd><?=$model->categoria->nombre;?></dd>
              </dl>
             </div> 
              <div class="col-md-3">
            
              <dl>
               <dt>Aula preferente</dt>
               <dd><?=$model->aula->nombre;?></dd>
                <dt>Maximo de personas</dt>
                 <dd><?=$model->numero_personas;?></dd>
              
               <dt>Duración meses</dt>
               <dd><?=$model->duracion_mes;?></dd>
               <dt>Duración hora</dt>
               <dd><?=$model->duracion_hora;?></dd>
               
              </dl>
             </div> 
              <div class="col-md-3">
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
                
                <dt>Disponible</dt>
               <dd><?=$model->disponible;?></dd>
               <dt>Fecha de creación</dt>
               <dd><?=$model->fecha_creacion;?></dd>
               
               
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
              <h3 class="box-title">Cuotas base</h3>

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
             	        'nombre',
             	        [
             	            'attribute'=>'id_cuota',
             	            'header'=>'Concepto',
             	            'content'=>function($data){
             	            
             	            //   $categoriaproducto = isset(TipoProducto::$categoriaDesc[$data->tipoProducto->categoria]) ? TipoProducto::$categoriaDesc[$data->tipoProducto->categoria] : 'Desconocido';
             	        
             	        return  $data->idCuota->concepto;
             	        
             	            },
             	            'filter'=>ArrayHelper::map(Cuota::findAll([ 'disponible'=>1]), 'id','concepto'),
             	            ],
             	            
             	            
             	            [
             	                'header'=>'Monto',
             	                'content'=>function($data){
             	                
             	                return  Yii::$app->formatter->asCurrency($data->idCuota->monto);
             	                },
             	                
             	                ],
             	                
             	              
             	                
             	                [
             	                    'attribute'=>'obligatoria',
             	                    
             	                    'content'=>function($data){
             	                    
             	                    return  ($data->obligatoria)?'SI':'Opcional';
             	                    
             	                    },
             	                    'filter'=>[0=>'Opcional',1=>'Si'],
             	                    ],
             	                    
             	                    // 'comentario',
             	                    // 'tipo_periodo',
             	                    
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
               <div class="box box-primary with-border">
            <div class="box-header with-border">
              <h3 class="box-title">Talleres disponibles.</h3>

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
  
    [
        'attribute' => 'id',
        'vAlign'=>'middle',
        
    ],
    [
        'attribute' => 'nombre',
        'vAlign'=>'middle',
        
    ],
    [
        'attribute' => 'fecha_inicio',
        'vAlign'=>'middle',
        
    ],
    [
        'attribute' => 'fecha_fin',
        'vAlign'=>'middle',
    ],
    'estatus',
    ['class' => 'yii\grid\ActionColumn',
        'template' => '{view}',
        'buttons' => [
            
            'view' => function ($url, $model, $key) {
            //Html::a('borrar', ['cuota-taller/delete','id'=>$key], ['class' => 'bg-red label']);
    return Html::a('', ['taller-imp/dashboard', 'id'=>$model->id], [
    'class' => 'fa fa-tachometer','data-pjax' => '0',
    ]);
            }
            ]
            
            
            ]
];

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $gridColumns,
    'resizableColumns'=>true,
    
    //    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
    
    'toolbar' =>  [
        ['content'=>
            Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type'=>'button', 'title'=>Yii::t('kvgrid', 'Imartir nuevo'), 'class'=>'btn btn-success', ]) . ' '.
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

</div>





	<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
            <?php $form = ActiveForm::begin(['action' =>['cuota','id'=>$model->id]]); ?>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Crear nueva cuota base</h4>
              </div>
              <div class="modal-body">
                



     
	<div class="col-md-12">
    <?php 
    
    $cuotaModel  =  new CuotaTaller();
    echo $form->errorSummary($model); ?>
    </div> 


 <?= $form->field($cuotaModel, 'id_cuota',['template' => 
		     		'<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-sticky-note"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'])->dropDownList($cuotaList,
   						['prompt'=>'-- TIPO DE CUOTA  --',
   						'id' => 'selectPro',
   						'onchange'=>'
			                $.get( "'.Yii::$app->urlManager->createUrl('tipo-producto/get-img?id=').'"+$(this).val(), function( data ) {
			                  $( "#divimg" ).html( data );
			                });
            			',
   						
      ]) ?>
      
      <?php echo $form->field($cuotaModel, 'obligatoria')->checkbox(['class'=>'form']); ?>
      
       <?= $form->field($cuotaModel, 'tipo_periodo',['template' => 
		     		'<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-calendar-o"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'])->dropDownList([2=>'Semanal', 1=>'Mensual', 3=>'Anual'],
   						['prompt'=>'-- PERIODICIDAD  --',
   						'id' => 'selectPro',
   						'onchange'=>'
			                $.get( "'.Yii::$app->urlManager->createUrl('tipo-producto/get-img?id=').'"+$(this).val(), function( data ) {
			                  $( "#divimg" ).html( data );
			                });
            			',
   						
      ]) ?>
      
      
       <?php echo $form->field($cuotaModel, 'nombre', ['template' => 
		     		'<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-pencil"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'])->textInput(['placeholder' => 'Alias para esta cuota','class'=>'form-control input-lg','maxlength' => '16'])->label(false); ?>
      
      
      
        <?php echo $form->field($cuotaModel, 'comentario', ['template' => 
		     		'<div class="form-group">
		       		 <div class="input-group">
		          <span class="input-group-addon" >
		             <span class="fa fa-pencil"></span>
		          </span>
		          {input}
		     		
		       </div>
		     			
		      <div> {error}{hint}</div>
   				</div>'])->textArea(['placeholder' => 'Comentario de ayuda','class'=>'form-control input-lg','maxlength' => '200'])->label(false); ?>
      

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                 <?php echo Html::submitButton($cuotaModel->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
              </div>
            </div>
            <?php ActiveForm::end(); ?>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


