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
