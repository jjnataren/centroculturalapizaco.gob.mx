<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\InstructorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instructors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructor-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Instructor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'fecha_nacimiento',
            'direccion',
            'numero_cedula',
            // 'numero_registro',
            // 'fecha_alta',
            // 'fecha_baja',
            // 'url_foto:url',
            // 'url_fb:url',
            // 'url_tw:url',
            // 'url_cv:url',
            // 'sexo',
            // 'disponible',
            // 'localidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
