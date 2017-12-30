<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TallerImp */

$this->title = 'Update Taller Imp: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Taller Imps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="taller-imp-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
