<?php

namespace backend\controllers;

use Yii;
use kartik\mpdf\Pdf;
use backend\models\TallerImp;
use backend\models\search\AlumnoSearch;
use backend\models\search\TallerImpSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\CuotaTallerImp;
use backend\models\Cuota;
use backend\models\Alumno;
use yii\helpers\Json;
use backend\models\PagoTallerCuota;
use backend\models\Inscripcion;
use backend\models\search\PagoTallerCuotaSearch;

/**
 * TallerImpController implements the CRUD actions for TallerImp model.
 */
class TallerImpController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TallerImp models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TallerImpSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TallerImp model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TallerImp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TallerImp();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TallerImp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    
    
    /**
     * Updates an existing TallerImpCuota model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionCuota($id)
    {
       $model = $this->findModel($id);
        

            return $this->render('cuota', [
                'model' => $model,
            ]);
        
    }
    
    
    /**
     * Updates an existing TallerImpCuota model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdateCuota($id)
    {
        
        
        if (($model = CuotaTallerImp::findOne($id)) !== null   && $model->load(Yii::$app->request->post()) && $model->save() ) {
        
            
            Yii::$app->getSession()->setFlash($id, [
                'body'=>'Se ha actualizado el registro correctamente.',
                'options'=>['class'=>'alert-danger']
            ]);
            
            return $this->redirect(['cuota', 'id' => $model->id_taller_imp]);
            
            
        } else {
            
            
            Yii::$app->getSession()->setFlash($id, [
                'body'=>'Ocurrio un error al guardar la cuota.',
                'options'=>['class'=>'alert-danger']
            ]);
            
            return $this->redirect(['cuota', 'id' => $model->id_taller_imp]);
        }
        
        
   
        
    }
    
    
    
    /**
     * Prints new  instription 
     * @param unknown $id
     */
    public function actionImprimirComprobante($id){
        
        //	Yii::$app->response->format = 'pdf';
        
      //  $model = Inscripcion::findOne($id);
        
        $content = $this->renderPartial('reporte-inscripcion');
        
        
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_UTF8,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            //'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}
    							#menu{
								      font:5px;
								    }',
            // set mPDF properties on the fly
            'options' => ['title' => 'Reporte de orden de venta'],
            // call mPDF methods on the fly
            'methods' => [
                'SetHeader'=>['Reporte orden de venta'],
                'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        
        // return the pdf output as per the destination setting
        return $pdf->render();
        
    }
    
    /**
     *
     * @param integer $id
     */
    public function actionConfirmarInscripcion($id){
        
        
        $model = Inscripcion::findOne($id);
        
        
        if ($model === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        
        return $this->render('confirmacion-inscripcion',['model'=>$model]);
        
    }
    
    
    /**
     * 
     * @param integer $id
     */
    public function actionInscripciones($id){
        
        $model = $this->findModel($id);
        
        $modelInscripcion = new Inscripcion();
        
        $alumnoSearchModel = new AlumnoSearch();
        $alumnoDataProvider = $alumnoSearchModel->search(Yii::$app->request->queryParams);
        
        $pagoSearchModel = new PagoTallerCuotaSearch();
        $pagoDataProvider = $pagoSearchModel->search(Yii::$app->request->queryParams);
        
        
        
        if ($modelInscripcion->load(Yii::$app->request->post())) {
            
            $modelInscripcion->fecha_operacion = date('Y-m-d H:i:s');
            
            $modelInscripcion->fecha_inscripcion = date('Y-m-d H:i:s');
            
            $modelInscripcion->save();
            
            return $this->redirect(['confirmar-inscripcion', 'id' => $modelInscripcion->id]);
        }
        
        return $this->render('inscripciones',
                                ['model'=>$model,
                                 'modelInscripcion'=>$modelInscripcion,
                                    'alumnoSearchModel'=>$alumnoSearchModel,
                                    'alumnoDataProvider'=>$alumnoDataProvider,
                                    'pagoSearchModel'=>$pagoSearchModel,
                                    'pagoDataProvider'=>$pagoDataProvider
                                    
                                ]);
        
        
        
    }
    
    
    
    /**
     * Gets all avaliable cuotas by taller implementation
     * @param integer $id
     * @param integer $id_cuota
     * @return string
     */
    public function actionGetCuotas($id,$id_cuota,$id_alumno)
    {
        
        $model = TallerImp::findOne($id);
        
        $modelCuota = Cuota::findOne($id_cuota);
        
        $modelAlumno = Alumno::findOne($id_alumno);
        
        
        if (!$model) {
       
            return '<label class="text text-danger">Primero seleccione taller. </label>';
        }
        
        if (!$modelAlumno) {
            
            return '<label class="text text-danger">Primero seleccione Alumno. </label>';
        }
        
        
        if ($id_cuota === '0'){
            
            $modelCuotas = CuotaTallerImp::findBySql('select * from tbl_cuota_taller_imp where id_taller_imp = '.$id )->all();
            
        }elseif($id_cuota == null) return '';
        else        
            $modelCuotas = CuotaTallerImp::findBySql('select * from tbl_cuota_taller_imp where id_taller_imp = '.$id .' and id_cuota = '. $id_cuota )->all();
        
        $cuotasHtml = '';
        
        $modelCuotasEstatus = [];
        
        foreach ($modelCuotas as $cuota){
            
           $pagoModel = PagoTallerCuota::findBySql('select * from tbl_pago_taller_cuota where id_cuota_taller_imp = '.$cuota->id. ' and id_alumno = ' . $id_alumno)->one();
            
           $cuota->estatus = ($pagoModel)?1:0; 
           
            $modelCuotasEstatus[] = $cuota;
        }
        
        
        return Json::encode($modelCuotasEstatus);
        
       /* foreach ($modelCuotas as $cuota){
            
            $cuotasHtml = $cuotasHtml .  '<div class="form-check">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="'.$cuota->id.'" /> '.
                                            $cuota->concepto_imp
                                          .'</label>
                                        </div>';
                                                    
        }
        
        $cuotasHtml = $cuotasHtml .  '<div class="form-check">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="-1" /> '.
                                            'No asociada al taller (Definir manualmente).'.'</div>';*/
                                            
        
        
        
       // return strlen($cuotasHtml) ? $cuotasHtml : 'No hay cuotas disponibles';
        
    }
    

    /**
     * Deletes an existing TallerImp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TallerImp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TallerImp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TallerImp::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
