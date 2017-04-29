<?php

namespace app\controllers;

use app\models\PersonalData;
use app\models\PersonalDataSearch;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use yii\helpers\Html;


class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $form = new PersonalData();
        $name = '';
        $email = '';

        if($form->load(Yii::$app->request->post()))
        {
            if($form->save())
            {
                $name = Html::encode($form->name);
                $email = Html::encode($form->email);
                Yii::$app->session->setFlash('success','Данные приняты');
                return $this->refresh();
            }else
            {

                Yii::$app->session->setFlash('error','Ошибка');
            }
        }

        return $this->render('index',[
             'form' => $form,
             'name' => $name,
             'email' => $email
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionData()
    {
        $personalDataSearch = new PersonalDataSearch();
        $dataProvider = $personalDataSearch->search(Yii::$app->request->get());

        return $this->render('personal_data',[
            'dataProvider' => $dataProvider,
            'searchModel' => $personalDataSearch
        ]);
    }
}
