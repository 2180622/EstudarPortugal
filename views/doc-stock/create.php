<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocStock */

$this->title = 'Create Doc Stock';
$this->params['breadcrumbs'][] = ['label' => 'Doc Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-stock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
