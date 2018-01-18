<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Alumno */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumno-view">

    <p>
        <?php echo Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Credencial', ['imprimir-credencial', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('fFicha personal', ['imprimir-comprobante', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
      
        <?php echo Html::a('Delete', ['Eliminar', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
           // 'numero_registro',
            'nombre',
            'taller_inscribe',
            'fecha_ingreso',
            'fecha_nacimiento',
            'lugar_nacimiento',
            'sexo',
            'direccion',
            'nacionalidad',
           
            //'estado',
            
            'telefono_movil',
            'telefono_casa',
            'nombre_padre',
            'edad_padre',
            'ocupacion_padre',
            'tel_padre',
            'nombre_madre',
            'edad_madre',
            'ocupacion_madre',
            'tel_madre',
            
            
            'tel_emergencia',
            'escuela_procedencia',
            'alergia_enfermedad',
            'tipo_sangineo',
            'afiliacion_seguro',
            'curp',
            'fecha_alta',
            'codigo_postal',
            'fecha_baja',
            'correo_electronico',   
        ],
    ]) ?>

</div>
