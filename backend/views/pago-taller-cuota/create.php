<?php



/* @var $this yii\web\View */
/* @var $model backend\models\PagoTallerCuota */

$this->title = 'Nuevo pago';
$this->params['breadcrumbs'][] = ['label' => 'Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pago-taller-cuota-create">

    <?php echo $this->render('_form', [
        'model' => $model,
        'alumnoDataProvider'=>$alumnoDataProvider,
        'alumnoSearchModel'=>$alumnoSearchModel,
        'tallerImpSearchModel'=>$tallerImpSearchModel,
        'tallerImpDataProvider'=>$tallerImpDataProvider
    ]) ?>

</div>
