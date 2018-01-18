<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use backend\models\TallerImp;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PagoTallerCuotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pago Taller Cuotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-12">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Pago Taller Cuota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    
    
    
    
    <?php 

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    [
       
        'attribute' => 'id',
        'vAlign'=>'middle',
        'header'=>'Folio de pago',
        
        
    ],
    
    
    [
        'attribute' => 'id_taller_imp',
        'vAlign' => 'middle',
        'width' => '180px',
        'value' => function ($model, $key, $index, $widget) {
        return Html::a($model->id_taller_imp . ' - ' . $model->tallerImp->nombre,
            '#',
            ['title' => 'View author detail', 'onclick' => 'alert("This will open the author page.\n\nDisabled for this demo!")']);
        },
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => ArrayHelper::map(TallerImp::findBySql('select id, concat (id, " - " , nombre) as nombre  from tbl_taller_imp')->orderBy('nombre')->asArray()->all(), 'id', 'nombre'),
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => 'Todos'],
        'format' => 'raw'
        ],
        
        
        [
            'attribute' => 'id_cuota',
            'vAlign' => 'middle',
            'width' => '180px',
            'value' => function ($model, $key, $index, $widget) {
            return Html::a($model->cuota->concepto,
                '#',
                ['title' => 'View author detail', 'onclick' => 'alert("This will open the author page.\n\nDisabled for this demo!")']);
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => ArrayHelper::map(TallerImp::findBySql('select id, concepto  from tbl_cuota')->orderBy('concepto')->asArray()->all(), 'id', 'concepto'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Todas'],
            'format' => 'raw'
      ],
    

    
    [
        
        'attribute' => 'monto',
        'vAlign'=>'middle',
        
    ],
    
    [
        
        'attribute' => 'concepto',
        'vAlign'=>'middle',
        
    ],
    
    [
        
        'attribute' => 'fecha_pago',
        'filterType'=> \kartik\grid\GridView::FILTER_DATE_RANGE,
        'filterWidgetOptions' => [
            'presetDropdown' => true,
            'hideInput'=>false,
            'value'=>'',
            'pluginOptions'=>[
                'locale'=>[
                    'format' => 'YYYY-MM-DD',
                    'separator'=>' a ',
                ],

            ]
           
        ],
        'vAlign'=>'middle',
        'width' => '200px',
        
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
           
                    
       

            ];




echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $gridColumns,

//    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false

    'toolbar' =>  [
        ['content'=>
            Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type'=>'button', 'title'=>Yii::t('kvgrid', 'Inscribir alumno'), 'class'=>'btn btn-success', ]) . ' '.
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
    
    

