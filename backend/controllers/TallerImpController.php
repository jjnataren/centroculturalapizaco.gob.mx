<?php

namespace backend\controllers;

use Yii;
use backend\models\TallerImp;
use backend\models\search\TallerImpSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\CuotaTallerImp;

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
