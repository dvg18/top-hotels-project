<?php

/* @var $this View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Breadcrumbs;
use app\assets\EntryAssets;

EntryAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="icon" href="/i/favicon.png">
    <script src="js/jquery.311.min.js"></script>
</head>

<body>
<?php $this->beginBody() ?>


<div class="page">
    <div class="headerMobile">

        <div class="headerMobile__flex js-serach-active-hide">
            <a href="/" class="headerMobile__logo">
                <img src="/i/th-logo.png" width="112" height="40" class="mr10">
            </a>

            <div class="headerMobile__right">
                <div class="headerMobile__right-auth">
                    <i class="far fa-envelope"></i>
                    <a href="#" class="headerMobile__msg-icon "><span>989</span></a>
                </div>

                <div class="headerMobile__right-noAuth" style="display: none">
                    1 507 753 участников
                </div>
            </div>
        </div>
        <div class="headerMobile__line">
            <div class="js-hide js-serach-active-hide">
                <div class="headerMobile__bth headerMobile__bth--auth mr10" style="display: none">
                    <div class="headerMobile__key"></div>
                </div>
                <a href="#" class="headerMobile__user js-show-key-block">
                    <img src="/i/user-ava-cat.jpg">
                </a>
                <div class="headerMobile__bth mr5">
                    <div class="headerMobile__burger"></div>
                </div>

                <div class="headerMobile__bth js-show-search">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="headerMobile__right js-hide js-serach-active-hide">
                <div class="header-lang">
                    <div class="header-lang__block">
                        <span class="header-lang__cnt">Rus</span>
                        <i class="fa fa-chevron-down header-lang__arr" aria-hidden="true"></i>
                    </div>
                    <div class="header-lang__dropdown">
                        <div class="header-lang__lang js-ru" style="display: none;">Rus</div>
                        <div class="header-lang__lang js-eng">Eng</div>
                    </div>
                </div>
            </div>
            <div class="headerMobile__cross"></div>
        </div>

        <div class="headerMobile__registration">
            <div class="tabs-block">
                <div class="tabs-bar tabs-bar--no-adaptive">
                    <div id="authorization" class="tab tab--reg active">Вход</div>
                    <div id="registration" class="tab tab--reg">Регистрация</div>

                    <div class="line--reg" style="width: 89.125px; left: 50.25px;"></div>
                </div>

                <div class="panel" id="authorizationPanel" style="display: none;">

                    <div class="headerMobile__registration-line">
                        <div class="bth__inp-block error">
                            <input type="text" class="bth__inp  js-input-label"
                                   id="regEmail">
                            <label for="regEmail" class="bth__inp-lbl ">email</label>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Текст подсказки</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="headerMobile__registration-line">
                        <div class="bth__inp-block ">
                            <input type="password" class="bth__inp  js-input-label" id="regPass">
                            <label for="regPass" class="bth__inp-lbl">Пароль</label>
                            <i class="headerMobile__registration-eye js-open-eye"></i>
                        </div>
                    </div>
                    <button class="bth__btn bth__btn--fill ">Войти</button>
                    <button class="bth__btn  js-show-remind headerMobile__registration-abs-btn">Напомнить пароль
                    </button>
                    <div class="registration-form__remind" style="display: none">
                        <div class="pass-step1">
                            <div class="headerMobile__registration-line">
                                <div class="bth__inp-block ">
                                    <input type="text" class="bth__inp  js-input-label" id="regRemindEmail">
                                    <label for="regRemindEmail" class="bth__inp-lbl">E-mail</label>
                                </div>
                            </div>
                            <button class="bth__btn bth__btn--fill  jsPassStep2 mt20">Напомнить</button>
                        </div>

                        <div class="pass-step2" style="display:none;">

                            <p class="bth__cnt bth__cnt--big">Остался один шаг!</p>
                            <p class="bth__cnt bth__cnt--big mt20">Проверьте e-mail и подтвердите регистрацию на
                                проекте.</p>

                        </div>
                    </div>
                </div>

                <div class="panel" id="registrationPanel" style="">

                    <div class="headerMobile__registration-line">
                        <div class="bth__inp-block ">
                            <input type="text" class="bth__inp  js-input-label" id="regName">
                            <label for="regName" class="bth__inp-lbl ">Имя</label>
                        </div>
                    </div>


                    <div class="headerMobile__registration-line mt15">
                        <div class="rbt-block d-ib mr20">
                            <input type="radio" name="male" class="rbt" id="male1">
                            <label class="label-rbt" for="male1">
                                <span class="rbt-cnt uppercase">Мужчина</span>
                            </label>
                        </div>
                        <div class="rbt-block  d-ib">
                            <input type="radio" name="male" class="rbt" id="male2">
                            <label class="label-rbt" for="male2">
                                <span class="rbt-cnt uppercase">Женщина</span>
                            </label>
                        </div>
                    </div>


                    <div class="headerMobile__registration-line headerMobile__registration-line--border">
                        <div class="bth__inp-block">
                            <input type="text" class="bth__inp  js-input-label" id="regEmailOsn">
                            <label for="regEmailOsn" class="bth__inp-lbl ">E-mail регистрации </label>
                        </div>
                    </div>


                    <div class="headerMobile__registration-line">
                        <div class="bth__inp-block ">
                            <input type="password" class="bth__inp  js-input-label" id="regPassNew">
                            <label for="regPassNew" class="bth__inp-lbl">Пароль</label>
                            <i class="headerMobile__registration-eye js-open-eye"></i>
                        </div>
                    </div>


                    <div class="headerMobile__registration-line">
                        <div class="bth__inp-block ">
                            <input type="password" class="bth__inp  js-input-label" id="regPassNewRep">
                            <label for="regPassNewRep" class="bth__inp-lbl">Повторный пароль</label>
                            <i class="headerMobile__registration-eye js-open-eye"></i>
                        </div>
                    </div>


                    <div class="relative">
                        <button class="bth__btn bth__btn--fill jsRegStep2 ">Продолжить*</button>
                        <div class="headerMobile__registration-text-abs">
                            <p class="bth__cnt bth__cnt--sm">*Нажимая на кнопку "продолжить", я принимаю <a href="#">Соглашение
                                    об обработке личных данных</a> и <a href="#">Правила
                                    сайта</a></p>
                        </div>
                    </div>

                </div>


            </div>

        </div>


    </div>

    <header class="header">

        <div class="header-cnt header-cnt_index ">
            <a href="/" class="header-logo">
                <img src="/i/th-logo.png" alt="">
            </a>
            <div class="header-nav">
                <div class="header-nav-cont">
                    <ul class="header-nav-list hide-1023">


                        <li class="header-nav-item">
                            <a href="/tophotels/profile" class="header-nav-link grey ">Мой профиль</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="/tophotels/hotels-catalog" class="header-nav-link grey">Отели</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="/tophotels/forum" class="header-nav-link grey">Клуб ТопХотелс</a>
                        </li>
                        <li class="header-nav-item active">
                            <a href="/index.php?r=entry%2Fentry" class="header-nav-link ">Помощь в подборе</a>
                        </li>

                        <li class="header-nav-item">
                            <a href="/tophotels/review" class="header-nav-link  grey">Добавить отзыв</a>
                        </li>


                    </ul>
                    <ul class="header-nav-list show-1023">


                        <li class="header-nav-item">
                            <a href="/tophotels/profile" class="header-nav-link ">Мой профиль</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="/tophotels/hotels-catalog" class="header-nav-link ">Отели</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="/tophotels/forum" class="header-nav-link ">Клуб ТопХотелс</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="/tophotels/help-selection" class="header-nav-link ">Помощь в подборе</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="/tophotels/review" class="header-nav-link ">Добавить отзыв</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="/tophotels/hotel-description" class="header-nav-link ">Отель</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="/tophotels/cutaway" class="header-nav-link ">Турист</a>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="exit__block">
                <div class="header__exit js-show-auth-link" id="jsExit">Выйти</div>
            </div>
        </div>

        <div class="header-bot header-bot-suggest-big">
            <div class="header-bot-cnt auth ">
                <div class="header__news">
                    <button class="header-bot__filter-icon">
                        <i class="fas fa-thumbs-up grey" style=""></i>
                    </button>

                    <div class="header__news-center">
                        <input class="header__inp js-open-bs" placeholder="Введите отель, город или страну">
                    </div>
                </div>
            </div>


            <div class="header-profile auth " style="display:none;">
                <a href="#"><img class="header-profile-img" src="/i/user-ava-cat.jpg" alt=""></a>
                <span class="header-profile__msgs">
                <span>989</span>
            </span>

                <div class="header-profile__dropdown" style="display:none;">
                    <div class="header-profile__item">
                        <div class="header-profile__link">
                            <a href="#" class="header-profile__user-name">Юрковская Александра</a>
                            <div class="bth__cnt fz13 mt5">Турист</div>
                        </div>
                    </div>

                    <div class="header-profile__item">
                        <a href="#" class="header-profile__link">Мой профиль</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="#" class="header-profile__link">Мои интересы</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="#" class="header-profile__link">Мои действия</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="#" class="header-profile__link">Мои друзья</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="#" class="header-profile__link">Избранные отели</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="#" class="header-profile__link">Уведомления</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="#" class="header-profile__link red">Выйти</a>
                    </div>
                </div>
            </div>

            <a href="#auth-pp" class="header-bot__key js-show-auth auth-pp"></a>

            <div class="header-lang">
                <div class="lang-block js-lang-open">
                    <span class="lang-block__cnt">Rus</span>
                    <i class="fa fa-chevron-down lang__arr" aria-hidden="true"></i>
                </div>
                <div class="lang-block__dropdown">
                    <div class="lang-block__lang js-lang-change" style="display: none;">Rus</div>
                    <div class="lang-block__lang js-lang-change">Eng</div>
                </div>
            </div>


        </div>


    </header>
    <?= $content ?>


    <?php $this->endBody() ?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

        <div id="leftbar" class="leftbar">

            <div id="leftbar" class="leftbar">


                <div class="left-menu-1023">
                    <div class="left-menu-1023__top fixed-active">
                        <div class="relative"> Навигация проекта
                            <i class="left-menu-1023__top-close"></i>
                        </div>
                    </div>
                    <div class="left-menu-1023__item js-observe-scroll">
                        <div class="side-nav">
                            <ul class="side-nav-ul">
                                <li class="side-nav-li pt10">
                                    <div class="side-nav-li-a side-nav-li-a--del-arr ">Главная</div>
                                </li>
                                <li class="side-nav-li">
                                    <a href="#my-profile"
                                       class="side-nav-li-a  side-nav-li-a--del-arr js-left-menu-1023-anchor ">Мой
                                        профиль</a>
                                </li>
                                <li class="side-nav-li">
                                    <a href="#catalog"
                                       class="side-nav-li-a side-nav-li-a--del-arr js-left-menu-1023-anchor  ">Каталог
                                        отелей</a>
                                </li>
                                <li class="side-nav-li">
                                    <a href="#club-tx"
                                       class="side-nav-li-a  side-nav-li-a--del-arr  js-left-menu-1023-anchor">Клуб
                                        ТопХотелс</a>
                                </li>
                                <li class="side-nav-li">
                                    <a href="#help-selection"
                                       class="side-nav-li-a  side-nav-li-a--del-arr js-left-menu-1023-anchor ">Помощь в
                                        подборе</a>
                                </li>
                                <li class="side-nav-li">
                                    <a href="#add-review"
                                       class="side-nav-li-a  side-nav-li-a--del-arr  js-left-menu-1023-anchor">Добавить
                                        отзыв</a>
                                </li>
                                <li class="side-nav-li">
                                    <a href="#features"
                                       class="side-nav-li-a  side-nav-li-a--del-arr  js-left-menu-1023-anchor">О
                                        проекте</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="left-menu-1023__item">
                        <a id="my-profile" class="left-menu-1023__ttl">Мой профиль</a>

                        <div class="side-nav">

                            <ul class="side-nav-ul">
                                <li class="side-nav-li side-nav-li-ttl">Моё участие</li>
                                <li class="side-nav-li">
                                    <div class="side-nav-li-a ">Визитка</div>

                                    <ul class="side-nav-li__tabs-list">
                                        <li class="side-nav-li__tabs-li">
                                            <a href="/tophotels/profile-cutaway#authorization">Визитка</a>
                                        </li>

                                        <li class="side-nav-li__tabs-li">
                                            <a href="/tophotels/profile-cutaway#hotels"> Подборки и предложения</a>
                                        </li>
                                        <li class="side-nav-li__tabs-li">
                                            <a href="/tophotels/profile-cutaway#recomend"> Меня рекомендуют</a>
                                        </li>
                                        <li class="side-nav-li__tabs-li">
                                            <a href="/tophotels/profile-cutaway#sertificate">Сертификаты</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="side-nav-li">
                                    <a href="/tophotels/profile" class="side-nav-li-a">Профиль</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/tape-my-actions" class="side-nav-li-a ">Лента моих действий</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/my-travels" class="side-nav-li-a ">Мои путешествия</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/my-progress" class="side-nav-li-a ">Достижения</a>

                                </li>
                            </ul>
                            <ul class="side-nav-ul">
                                <li class="side-nav-li side-nav-li-ttl">Коммуникации</li>
                                <li class="side-nav-li ">
                                    <a href="/tophotels/log-all-messages" class="side-nav-li-a">Лог всех сообщений</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/my-subscription-hotels" class="side-nav-li-a ">Мои подписки на
                                        отели</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/tape-communication" class="side-nav-li-a ">Лента общения</a>

                                </li>
                            </ul>
                            <ul class="side-nav-ul">
                                <li class="side-nav-li side-nav-li-ttl">Настройка интересов</li>
                                <li class="side-nav-li ">
                                    <a href="/tophotels/personal-data" class="side-nav-li-a ">Персональные данные</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/my-preference" class="side-nav-li-a">Мои предпочтения</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/my-connections" class="side-nav-li-a ">Мои контакты</a>

                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="left-menu-1023__item">
                        <a id="catalog" class="left-menu-1023__ttl">Каталог отелей</a>

                        <div class="side-nav">

                            <ul class="side-nav-ul">
                                <li class="side-nav-li pt10">
                                    <a href="/tophotels/hotels-catalog#hotelFilter"
                                       class="side-nav-li-a  side-nav-li-a--del-arr ">Фильтр</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/hotels-catalog#hotelSearch"
                                       class="side-nav-li-a  side-nav-li-a--del-arr ">
                                        Поиск отеля</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/hotels-catalog#myInterests"
                                       class="side-nav-li-a   side-nav-li-a--del-arr">
                                        Мои интересы</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/hotels-catalog#hotelChains"
                                       class="side-nav-li-a   side-nav-li-a--del-arr">
                                        Сети отелей</a>

                                </li>


                            </ul>
                        </div>
                    </div>


                    <div class="left-menu-1023__item">
                        <a id="club-tx" class="left-menu-1023__ttl">Клуб ТопХотелс</a>

                        <div class="side-nav">

                            <ul class="side-nav-ul">
                                <li class="side-nav-li side-nav-li-ttl">Сообщество</li>
                                <li class="side-nav-li ">
                                    <a href="#" class="side-nav-li-a grey">Лента клуба</a>
                                </li>
                                <li class="side-nav-li ">
                                    <a href="/tophotels/forum" class="side-nav-li-a">Форум по отелям </a>

                                </li>
                                <li class="side-nav-li ">
                                    <a href="/tophotels/hotline" class="side-nav-li-a ">Спецакции отелей</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/club-vote" class="side-nav-li-a ">Опросы</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="#" class="side-nav-li-a grey">Конкурсы и игры</a>

                                </li>
                            </ul>
                            <ul class="side-nav-ul">
                                <li class="side-nav-li side-nav-li-ttl">Рейтинги</li>
                                <li class="side-nav-li ">
                                    <a href="/tophotels/ratings-nominations" class="side-nav-li-a ">Номинации отелей</a>

                                </li>
                                <li class="side-nav-li ">
                                    <a href="#" class="side-nav-li-a ">Рейтинг номеров</a>
                                </li>
                                <li class="side-nav-li ">
                                    <a href="/tophotels/top-users" class="side-nav-li-a ">ТОП участников </a>

                                </li>
                            </ul>
                            <ul class="side-nav-ul">
                                <li class="side-nav-li side-nav-li-ttl">Участники</li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/who-where-when" class="side-nav-li-a ">Кто Где Когда</a>

                                </li>
                                <li class="side-nav-li ">
                                    <a href="/tophotels/club-traveler-list" class="side-nav-li-a ">Путешественники</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/club-touragent-list" class="side-nav-li-a ">ПРО Турагенты</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="#" class="side-nav-li-a grey">Индивидуальные гиды</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="#" class="side-nav-li-a grey">Отельеры</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/hotels-communities" class="side-nav-li-a ">Сообщества отелей</a>

                                </li>
                            </ul>


                        </div>

                    </div>

                    <div class="left-menu-1023__item">
                        <a id="help-selection" class="left-menu-1023__ttl">Помощь в подборе</a>

                        <div class="side-nav">

                            <ul class="side-nav-ul">
                                <li class="side-nav-li pt10">
                                    <a href="/tophotels/help-selection#step1"
                                       class="side-nav-li-a  side-nav-li-a--del-arr ">Параметры
                                        тура</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/help-selection#form"
                                       class="side-nav-li-a  side-nav-li-a--del-arr"> Простая
                                        форма</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/help-selection#formStep2"
                                       class="side-nav-li-a  side-nav-li-a--del-arr ">Рега</a>

                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="left-menu-1023__item">
                        <a id="add-review" class="left-menu-1023__ttl">
                            Добавить отзыв</a>

                        <div class="side-nav">

                            <ul class="side-nav-ul">
                                <li class="side-nav-li pt10">
                                    <a href="/tophotels/review#search" class="side-nav-li-a   side-nav-li-a--del-arr">Добавление
                                        отзыва</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="/tophotels/review#older" class="side-nav-li-a  side-nav-li-a--del-arr">Черновики
                                        (14)</a>

                                </li>

                                <li class="side-nav-li">
                                    <a href="/tophotels/review#no-hotel" class="side-nav-li-a  side-nav-li-a--del-arr">Нет
                                        отеля на
                                        ТопХотелс</a>

                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="left-menu-1023__item">
                        <a id="features" class="left-menu-1023__ttl">О проекте</a>

                        <div class="side-nav">
                            <ul class="side-nav-ul">
                                <li class="side-nav-li side-nav-li-ttl">Путешественникам</li>
                                <li class="side-nav-li">
                                    <a href="#" class="side-nav-li-a ">Отдых с ТопХотелс</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="#" class="side-nav-li-a ">Полезные фишки</a>

                                </li>
                                <li class="side-nav-li">
                                    <a href="#" class="side-nav-li-a ">Все возможности</a>

                                </li>


                            </ul>

                            <ul class="side-nav-ul">
                                <li class="side-nav-li side-nav-li-ttl">Для бизнеса</li>

                                <li class="side-nav-li ">
                                    <a href="/tophotels/api-services" class="side-nav-li-a ">API сервисы</a>

                                </li>
                                <li class="side-nav-li ">
                                    <a href="/tophotels/promotion-hotel" class="side-nav-li-a ">Продвижение отеля</a>

                                </li>
                                <li class="side-nav-li ">
                                    <a href="/tophotels/touragent-profile" class="side-nav-li-a ">Профиль турагента</a>

                                </li>
                                <li class="side-nav-li ">
                                    <a href="/tophotels/media-ad" class="side-nav-li-a ">Медийная реклама</a>

                                </li>

                            </ul>
                            <ul class="side-nav-ul">
                                <li class="side-nav-li side-nav-li-ttl">Информация</li>

                                <li class="side-nav-li ">
                                    <a href="/tophotels/about-project" class="side-nav-li-a ">О проекте</a>

                                </li>

                                <li class="side-nav-li ">
                                    <a href="/tophotels/terms-use" class="side-nav-li-a ">Правила пользования</a>

                                </li>

                                <li class="side-nav-li ">
                                    <a href="/tophotels/job-and-career" class="side-nav-li-a ">Работа и карьера </a>

                                </li>

                                <li class="side-nav-li ">
                                    <a href="/tophotels/feedback" class="side-nav-li-a">Обратная связь</a>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer footer2018">

        <div class="footer__line footer__line--bot">
            <div class="footer__copyright">
                <p class="footer__cnt bold  copyright">© TopHotels 2003-<?= date('Y') ?></p>
                <a href="#legal-information-pp" class="legal-information-pp footer__cnt-link legal ">правовая
                    информация</a>
            </div>

            <div class="footer__cnt-wrap">
                <p class="footer__cnt footer__cnt--sm fz12 footer-text">Все права защищены. Перепечатка, включение
                    информации, содержащейся в рекламных и иных материалах сайта, во всевозможные базы данных для
                    дальнейшего их коммерческого использования, размещение таких материалов в любых СМИ и Интернете
                    допускаются только с письменного разрешения редакции сайта. Предоставляемый сервис является
                    информационным. Администрация сайта не несет ответственности за достоверность и качество информации,
                    предоставляемой посетителями сайта, в том числе турфирмами и отельерами. </p>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
<?php $this->endPage() ?>
