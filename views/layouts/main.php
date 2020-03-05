<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php // $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<!-- head - CSS Styles -->
<?php require __DIR__ . '/partials/head.php' ?>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>



<!-- body - SECÇÃO PRINCIPAL -->
<body>
<?php //$this->beginBody() ?>

<div class="container-fluid h-100">
    <div class="row h-100">

        <!-- Menu principal - Esquerda -->
        <div class="col h-100 shadow side-bar">
            <?php require __DIR__ . '/partials/main_menu.php' ?>
        </div>


        <!-- Conteudo Principal -->
        <div class="col col-8 h-100"></div>


        <!-- Barra Direita (notificações) -->
        <div class="col h-100 side-bar shadow">
            <?php require __DIR__ . '/partials/sidebar.php' ?>
        </div>

    </div>
</div>


<div class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= $content ?>
</div>

<!-- footer - JS Scripts -->
<?php require __DIR__ . '/partials/footer.php' ?>

<?php //$this->endBody() ?>
</body>


</html>
<?php //$this->endPage() ?>
