<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Instructor */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="instructor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'fecha_nacimiento')->textInput() ?>

    <?php echo $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'numero_cedula')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'numero_registro')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'fecha_alta')->textInput() ?>

    <?php echo $form->field($model, 'fecha_baja')->textInput() ?>

    <?php echo $form->field($model, 'url_foto')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'url_fb')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'url_tw')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'url_cv')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'sexo')->textInput() ?>

    <?php echo $form->field($model, 'disponible')->textInput() ?>

    <?php echo $form->field($model, 'localidad')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
