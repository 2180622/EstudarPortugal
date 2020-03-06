<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocStock */

$this->title = 'Update Doc Stock: ' . $model->idDocStock;
$this->params['breadcrumbs'][] = ['label' => 'Doc Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDocStock, 'url' => ['view', 'id' => $model->idDocStock]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="doc-stock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
