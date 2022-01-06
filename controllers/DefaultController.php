<?php

namespace app\controllers;

use Yii;

class DefaultController extends \yii\web\Controller
{
    public function actionIndex()
    {

    $request = Yii::$app->request;
    if ($request->isPost) {
        $nome = $request->post('name');
        $cidade = $request->post('cidades');
        return $this->render('mostrar-dados',[
            'nome' => $nome,
            'cidade' => $cidade
        ]);

    }
        return $this->render('index');
    }

}
