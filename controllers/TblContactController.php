<?php

namespace app\controllers;

use Yii;
use app\models\TblContact;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblContactController implements the CRUD actions for TblContact model.
 */
class TblContactController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

		public function actionGetPage() {

			return $this->renderAjax('modaltest');

		}

		public function actionAjaxtest() {
			return $this->render('ajaxtest');
		}

    public function actionGetNewTab($id) {

      // get model from ID
      $contact = TblContact::findOne($id);
      $content = $this->renderPartial('newtab', ['contact' => $contact]);
      return $content;

    }

    /**
     * Lists all TblContact models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => TblContact::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblContact model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (isset($_POST['hasEditable'])) {
            $model = $this->findModel($id);
            // use Yii's response format to encode output as JSON
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            // read your posted model attributes
            if ($model->load($_POST)) {
                // read or convert your posted information
                //$value = $model->name;
                // get field that's been changed
                $value = '';
                // return JSON encoded output in the below format
                if (!$model->save()) {
                  // handle errors
                  }
                }
                // alternatively you can return a validation error
                // return ['output'=>'', 'message'=>'Validation error'];
            }

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TblContact model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TblContact();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TblContact model.
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
     * Deletes an existing TblContact model.
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
     * Finds the TblContact model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblContact the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TblContact::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
