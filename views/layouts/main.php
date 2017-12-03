<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\BaseUrl;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <script src="<?=yii\helpers\Url::base()."/js/jquery.js";?>"></script>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="../web/images/iconos/Canade480.png" type="image/x-icon"/>
    <?php $this->head() ?>
</head>
<body style='background-color: #F1F0F0;'>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index'],'visible'=>Yii::$app->user->isGuest],
            ['label' => 'Nuestros Productos', 'url' => ['/site/inventario'],'visible'=>Yii::$app->user->isGuest],
            ['label' => 'Sobre nosotros', 'url' => ['/site/about'],'visible'=>Yii::$app->user->isGuest],
            ['label' => 'Contacto', 'url' => ['/site/contact'],'visible'=>Yii::$app->user->isGuest],
            ['label' => 'Ingresar', 'url' => ['/site/login'],'visible'=>Yii::$app->user->isGuest],
            ['label' => 'Productos', 'url' => ['/producto/index'],'visible'=>!Yii::$app->user->isGuest],
            ['label' => 'Salir (administrador)', 'url' => ['/site/logout'],'visible'=>!Yii::$app->user->isGuest],
            //['label' => '¿Quienes Somos?', 'url' => ['/site/somos']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container" style="background-color: #F1F0F0">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>
    <style>
        .navbar{
            background-color:forestgreen;
            border-color:forestgreen;
        }
        .navbar-right{
            
        }
        .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus{
            background-color:darkgreen;
        }
        
    </style>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
