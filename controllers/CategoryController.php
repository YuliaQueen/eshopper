<?php


namespace app\controllers;

use app\models\Product;
use Yii;


class CategoryController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        $products = Product::find()->where(['category_id' => $id])->all();
        return $this->render('view', compact('products'));
    }
}