<?php

namespace app\controllers;

use app\models\Posts;
use app\models\Cat;
use app\models\Coment;
use Psr\Http\Message\UploadedFileInterface;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use Yii;

/**
 * PostsController implements the CRUD actions for Posts model.
 */
class PostsController extends Controller
{
    public $layout = '@app/modules/admin/views/layouts/main.php';
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Posts models.
     *
     * @return string
     */


    public function actionShowcat($link)
    {
        $posts = new Posts();
        $data = $posts->find()->where(['cat' => $link])->all();

        return $this->render('showbycat', ['data' => $data]);
    }

    public function actionShowpage($link)
    {
        if (Yii::$app->request->post()) {
            $frm = Yii::$app->request->post();

            $com = new Coment();
            $com->name = $frm['Coment']['name'];
            $com->txt = $frm['Coment']['txt'];
            $com->post_id = $frm['Coment']['post_id'];
            $com->save();

        }

        $data = Posts::find()->where(['url' => $link])->One();
        if (!$data) {
            echo '404 not found';
            exit;

        }
        $coms = Coment::find()->where(['post_id' => $data->id])->all();
        $cats = Cat::find()->all();
        $model = new Coment();
        return $this->render('showpost', (['data' => $data, 'cats' => $cats, 'model' => $model, 'model' => $model, 'coms' => $coms]));

    }

    public function actionIndex()
    {
        $session=Yii::$app->session;
          if($session['role']!=='admin')
          {
              $req=Posts::find()->where(['user'=>$session['user']]);
          }
          else{ $req=Posts::find();}
        $dataProvider = new ActiveDataProvider([
            'query' => $req,
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Posts model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {


        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Posts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Posts();
        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->img = UploadedFile::getInstance($model, 'img');
            if ($model->upload() && $model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Posts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Posts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Posts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Posts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Posts::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
