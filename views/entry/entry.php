<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="tour-selection-box">
    <div class="tabs-block">
        <div class="tabs-bar tabs-bar--responsive js-768-tabs">
<!--            <div id="step1" class="tab active">Подобрать тур</div>-->
            <div id="form" class="tab active">Нестандартный запрос</div>
            <div class="line" style="width: 130px"></div>
        </div>








        <div class="panel" id="formPanel">
            <div class="bth__cnt uppercase">Пожалуйста, укажите параметры вашей поездки</div>

            <?php $form = ActiveForm::begin(); ?>

            <div class="tour-selection-wrap">
                <div class="tour-selection-wrap-in">
                    <div class="bth__inp-block long">
                        <?= $form->field($model, 'text_parameters', [
                            'template' => '{input}{label}',
                            'labelOptions' => ['class' => 'bth__inp-lbl', 'style' => 'font-weight: normal;'],
                            'options' => [
                                'tag' => false, // to don't wrap with "form-group" div
                            ]
                        ])
                            ->textarea(['rows' => 5, 'cols' => 5, 'class' => 'bth__inp  bold js-stop-label'])
                            ->label('<span class="block  mb5">- укажите страну, курорт или отель</span>
                                               <span class="block  mb5">- количество человек</span>
                                               <span class="block  mb5">- ваши предпочтения по отелю</span>
                                               <span class="block mb5">- ваш бюджет</span>
                                               <span class="block">- другие пожелания</span>
                                               ')
                        ?>
                    </div>
                </div>
                <div class="tour-selection-wrap-in tour-selection-wrap-flex">

                    <div class="tour-selection-field tour-selection-field--30p">
                        <div class="js-add-error bth__inp-block field-entry-name required">
                            <?= $form->field($model, 'name', [
                                'template' => '{input}{label}<div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>',
                                'labelOptions' => ['class' => 'bth__inp-lbl', 'style' => 'font-weight: normal;'],
                                'validateOnBlur' => false,
                                'options' => [
                                    'tag' => false, // to don't wrap with "form-group" div
                                ]
                            ])->textInput(array('placeholder' => '', 'class' => 'bth__inp js-label'))
                                ->label('Ваше имя')
                            ?>
                        </div>
                    </div>

                    <div class="tour-selection-field tour-selection-field--30p">

                        <div class="js-add-error bth__inp-block field-entry-phone required">
                            <?= $form->field($model, 'phone', [
                                'template' => '{input}{label}<div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>',
                                'labelOptions' => ['class' => 'bth__inp-lbl', 'style' => 'font-weight: normal;'],
                                'validateOnBlur' => false,
                                'options' => [
                                    'tag' => false, // to don't wrap with "form-group" div
                                ]
                            ])->textInput(array('class' => 'bth__inp js-label'))
                            ?>
                        </div>
                    </div>
                    <div class="tour-selection-field tour-selection-field--30p">

                        <div class="bth__inp-block field-entry-email">
                            <?= $form->field($model, 'email', [
                                'template' => '{input}{label}{error}',
                                'labelOptions' => ['class' => 'bth__inp-lbl', 'style' => 'font-weight: normal;'],
                                'options' => [
                                    'tag' => false, // to don't wrap with "form-group" div
                                ]
                            ])->textInput(array('placeholder' => '', 'class' => 'bth__inp js-label'))
                                ->label('Email (не обязательно)')
                            ?>
                        </div>
                    </div>
                </div>

                <div class="tour-selection-wrap-in">
                    <?= Html::submitButton('Отправить заявку*<div class=" bth__loader-spin">
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                            </div>', ['class' => 'bth__btn  bth__btn--fill bth__loader']) ?>

                    <div class="tour-selection-wrap__abs-txt  bth__cnt bth__cnt--sm">
                        *Нажимая на кнопку "отправить", я принимаю
                        <a href="#p-agreement-pp" class="p-agreement-pp agree">
                            Соглашение об обработке личных данных</a> и
                        <a href="#p-agreement-pp" class="p-agreement-pp site-role">Правила сайта</a>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

