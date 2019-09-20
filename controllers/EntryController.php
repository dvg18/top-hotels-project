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
            $this->sendMailEntry($model);
            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            return $this->render('entry', ['model' => $model]);
        }
    }

    /**
     * @param Entry $entry
     */
    private function sendMailEntry($entry)
    {
        Yii::$app->mailer->compose('entry', [
            'userName' => '',
            'entryId' => $entry->id,
            'detailPageLink' => 'http://' . $_SERVER['HTTP_HOST'] . '/index.php?r=admin%2Fentry%2Fview&id=' . $entry->id,
            'clientName' => $entry->name,
            'clientPhone' => $entry->phone,
            'recipientEmail' => 'test.mail.box@inbox.ru',
            'supportPageLink' => 'https://tophotels.ru/feedback',
        ])
            ->setTo(['test.mail.box@inbox.ru'])
            ->setFrom(['test.mail.box@inbox.ru'])
            ->setSubject('Добавлена новая заявка')
            ->setTextBody('Поступила заявка №:' . $entry->id)
            ->send();
    }

}
