<?php

/* @var $this yii\web\View */

$this->title = 'Admin page';

use yii\helpers\Html; ?>
<div class="site-index">
    <?= Html::a('Подать заявку', ['/entry/create'], ['class' => 'btn btn-primary']) ?>
</div>
