<?php

namespace backend\controllers;

use Yii;
use backend\models\Taller;
use backend\models\search\TallerSearch;
use backend\models\search\CuotaTallerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use trntv\filekit\actions\UploadAction;
use trntv\filekit\actions\DeleteAction;
use Intervention\Image\ImageManagerStatic;
use backend\models\CuotaTaller;
use backend\models\TallerImp;
use backend\models\CuotaTallerImp;

/**
 * TallerController implements the CRUD actions for Taller model.
 */
class TallerController extends Controller
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
     * (non-PHPdoc)
     * @see \yii\base\Controller::actions()
     */
    public function actions()
    {
    	return [
    			'avatar-upload' => [
    					'class' => UploadAction::className(),
    					'deleteRoute' => 'avatar-delete',
    					'on afterSave' => function ($event) {
    						/* @var $file \League\Flysystem\File */
    						$file = $event->file;
    						$img = ImageManagerStatic::make($file->read())->resize(1024, 768);
    						$file->put($img->encode());
    					}
    			],
    			'avatar-delete' => [
    					'class' => DeleteAction::className()
    			]
    			];
    }

    /**
     * Lists all Taller models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TallerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Taller model.
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
     * Displays a single Taller model.
     * @param integer $id
     * @return mixed
     */
    public function actionDashboard($id)
    {
        return $this->render('dashboard', [
            'model' => $this->findModel($id),
        ]);
    }
    
    
    
    /**
     * Generates Taller implementation.
     * @param integer $id
     * @return mixed
     */
    public function actionImplement($id)
    {
        
        $model = $this->findModel($id);
        
        
        $sModel = new TallerImp();
        
        
        
        if ($sModel->load(Yii::$app->request->post())) {
            
            
            if ($sModel->save()) { 

                
                foreach ($model->cuotaTallers as $cuota){
                    
                    $cuotaImp = new CuotaTallerImp();
                    $cuotaImp->id_taller_imp = $sModel->id;
                    $cuotaImp->id_cuota = $cuota->id_cuota;
                    $cuotaImp->concepto_imp = isset($cuota->nombre)?$cuota->nombre:isset($cuota->idCuota->concepto_impresion)?$cuota->idCuota->concepto_impresion:'';
                    $cuotaImp->obligatoria = $cuota->obligatoria;
                    $cuotaImp->tipo_periodo = $cuota->tipo_periodo;
                    $cuotaImp->monto = isset( $cuota->idCuota->monto)? $cuota->idCuota->monto: 0 ;
                    $cuotaImp->comentario = $cuota->comentario;
                    $cuotaImp->save(false);
                    
                }
                
                return $this->redirect(['taller-imp/view', 'id' => $sModel->id]); 
            
            }            
                else   return $this->render('implementation', ['model' => $sModel,  ]);
            
        }else{
        
        
        $sModel->id_curso_base = $id;
        
        $sModel->id_instructor = $model->id_instructor;
        
        $sModel->nombre = $model->nombre;
        
        
        //Calcular
        $sModel->fecha_inicio = date('Y-m-d');
        
        $sModel->fecha_fin = date('Y-m-d');
        
        $sModel->descripcion = $model->descripcion;
        
        $sModel->numero_max_personas = $model->numero_personas;
        
        
        if($model->idAula){
            $sModel->id_aula_lunes = $model->id_aula;
            $sModel->id_aula_martes = $model->id_aula;
            $sModel->id_aula_miercoles = $model->id_aula;
            $sModel->id_aula_jueves = $model->id_aula;
            $sModel->id_aula_viernes = $model->id_aula;
            $sModel->id_aula_sabado = $model->id_aula;
            $sModel->id_aula_domingo = $model->id_aula;
            
            
        
        }
        
        if($model->lunes){
            
            $sModel->lunes = $model->hora_inicio;
            $sModel->lunes_fin = 12;
        }
        
        if($model->martes){
            
            $sModel->martes = $model->hora_inicio;
            $sModel->martes_fin = 12;
        }
        
        
        if($model->miercoles){
            
            $sModel->miercoles = $model->hora_inicio;
            $sModel->miercoles_fin = 12;
        }
        
        if($model->jueves){
            
            $sModel->jueves = $model->hora_inicio;
            $sModel->jueves_fin = 12;
        }
        
        
        if($model->viernes){
            
            $sModel->viernes = $model->hora_inicio;
            $sModel->viernes_fin = 12;
        }
        
        if($model->sabado){
            
            $sModel->sabado = $model->hora_inicio;
            $sModel->sabado_fin = 12;
        }
        
        if($model->domingo){
            
            $sModel->domingo = $model->hora_inicio;
            $sModel->domingo_fin = 12;
        }
        
        
        
        }
        
        return $this->render('implementation', [
            'model' => $sModel,
        ]);
    }
    
    
    /**
     * Displays Cuotas of  Taller model.
     * @param integer $id
     * @return mixed
     */
    public function actionCuota($id)
    {
    	
    	$model = $this->findModel($id);
    	$searchModel = new CuotaTallerSearch();
    	
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    	
    	$sModel = new CuotaTaller();
    	$sModel->id_taller = $id;
    	
    	if ($sModel->load(Yii::$app->request->post()) && $sModel->save()) {
    	    
    	    Yii::$app->getSession()->setFlash('success', [
    	        'body'=>'Se ha creado una nueva cuota.',
    	        'options'=>['class'=>'alert-danger']
    	    ]);
    	    
    	    return $this->redirect(['cuota', 'id' => $model->id]);
    	} else {
    	
    	    
    	    if($sModel->hasErrors()){
    	        
       	        Yii::$app->getSession()->setFlash('alert', [
    	            'body'=>'El producto seleccionado no es valido',
    	            'options'=>['class'=>'alert-danger']
    	        ]);
    	        
    	    }
    	    
    	    
    	    return $this->render('cuota', [
    	        'searchModel' => $searchModel,
    	        'dataProvider' => $dataProvider,
    	        'model'=>$sModel
    	    ]);
    	    
    	
    	}
    	
    	
    	
    	
    	
   
    }

    /**
     * Creates a new Taller model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Taller();
        
        $model->disponible = 1;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Taller model.
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
     * Deletes an existing Taller model.
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
     * Finds the Taller model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Taller the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Taller::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
//