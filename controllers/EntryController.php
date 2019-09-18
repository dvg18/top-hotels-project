<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Entry;

/**
 * EntryController implements Entry page.
 */
class EntryController extends Controller
{

    /** {@inheritdoc} */
    public $layout = 'entry/main';

    /**
     * Displays entry page
     * @return string
     */
    public function actionCreate()
    {
        $model = new Entry();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->mailer->compose('entry', [
                'userName' => '%username%',
                'entryId' => $model->id,
                'detailPageLink' => $_SERVER['HTTP_HOST'] . '/index.php?r=entry1%2Fview&id=' . $model->id,
                'clientName' => $model->name,
                'clientPhone' => $model->phone,
                'clientEmail' => $model->email,
                'supportPageLink' => 'https://tophotels.ru/feedback',
                'content' => '',

            ])
                ->setTo('reghik@ya.ru')
                ->setFrom(['dumkailim@mail.ru'])
//                ->setFrom(['test.th.welcome@gmail.com'])
                ->setSubject('Добавлена новая заявка')
                ->setTextBody('Поступила заявка №:' . $model->id)
                ->send();

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            return $this->render('entry', ['model' => $model]);
        }
    }

}
