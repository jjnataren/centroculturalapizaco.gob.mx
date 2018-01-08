<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PagoTallerCuotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pago Taller Cuotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pago-taller-cuota-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Pago Taller Cuota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_taller_imp',
            'id_cuota',
            'monto',
            'id_alumno',
            // 'concepto',
            // 'fecha_pago',
            // 'metodo_pago',
            // 'comentario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
