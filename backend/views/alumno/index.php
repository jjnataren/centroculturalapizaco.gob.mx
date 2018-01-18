<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\AlumnoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumnos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumno-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Agregar Alumno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'numero_registro',
            'nombre',
            'fecha_nacimiento',
            'fecha_alta',
            // 'sexo',
            // 'direccion',
            // 'nacionalidad',
            // 'estado',
            // 'codigo_postal',
            // 'fecha_baja',
            // 'correo_electronico',
            // 'telefono_movil',
            // 'telefono_casa',
            // 'nombre_padre',
            // 'edad_padre',
            // 'ocupacion_padre',
            // 'tel_padre',
            // 'nombre_madre',
            // 'edad_madre',
            // 'ocupacion_madre',
            // 'tel_madre',
            // 'fecha_ingreso',
            // 'lugar_nacimiento',
            // 'tel_emergencia',
            // 'escuela_procedencia',
            // 'alergia_enfermedad',
            // 'tipo_sangineo',
            // 'afiliacion_seguro',
            // 'curp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
