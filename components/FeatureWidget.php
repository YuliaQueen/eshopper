<?php


namespace app\components;


use app\models\Product;
use yii\base\Widget;

class FeatureWidget extends Widget
{

    public function run()
    {
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();

        return $this->render('feature', compact('hits'));
    }
}