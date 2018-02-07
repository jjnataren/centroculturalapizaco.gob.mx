<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\TallerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Talleres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taller-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Crear Taller', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_instructor',
            'nombre',
            'descripcion',
            'descripcion_temario',
            // 'numero_personas',
            // 'imagen_url:url',
            // 'temario_url:url',
            // 'fecha_creacion',
            // 'creado_por',
            // 'disponible',
            // 'duracion_mes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
