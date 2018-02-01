<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Aula */

$this->title = 'Update Aula: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aulas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aula-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
