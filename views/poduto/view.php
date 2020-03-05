<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Produto */

$this->title = $model->idProduto;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idProduto], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idProduto], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idProduto',
            'descricao',
            'tipo',
            'anoAcademico',
            'valorTotal',
            'valorTotalAgente',
            'valorTotalSubAgente',
            'dataCriacao',
            'deleted_at',
            'idAgente',
            'idSubAgente',
            'idCliente',
            'idUniversidade1',
            'idUniversidade2',
        ],
    ]) ?>

</div>
