<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutoStock */

$this->title = 'Update Produto Stock: ' . $model->idProdutoStock;
$this->params['breadcrumbs'][] = ['label' => 'Produto Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idProdutoStock, 'url' => ['view', 'id' => $model->idProdutoStock]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produto-stock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
