<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TallerImp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Taller Imps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Reporte de pago.
            <small class="pull-right">Date: 2/10/2014</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <strong>Alumno</strong> 
          <address>
          Nombre: <?= isset( $modelPago->alumno)?$modelPago->alumno->nombre : '?' ;?><br>
           Direccion: <?= isset( $modelPago->alumno)?$modelPago->alumno->direccion : '?' ;?><br>
            Correo: <?= isset( $modelPago->alumno)?$modelPago->alumno->correo_electronico : '?' ;?><br>
             Telefono: <?= isset( $modelPago->alumno)?$modelPago->alumno->telefono_casa : '?' ;?><br>
          Nombre del padre: <?= isset( $modelPago->alumno)?$modelPago->alumno->nombre_padre : '?' ;?>
            
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <strong> Taller </strong><br>
         <address>
           Nombre del taller: <?=$model->nombre;?><br>
            Descripción: <?=$model->descripcion;?><br>
            Duracion: <?=$model->duracion_mes;?> meses
              </address>
            <dl>
                <dt>Dias para impartir</dt>
                 <?php if ($model->lunes):?>
                <dd>Lunes</dd>
                <?php endif;?>
                <?php if ($model->martes):?>
                <dd>Martes</dd>
                <?php endif;?>
                <?php if ($model->miercoles):?>
                <dd>Miercoles</dd>
                <?php endif;?>
                <?php if ($model->jueves):?>
                <dd>Jueves</dd>
                <?php endif;?>
                <?php if ($model->viernes):?>
                <dd>Viernes</dd>
                <?php endif;?>
                <?php if ($model->sabado):?>
                <dd>Sabado</dd>
                <?php endif;?>
                <?php if ($model->domingo):?>
                <dd>Domingo</dd>
                <?php endif;?>
               </dl>
          
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Instructor</b><br>
         Nombre:  <?=isset($model->instructor->nombre)?$model->instructor->nombre:'?';?>
          <br>
         Direccion: <?=$model->instructor->direccion;?><br>
         Sexo: <?=$model->instructor->sexo;?><br>
        Correo Electronico: <?=$model->instructor->correo_electroinico;?><br>
        Telefono: <?=$model->instructor->telefono;?><br>
          
          
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>id</th>
              <th>Concepto</th>
              <th>Detalles</th>
              <th>Descripcion</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td><?=$model->nombre;?></td>
              <td><?=$modelPago->concepto;?></td>
              <td><?=$model->descripcion;?></td>
              <td><?= Yii::$app->formatter->asCurrency($modelPago->monto); ?></td>
            </tr>
           
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Formas de pago:</p>
          
           <i class="fa fa-cc-visa fa-5x"></i>
           <i class="fa fa-cc-mastercard fa-5x"></i>
           <i class="fa fa-cc-amex fa-5x"></i>
           <i class="fa fa-cc-paypal fa-5x"></i>
         
          
         

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
           Para su comodidad, puede realizar su pago por estos metodos.
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <table class="table">
              <tbody><tr>
                <th style="width:50%">Subtotal:</th>
                <td><?= Yii::$app->formatter->asCurrency($modelPago->monto); ?></td>
              </tr>
              <tr>
                <th>IVA (0.16%)</th>
                <td>$0</td>
              </tr>
             
              <tr>
                <th>Total:</th>
                <td><?= Yii::$app->formatter->asCurrency($modelPago->monto); ?></td>
              </tr>
            </tbody></table>
            
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
         
           <?=HTML::a('<i class="fa  fa-reply"></i> Regresar',['dashboard','id'=>$model->id],['class'=>'btn btn-danger pull-right'])
          ?>
          <?=HTML::a('<i class="fa fa-download"></i> Imprimir comprobante de pago',['imprimir-cole','id'=>$modelPago->id],['class'=>'btn btn-primary pull-right','target'=>'_blank'])
          ?>
          
        </div>
      </div>
    </section>