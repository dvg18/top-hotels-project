<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Entry;

class EntryController extends Controller
{
    public function actionEntry()
    {
        $model = new Entry();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->mailer->compose()
                ->setTo('test.th.welcome@gmail.com')
                ->setFrom(['test.th.welcome@gmail.com'])
                ->setSubject('Добавлена новая заявка')
                ->setTextBody('Поступила заявка №:' . $model->id)
                ->send();

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            return $this->render('entry', ['model' => $model]);
        }
    }
}
