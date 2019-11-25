<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TallerImp */

$this->title = 'Actualizar Taller ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Talleres', 'url' => ['taller/index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['dashboard', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar taller';
?>
<div class="taller-imp-update">

    <?php echo $this->render('_form_taller_imp', [
        'model' => $model,
    ]) ?>

</div>
