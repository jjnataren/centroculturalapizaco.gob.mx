<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Taller */

$this->title = 'Actualizar Taller: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tallers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="taller-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
