<?php


/* @var $this yii\web\View */
/* @var $model backend\models\Taller */

$this->title = 'Actualizar TALLER BASE: ID ' . $model->id . ' - ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['dashboard',  'id'=>$model->id]];
$this->params['breadcrumbs'][] = 'Actualizar TALLER BASE ';
?>
<div class="taller-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
