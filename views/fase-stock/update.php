<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FaseStock */

$this->title = 'Update Fase Stock: ' . $model->idFaseStock;
$this->params['breadcrumbs'][] = ['label' => 'Fase Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idFaseStock, 'url' => ['view', 'id' => $model->idFaseStock]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fase-stock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
