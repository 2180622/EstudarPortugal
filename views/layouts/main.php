<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<!-- head - METAS, TITLE, CSS Styles -->
<?php require __DIR__ . '/partials/head.php' ?>





<!-- body - SECÇÃO PRINCIPAL -->
<body>
<?php $this->beginBody() ?>

<div class="container-fluid h-100 bg-dark">

</div>

        <!-- Conteudo Principal -->
        <div class="col col-8 col-sm-8 col-md-8 col-lg-8" >
            <?=$content?>
        </div>

        <!--Barra Direita (notificações) -->
        <div class="col col-2 bg-white sidebar shadow" style="overflow:hidden">
            <?php require __DIR__ . '/partials/sidebar.php' ?>
        </div>
















</body>

<!-- footer - JS Scripts -->
<?php require __DIR__ . '/partials/footer.php' ?>

<?php $this->endBody() ?>
</body>


</html>
<?php //$this->endPage() ?>
