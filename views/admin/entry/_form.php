<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Entry */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entry-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'text_parameters')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'direction')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app','Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
